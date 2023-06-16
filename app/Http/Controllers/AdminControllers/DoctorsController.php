<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(),
            [
                'title_en' => 'required|string|max:500',
                'title_ar' => 'required|string|max:500',
            ],
            [
                'title_en.required' => 'Title in English is required.',
                'title_ar.required' => 'Title in Arabic is required.',
                'title_en.string' => 'Title in English must be text.',
                'title_ar.string' => 'Title in Arabic must be text.',
                'title_en.max' => 'The title in English is 500 characters maximum',
                'title_ar.max' => 'The title in Arabic is 500 characters maximum',
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors(['errors'=> $validator->errors()->all()]);
        }

        try {
            $doctor = Section::where('slug', 'doctors')->first();
            $doctor->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $doctor->save();

            return back()->with('success','Updated doctor section Successfully');
        } catch (\Throwable $th) {
            return back()->with('error','Something wrong, try later again please');
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
        $validator = Validator::make($request->all(),
            [
                'full_name_en' => 'required|string|max:250',
                'full_name_ar' => 'required|string|max:250',
                'description_ar' => 'required|string',
                'description_en' => 'required|string',
            ],
            [
                'full_name_en.required' => 'Title in English is required.',
                'full_name_ar.required' => 'Title in Arabic is required.',
                'full_name_en.string' => 'Title in English must be text.',
                'full_name_ar.string' => 'Title in Arabic must be text.',
                'full_name_en.max' => 'The title in English is 500 characters maximum.',
                'full_name_ar.max' => 'The title in Arabic is 500 characters maximum.',
                'description_en.string' => 'Description in English must be text.',
                'description_ar.string' => 'Description in Arabic must be text.',
                'description_en.required' => 'Description in English is required.',
                'description_ar.required' => 'Description in Arabic is required.',
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors(['errors'=> $validator->errors()->all()]);
        }
        try {
            $doctor = new Doctor;
            $doctor->full_name = ['en' => $request->full_name_en, 'ar' => $request->full_name_ar];
            $doctor->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            $doctor->save();

            return back()->with('success','Add doctor section Successfully');

        } catch (\Throwable $th) {
            return back()->with('error','Something wrong, try later again please');
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
        $validator = Validator::make($request->all(),
            [
                'full_name_en' => 'required|string|max:250',
                'full_name_ar' => 'required|string|max:250',
                'description_ar' => 'required|string',
                'description_en' => 'required|string',
            ],
            [
                'full_name_en.required' => 'Title in English is required.',
                'full_name_ar.required' => 'Title in Arabic is required.',
                'full_name_en.string' => 'Title in English must be text.',
                'full_name_ar.string' => 'Title in Arabic must be text.',
                'full_name_en.max' => 'The title in English is 500 characters maximum.',
                'full_name_ar.max' => 'The title in Arabic is 500 characters maximum.',
                'description_en.string' => 'Description in English must be text.',
                'description_ar.string' => 'Description in Arabic must be text.',
                'description_en.required' => 'Description in English is required.',
                'description_ar.required' => 'Description in Arabic is required.',
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors(['errors'=> $validator->errors()->all()]);
        }
        try {
            $doctor = Doctor::find($id);
            if (!$doctor)
                return back()->with('warning','This doctor doesnt found');

            $doctorT = $doctor->getTranslations();

            $doctor->full_name = ['en' => $request->full_name_en, 'ar' => $request->full_name_ar];
            $doctor->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            $doctor->save();

            return back()->with('success','Updated doctor info Successfully');
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
            $doctor = Doctor::find($request->id);

            if (!$doctor)
                return back()->with('warning','This doctor doesnt found');

            $doctor->delete();
            return response(['data' => '', 'message' => 'Deleted succssfully']);
        } catch (\Throwable $th) {
            return back()->with('error','Something wrong, try later again please');
        }
    }
}
