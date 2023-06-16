<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Helpers;
use App\Models\BusinessHour;
use App\Models\Info;
use App\Models\Section;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class PagesController extends Controller
{

    public function home()
    {
        return view('admin.index');
    }

    public function header()
    {
        $info = Info::first();
        $info = $info->getTranslations();
        return view('admin.header', compact('info'));
    }

    public function updateHeader(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'title_en' => 'required|string|max:500',
                'title_ar' => 'required|string|max:500',
                'slogan_ar' => 'required|string',
                'slogan_en' => 'required|string',
            ],
            [
                'title_en.required' => 'Title in English is required.',
                'title_ar.required' => 'Title in Arabic is required.',
                'title_en.string' => 'Title in English must be text.',
                'title_ar.string' => 'Title in Arabic must be text.',
                'title_en.max' => 'The title in English is 500 characters maximum',
                'title_ar.max' => 'The title in Arabic is 500 characters maximum',
                'slogan_en.required' => 'Slogan in English is required.',
                'slogan_ar.required' => 'Slogan in Arabic is required.',
                'slogan_en.string' => 'Slogan in English must be text.',
                'slogan_ar.string' => 'Slogan in Arabic must be text.',
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors(['errors'=> $validator->errors()->all()]);
        }

        try {
            $header = Info::first();

            if (!$header)
                $header = new Info;

            $titleTranslations = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $header->setTranslations('title', $titleTranslations);

            $sloganTranslations = ['en' => $request->slogan_en, 'ar' => $request->slogan_ar];
            $header->setTranslations('slogan', $sloganTranslations);

            $header->save();

            return back()->with('success','Updated header info Successfully');

        } catch (\Throwable $th) {
            return back()->with('error','Something wrong, try later again please');
        }
    }

    public function footer()
    {
        $info = Info::first();
        $info = $info->getTranslations();

        $businessHourTitle = Section::where('slug', 'business-hours')->first();
        $businessHourTitle = $businessHourTitle->getTranslations();

        $businessHours = BusinessHour::get();

        return view('admin.footer', compact('info', 'businessHourTitle', 'businessHours'));
    }

    public function updateFooter(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'summary_ar' => 'required|string',
                'summary_en' => 'required|string',
                'businesshour_en' => 'required|string|max:500',
                'businesshour_ar' => 'required|string|max:500',

                'from' => 'array|required',
                'from.*' => 'required|date_format:H:i',
                'to' => 'array|required',
                'to.*' => 'required|date_format:H:i',
                'status' => 'array|required',
                'status.*' => 'required|string',
                'business_day' => 'array|required',
                'business_day.*' => 'required'
            ],
            [
                'businesshour_en.required' => 'Business hour section in English is required.',
                'businesshour_ar.required' => 'Business hour section in Arabic is required.',
                'businesshour_en.string' => 'Business hour section in English must be text.',
                'businesshour_ar.string' => 'Business hour section in Arabic must be text.',
                'businesshour_en.max' => 'The business hour section in English is 500 characters maximum',
                'businesshour_ar.max' => 'The business hour section in Arabic is 500 characters maximum',
                'summary_en.required' => 'Summary in English is required.',
                'summary_ar.required' => 'Summary in Arabic is required.',
                'summary_en.string' => 'Summary in English must be text.',
                'summary_ar.string' => 'Summary in Arabic must be text.',
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors(['errors'=> $validator->errors()->all()]);
        }

        try {
            $footer = Info::first();

            if (!$footer)
                $footer = new Info;

            $titleTranslations = ['en' => $request->summary_en, 'ar' => $request->summary_ar];
            $footer->setTranslations('summary', $titleTranslations);
            $footer->save();


            $businessHourTitle = Section::where('slug', 'business-hours')->first();
            $businessHourTitle->title = ['en' => $request->businesshour_en, 'ar' => $request->businesshour_ar];
            $businessHourTitle->save();

            $businessHours = BusinessHour::get();

            foreach ($businessHours as $i => $item) {
                $item->update(['to' => $request->to[$i], 'from' => $request->from[$i], 'status' => $request->status[$i]]);
            }

            return back()->with('success','Updated footer info Successfully');
        } catch (\Throwable $th) {
            return back()->with('error','Something wrong, try later again please');
        }
    }

    public function contact()
    {
        $info = Info::first();
        $translateFields = $info->getTranslations();
        return view('admin.contact', compact('info', 'translateFields'));
    }

    public function updateContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'address_en' => 'required|string',
            'address_ar' => 'required|string',
            'phone_en' => 'required|string',
            'phone_ar' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors(['errors'=> $validator->errors()->all()]);
        }
        try {
            $contact = Info::first();

            if (!$contact)
                $contact = new Info;

            $addressTranslations = ['en' => $request->address_en, 'ar' => $request->address_ar];
            $contact->setTranslations('address', $addressTranslations);
            $phoneTranslations = ['en' => $request->phone_en, 'ar' => $request->phone_ar];
            $contact->setTranslations('phone', $phoneTranslations);

            $contact->email = $request->email;
            $contact->whatsapp = $request->whatsapp;
            $contact->facebook = $request->facebook;
            $contact->instagram = $request->instagram;
            $contact->telegram = $request->telegram;
            $contact->youtube = $request->youtube;
            $contact->snapchat = $request->snapchat;
            $contact->twitter = $request->twitter;
            $contact->map = $request->map;
            $contact->save();


            return back()->with('success','Updated cotantc info info Successfully');

        } catch (\Throwable $th) {
            return back()->with('error','Something wrong, try later again please');
        }
    }

    public function about()
    {
        $about = Section::where('slug', 'about-us')->first();
        $aboutTranslate = $about->getTranslations();

        return view('admin.about', compact('about', 'aboutTranslate'));
    }

    public function updateAbout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_en' => 'required|string',
            'title_ar' => 'required|string',
            'description_ar' => '',
            'description_en' => '',
            'image_ar' => '',
            'image_en' => '',
        ]);
        if ($validator->fails()) {
            return back()->withErrors(['errors'=> $validator->errors()->all()]);
        }

        try {
            $aboutUs = Section::where('slug', 'about-us')->first();
            $aboutUsT = $aboutUs->getTranslations();
            $aboutUs->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $aboutUs->description = ['en' => $request->description_en, 'ar' => $request->description_ar];

            Helpers::deleteFile("img/sections/" . $aboutUs->slug . "/" .$aboutUsT['image']['en']);
            Helpers::deleteFile("img/sections/" . $aboutUs->slug . "/" . $aboutUsT['image']['ar']);

            $imageEn = Helpers::uploadFileOnPublic($request->image_en, "img/sections/". $aboutUs->slug, Str::slug($request->name_en . "-" . rand() . "-en"));
            $imageAr = Helpers::uploadFileOnPublic($request->image_ar, "img/sections/". $aboutUs->slug, Str::slug($request->name_ar . "-" . rand() . "-ar"));
            $aboutUs->image = ['en' => $imageEn, 'ar' => $imageAr];
            $aboutUs->save();

            return back()->with('success','Updated about us section info successfully');

        } catch (\Throwable $th) {
            return back()->with('error','Something wrong, try later again please');

        }
    }

    public function goal()
    {
        $ourGoal = Section::where('slug', 'our-goal')->first();
        $ourGoalTranslate = $ourGoal->getTranslations();

        return view('admin.ourGoal', compact('ourGoal', 'ourGoalTranslate'));
    }

    public function updateGoal(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_en' => 'required|string',
            'title_ar' => 'required|string',
            'description_ar' => '',
            'description_en' => '',
            'image_ar' => '',
            'image_en' => '',
        ]);
        if ($validator->fails()) {
            return back()->withErrors(['errors'=> $validator->errors()->all()]);
        }

        try {
            $goal = Section::where('slug', 'our-goal')->first();
            $goal->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $goal->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            $imageEn = Helpers::uploadFileOnPublic($request->image_en, "img/sections/our-goal/", Str::slug($request->title_en . "-" . rand() . "-en"));
            $imageAr = Helpers::uploadFileOnPublic($request->image_ar, "img/sections/our-goal/", Str::slug($request->title_ar . "-" . rand() . "-ar"));
            $goal->image = ['en' => $imageEn, 'ar' => $imageAr];
            $goal->save();

            return back()->with('success','Updated goal section info Successfully');

        } catch (\Throwable $th) {
            return back()->with('error','Something wrong, try later again please');
        }
    }

    public function mission()
    {
        $ourMission = Section::where('slug', 'our-mission')->first();
        $ourMissionTranslate = $ourMission->getTranslations();

        return view('admin.ourMission', compact('ourMission', 'ourMissionTranslate'));
    }

    public function updateMission(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_en' => 'required|string',
            'title_ar' => 'required|string',
            'description_ar' => '',
            'description_en' => '',
            'image_ar' => '',
            'image_en' => '',
        ]);

        if ($validator->fails()) {
            return back()->withErrors(['errors'=> $validator->errors()->all()]);
        }

        try {
            $mission = Section::where('slug', 'our-mission')->first();
            $mission->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $mission->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            $imageEn = Helpers::uploadFileOnPublic($request->image_en, "img/sections/our-mission/", Str::slug($request->title_en . "-" . rand() . "-en"));
            $imageAr = Helpers::uploadFileOnPublic($request->image_ar, "img/sections/our-mission/", Str::slug($request->title_ar . "-" . rand() . "-ar"));
            $mission->image = ['en' => $imageEn, 'ar' => $imageAr];
            $mission->save();

            return back()->with('success','Updated our mission section info Successfully');

        } catch (\Throwable $th) {
            return back()->with('error','Something wrong, try later again please');
        }
    }

    public function vision()
    {
        $ourVision = Section::where('slug', 'our-vision')->first();
        $ourVisionTranslate = $ourVision->getTranslations();

        return view('admin.ourVision', compact('ourVision', 'ourVisionTranslate'));
    }

    public function updateVision(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_en' => 'required|string',
            'title_ar' => 'required|string',
            'description_ar' => '',
            'description_en' => '',
            'image_ar' => '',
            'image_en' => '',
        ]);
        if ($validator->fails()) {
            return back()->withErrors(['errors'=> $validator->errors()->all()]);
        }

        try {
            $vision = Section::where('slug', 'our-vision')->first();
            $vision->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $vision->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            $imageEn = Helpers::uploadFileOnPublic($request->image_en, "img/sections/our-vision/", Str::slug($request->title_en . "-" . rand() . "-en"));
            $imageAr = Helpers::uploadFileOnPublic($request->image_ar, "img/sections/our-vision/", Str::slug($request->title_ar . "-" . rand() . "-ar"));
            $vision->image = ['en' => $imageEn, 'ar' => $imageAr];
            $vision->save();
            return back()->with('success','Updated cotantc info info Successfully');

        } catch (\Throwable $th) {
            return back()->with('error','Something wrong, try later again please');
        }
    }
}
