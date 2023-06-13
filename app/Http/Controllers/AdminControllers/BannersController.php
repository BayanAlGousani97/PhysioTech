<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Helpers;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::get();

        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        $bannerT = $banner->getTranslations();
        return view('admin.banners.edit', compact('banner', 'bannerT'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title_en' => 'required|string',
            'title_ar' => 'required|string',
            'description_ar' => '',
            'description_en' => '',
            'image_ar' => '',
            'image_en' => '',
        ]);
        // if ($validator->fails()) {
        //     // TODO return with failed
        // }

        try {
            $banner = Banner::find($id);

            if (!$banner)
                abort(404);

            $bannerT = $banner->getTranslations();

            $banner->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $banner->description = ['en' => $request->description_en, 'ar' => $request->description_ar];

            Helpers::deleteFile("img/banners/" . $bannerT['image']['en']);
            Helpers::deleteFile("img/banners/" . $bannerT['image']['ar']);

            $imageEn = Helpers::uploadFileOnPublic($request->image_en, "img/banners", Str::slug($request->title_en . "-" . rand() . "-en"));
            $imageAr = Helpers::uploadFileOnPublic($request->image_ar, "img/banners", Str::slug($request->title_ar . "-" . rand() . "-ar"));
            $banner->image = ['en' => $imageEn, 'ar' => $imageAr];
            $banner->save();
            return back();
        } catch (\Throwable $th) {
            // abort(500);
            dd($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $banner = Banner::find($request->id);

            if (!$banner)
                abort(404);

            $banner->delete();
            return response(['data' => '', 'message' => 'Your banner has been deleted succssfully']);
        } catch (\Throwable $th) {
            abort(500);
        }
    }
}
