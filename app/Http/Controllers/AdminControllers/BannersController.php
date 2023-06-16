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
        $validator = Validator::make($request->all(),
            [
                'title_en' => 'required|string|max:500',
                'title_ar' => 'required|string|max:500',
                'description_ar' => 'nullable|string',
                'description_en' => 'nullable|string',
                'image_ar' => ['required','image:JPG,JPEG,PNG,WEBP,BMP,GIF', 'max:1024', 'dimensions:min_width=1200,min_height=350,max_width=3000,max_height=500'],
                'image_en' => ['required','image:JPG,JPEG,PNG,WEBP,BMP,GIF', 'max:1024', 'dimensions:min_width=1200,min_height=350,max_width=3000,max_height=500'],
            ],
            [
                'title_en.required' => 'Title in English is required.',
                'title_ar.required' => 'Title in Arabic is required.',
                'title_en.string' => 'Title in English must be text.',
                'title_ar.string' => 'Title in Arabic must be text.',
                'title_en.max' => 'The title in English is 500 characters maximum',
                'title_ar.max' => 'The title in Arabic is 500 characters maximum',

                'description_en.string' => 'Description in English must be text.',
                'description_ar.string' => 'Description in Arabic must be text.',

                'image_ar.dimensions' => 'In Arabic Content: Images width must be between [1200, 3000] and hight between [350, 500]',
                'image_en.dimensions' => 'In English Content: Images width must be between [1200, 3000] and hight between [350, 500]',

                'image_en.image' => 'In English Content: Image type must be png, jpeg, jpg, webp, bmp, gif',
                'image_ar.image' => 'In Arabic Content: Image type must be png, jpeg, jpg, webp, bmp, gif',

                'image_en.max' => 'The image in English is 1024 MB maximum',
                'image_ar.max' => 'The image in Arabic is 1024 MB maximum',

                'image_en.required' => 'The image in English is required',
                'image_ar.required' => 'The image in Arabic is required',
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors(['errors'=> $validator->errors()->all()]);
        }

        try {
            $banner = Banner::find($id);

            if (!($banner))
                return back()->with('error','This banner doesnt found');

            $bannerT = $banner->getTranslations();

            $banner->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $banner->description = ['en' => $request->description_en, 'ar' => $request->description_ar];

            Helpers::deleteFile("img/banners/" . $bannerT['image']['en']);
            Helpers::deleteFile("img/banners/" . $bannerT['image']['ar']);

            $imageEn = Helpers::uploadFileOnPublic($request->image_en, "img/banners", Str::slug($request->title_en . "-" . rand() . "-en"));
            $imageAr = Helpers::uploadFileOnPublic($request->image_ar, "img/banners", Str::slug($request->title_ar . "-" . rand() . "-ar"));
            $banner->image = ['en' => $imageEn, 'ar' => $imageAr];
            $banner->save();

            return back()->with('success','This banner has updated successfully!');

        } catch (\Throwable $th) {
            return back()->with('error','Something wrong, try later again please');
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
                return back()->with('warning','This banner doesnt found');

            $banner->delete();
            return response(['data' => '', 'message' => 'Your banner has been deleted succssfully']);
        } catch (\Throwable $th) {
            return back()->with('error','Something wrong, try later again please');
        }
    }
}
