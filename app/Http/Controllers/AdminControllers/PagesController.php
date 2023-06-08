<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\BusinessHour;
use App\Models\Info;
use App\Models\Section;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'title_ar' => 'required|string',
            'title_en' => 'required|string',
            'slogan_ar' => 'required|string',
            'slogan_en' => 'required|string',
        ]);
        if ($validator->fails()) {
            // TODO return with failed
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

            return back(); // TODO return with success
        } catch (\Throwable $th) {
            // TODO return with failed
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
        $validator = Validator::make($request->all(), [
            'summary_ar' => 'required|string',
            'summary_en' => 'required|string',
            'businesshour_en' => '',
            'businesshour_ar' => '',
            'from' => 'array|required',
            'to' => 'arraarray|requiredy|required',
            'status' => '',
            'business_day' => 'array|required'

        ]);
        // if ($validator->fails()) {
        //     // TODO return with failed
        // }

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

            return back(); // TODO return with success
        } catch (\Throwable $th) {
            // TODO return with failed
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


            return back(); // TODO return with success
        } catch (\Throwable $th) {
            // TODO return with failed
        }
    }

    public function about()
    {
        $about = Section::where('slug', 'about-us')->first();
        $about = $about->getTranslations();

        return view('admin.about', compact('about'));
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
        // if ($validator->fails()) {
        //     // TODO return with failed
        // }

        try {
            $aboutUs = Section::where('slug', 'about-us')->first();
            $aboutUs->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $aboutUs->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            // TODO : process upload images ..
            $aboutUs->image = ['en' => $request->image_en, 'ar' => $request->image_ar];
            $aboutUs->save();

            return back(); // TODO return with success
        } catch (\Throwable $th) {
            // TODO return with failed
        }
    }

    public function goal()
    {
        $ourGoal = Section::where('slug', 'our-goal')->first();
        $ourGoal = $ourGoal->getTranslations();

        return view('admin.ourGoal', compact('ourGoal'));
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
        // if ($validator->fails()) {
        //     // TODO return with failed
        // }

        try {
            $aboutUs = Section::where('slug', 'our-goal')->first();
            $aboutUs->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $aboutUs->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            // TODO : process upload images ..
            $aboutUs->image = ['en' => $request->image_en, 'ar' => $request->image_ar];
            $aboutUs->save();

            return back(); // TODO return with success
        } catch (\Throwable $th) {
            // TODO return with failed
        }
    }

    public function mission()
    {
        $ourMission = Section::where('slug', 'our-mission')->first();
        $ourMission = $ourMission->getTranslations();

        return view('admin.ourMission', compact('ourMission'));
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
        // if ($validator->fails()) {
        //     // TODO return with failed
        // }

        try {
            $aboutUs = Section::where('slug', 'our-mission')->first();
            $aboutUs->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $aboutUs->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            // TODO : process upload images ..
            $aboutUs->image = ['en' => $request->image_en, 'ar' => $request->image_ar];
            $aboutUs->save();

            return back(); // TODO return with success
        } catch (\Throwable $th) {
            // TODO return with failed
        }
    }

    public function vision()
    {
        $ourVision = Section::where('slug', 'our-vision')->first();
        $ourVision = $ourVision->getTranslations();

        return view('admin.ourVision', compact('ourVision'));
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
        // if ($validator->fails()) {
        //     // TODO return with failed
        // }

        try {
            $aboutUs = Section::where('slug', 'our-vision')->first();
            $aboutUs->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $aboutUs->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            // TODO : process upload images ..
            $aboutUs->image = ['en' => $request->image_en, 'ar' => $request->image_ar];
            $aboutUs->save();

            return back(); // TODO return with success
        } catch (\Throwable $th) {
            // TODO return with failed
        }
    }
}
