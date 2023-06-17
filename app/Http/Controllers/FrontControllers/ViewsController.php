<?php

namespace App\Http\Controllers\FrontControllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Booking;
use App\Models\BusinessHour;
use App\Models\Doctor;
use App\Models\Info;
use App\Models\Section;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class ViewsController extends Controller
{
    public function index()
    {
        $info = Info::first();
        $infoT = $info->getTranslations();
        $services = Service::get();
        $businessSection = Section::where('slug',Str::slug('Business Hours'))->first();
        $businessHours = BusinessHour::get();

        $banners = Banner::get();
        $aboutUs = Section::where('slug', Str::slug('About Us'))->first();
        $servicesSection = Section::where('slug', Str::slug('Our Services'))->first();
        $goal = Section::where('slug', Str::slug("Our Goal"))->first();
        $vision = Section::where('slug', Str::slug("Our vision"))->first();
        $mission = Section::where('slug', Str::slug("Our Mission"))->first();

        $doctorsSection = Section::where('slug', Str::slug("Doctors"))->first();
        $doctors = Doctor::get();

        $contactUs = Section::where('slug', Str::slug('Contact Us'))->first();
        return view('front.index', compact('info', 'infoT','services','businessSection','businessHours','banners','aboutUs',
        'servicesSection','goal', 'vision', 'mission','doctorsSection','doctors','contactUs'));
    }

    public function service($id){
        if(!$id)
            abort(404);

        $service = Service::find($id);

        if(!$service)
            abort(404);

        $info = Info::first();
        $infoT = $info->getTranslations();
        $services = Service::get();
        $businessSection = Section::where('slug',Str::slug('Business Hours'))->first();
        $businessHours = BusinessHour::get();
        $servicesSection = Section::where('slug', Str::slug('Our Services'))->first();


        return view('front.service', compact('info', 'infoT','services','businessSection','businessHours','service','servicesSection'));
    }

    public function bookAppointment() {
        $info = Info::first();
        $infoT = $info->getTranslations();
        $services = Service::get();
        $businessSection = Section::where('slug',Str::slug('Business Hours'))->first();
        $businessHours = BusinessHour::get();
        return view('front.bookAppointment',compact('info', 'infoT','services','businessSection','businessHours'));
    }

    function storeBookAppointment(Request $request)  {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:30',
            'middle_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'phone' => 'required|string|min:8|max:14',
            'card_number' => 'required|string',
            'gender' => 'required',
            'age' => 'required|integer',
            'notes' => 'nullable',
            ],
            [
                'first_name.required' => trans('views.first_name.required'),
                'first_name.string' => trans('views.first_name.string'),
                'first_name.max' => trans('views.first_name.max'),
                'middle_name.required' => trans('views.middle_name.required'),
                'middle_name.string' => trans('views.middle_name.string'),
                'middle_name.max' => trans('views.middle_name.max'),
                'last_name.required' => trans('views.last_name.required'),
                'last_name.string' => trans('views.last_name.string'),
                'last_name.max' => trans('views.last_name.max'),
                'phone.required' => trans('views.phone.required'),
                'phone.string' => trans('views.phone.string'),
                'phone.min' => trans('views.phone.min'),
                'phone.max' => trans('views.phone.max'),
                'card_number.required' => trans('views.card_number.required'),
                'card_number.string' => trans('views.card_number.string'),
                'gender.required' => trans('views.gender.required'),
                'age.required' => trans('views.age.required'),
                'age.integer' => trans('views.age.integer'),
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors(['errors'=> $validator->errors()->all()]);
        }

        try {
            $book= new Booking;
            $book->fill($request->all());
            $book->save();
            return back()->with('success',trans('views.site.bookAppointment.success'));

        } catch (\Throwable $th) {
            return back()->with('error',trans('views.site.bookAppointment.error'));
        }

    }

}
