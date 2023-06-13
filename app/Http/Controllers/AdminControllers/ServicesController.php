<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Helpers;
use App\Models\Section;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Throwable;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::get();
        $section = Section::where('slug', 'our-services')->first();
        $sectionT = $section->getTranslations();

        return view('admin.services.index', compact('services', 'sectionT'));
    }

    function updateSectionService(Request $request)
    {
        // TODO Make validations ..
        try {
            $service = Section::where('slug', 'our-services')->first();
            $service->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $service->save();

            return redirect()->route('services.index');
        } catch (\Throwable $th) {
            abort(500);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: Validation ..

        try {
            $service = new Service;
            $service->name = ['en' => $request->name_en, 'ar' => $request->name_ar];
            $service->short_description = ['en' => $request->short_description_en, 'ar' => $request->short_description_ar];
            $service->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            $imageEn = Helpers::uploadFileOnPublic($request->image_en, "img/services", Str::slug($request->name_en . "-" . rand() . "-en"));
            $imageAr = Helpers::uploadFileOnPublic($request->image_ar, "img/services", Str::slug($request->name_ar . "-" . rand() . "-ar"));
            $service->image = ['en' => $imageEn, 'ar' => $imageAr];
            $service->save();

            return redirect()->route('services.index');
        } catch (Throwable $th) {
            abort(500);
        }
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
        $service = Service::find($id);
        $serviceT = $service->getTranslations();

        return view('admin.services.edit', compact('service', 'serviceT'));
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
        // TODO Validations..
        // $validator = Validator::make($request->all(), [
        //     'title_en' => 'required|string',
        //     'title_ar' => 'required|string',
        //     'description_ar' => '',
        //     'description_en' => '',
        //     'image_ar' => '',
        //     'image_en' => '',
        // ]);
        // if ($validator->fails()) {
        //     // TODO return with failed
        // }

        try {
            $service = Service::find($id);
            if (!$service)
                abort(404);

            $serviceT = $service->getTranslations();

            $service->name = ['en' => $request->name_en, 'ar' => $request->name_ar];
            $service->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            $service->short_description = ['en' => $request->short_description_en, 'ar' => $request->short_description_ar];

            Helpers::deleteFile("img/services/" . $serviceT['image']['en']);
            Helpers::deleteFile("img/services/" . $serviceT['image']['ar']);

            $imageEn = Helpers::uploadFileOnPublic($request->image_en, "img/services", Str::slug($request->name_en . "-" . rand() . "-en"));
            $imageAr = Helpers::uploadFileOnPublic($request->image_ar, "img/services", Str::slug($request->name_ar . "-" . rand() . "-ar"));
            $service->image = ['en' => $imageEn, 'ar' => $imageAr];

            $service->save();

            return redirect()->route('services.index');
        } catch (\Throwable $th) {
            abort(500);
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
            $service = Service::find($request->id);

            if (!$service)
                abort(404);

            $service->delete();
            return response(['data' => '', 'message' => 'Your service has been deleted succssfully']);
        } catch (\Throwable $th) {
            abort(500);
        }
    }
}
