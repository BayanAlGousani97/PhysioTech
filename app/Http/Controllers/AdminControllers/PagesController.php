<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Info;
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
        return view('admin.header');
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

            return view('admin.header'); // TODO return with success
        } catch (\Throwable $th) {
            // TODO return with failed
        }
    }
}
