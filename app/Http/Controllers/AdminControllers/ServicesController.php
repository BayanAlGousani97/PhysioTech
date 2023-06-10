<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Service;
use Illuminate\Http\Request;

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
        // TODO: uploading images .

        try {
            $service = new Service;
            $service->name = ['en' => $request->name_en, 'ar' => $request->name_ar];
            $service->short_description = ['en' => $request->short_description_en, 'ar' => $request->short_description_ar];
            $service->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            $service->image = ['en' => $request->image_en, 'ar' => $request->image_ar];
            $service->save();

            return redirect()->route('services.index');
        } catch (\Throwable $th) {
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

            $service->update([
                'name' => ['en' => $request->name_en, 'ar' => $request->name_ar],
                'description' => ['en' => $request->description_en, 'ar' => $request->description_ar],
                'short_description' => ['en' => $request->short_description_en, 'ar' => $request->short_description_ar],
                'image' => ['en' => $request->image_en, 'ar' => $request->image_ar],
            ]);

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
