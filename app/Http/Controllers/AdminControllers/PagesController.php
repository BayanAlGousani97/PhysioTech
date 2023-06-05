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

    public function contact()
    {
        $info = Info::first();
        $info = $info->getTranslations();
        return view('admin.contact', compact('info'));
    }

    public function updateContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'summary_ar' => 'required|string',
            'summary_en' => 'required|string',
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
}
