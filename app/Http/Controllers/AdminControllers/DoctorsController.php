<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Section;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::get();
        $section = Section::where('slug', 'doctors')->first();
        $sectionT = $section->getTranslations();

        return view('admin.doctors.index', compact('doctors', 'sectionT'));
    }

    function updateSectionDoctor(Request $request)
    {
        // TODO Make validations ..
        try {
            $doctor = Section::where('slug', 'doctors')->first();
            $doctor->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $doctor->save();

            return redirect()->route('doctors.index');
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
        return view('admin.doctors.create');
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
            $doctor = new Doctor;
            $doctor->full_name = ['en' => $request->full_name_en, 'ar' => $request->full_name_ar];
            $doctor->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            $doctor->save();

            return redirect()->route('doctors.index');
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
        $doctor = Doctor::find($id);
        $doctorT = $doctor->getTranslations();

        return view('admin.doctors.edit', compact('doctor', 'doctorT'));
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
            $doctor = Doctor::find($id);
            if (!$doctor)
                abort(404);

            $doctorT = $doctor->getTranslations();

            $doctor->full_name = ['en' => $request->full_name_en, 'ar' => $request->full_name_ar];
            $doctor->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            $doctor->save();

            return redirect()->route('doctors.index');
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
            $doctor = Doctor::find($request->id);

            if (!$doctor)
                abort(404);

            $doctor->delete();
            return response(['data' => '', 'message' => 'Deleted succssfully']);
        } catch (\Throwable $th) {
            abort(500);
        }
    }
}
