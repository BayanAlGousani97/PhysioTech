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
                'to' => 'array|required',
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

                'from.array' => 'From fields must be to all days',
                'from.required' => 'To fields are required',
                'to.array' => 'To fields must be to all days',
                'to.required' => 'To fields are required',

                'status.array' => 'Status fields must be to all days',
                'status.required' => 'Status fields are required',

                'status.*.string' => 'Status must be string',
                'status.*.required' => 'Status are required',


                'business_day.array' => 'Business days fields must be to all days',
                'business_day.required' => 'Business days  fields are required',

                'business_day.*.string' => 'Each business day must be string',
                'business_day.*.required' => 'Each business day are required',
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
            'phone1' => 'required|string|min:8|max:14',
            'phone2' => 'required|string|min:8|max:14',
            'tel' => 'required|string|min:8|max:14',
            'email' => 'required|string|email:rfc,dns',
            'whatsapp' => 'nullable|string',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'telegram' => 'nullable|string',
            'youtube' => 'nullable|string',
            'snapchat' => 'nullable|string',
            'twitter' => 'nullable|string',
            // 'map' => 'required|string',
        ],[
            'address_en.required'=> 'Address is required in English.',
            'address_ar.required'=>'Address is reuired in Arabic.',
            'address_en.string'=>'Address must be text in English.',
            'address_ar.string'=>'Address must be text in Arabic.',
            'phone1.required'=>'Phone is required in English.',
            'phone2.required'=>'Phone is required in Arabic.',
            'tel.required'=>'Phone is required in Arabic.',
            'phone1.string'=>'Phone must be as 00966 58 123 1234 in Arabic.',
            'phone2.string'=>'Phone must be as 00966 58 123 1234 in English.',
            'tel.string'=>'Phone must be as 00966 58 123 1234 in English.',
            'phone1.min'=>'Phone must be 8 numbers minimum in English.',
            'phone2.min'=>'Phone must be 8 numbers minimum in Arabic.',
            'tel.min'=>'Phone must be 8 numbers minimum in Arabic.',
            'phone1.max'=>'Phone must be 14 numbers maximum in English.',
            'phone2.max'=>'Phone must be 14 numbers maximum in Arabic.',
            'tel.max'=>'Phone must be 14 numbers maximum in Arabic.',
            'email.required'=>'Your email is required.',
            'email.string'=>'Your email must be text, as admin@physio.sa',
            'email.email'=>'Email must be exist email.',
            'whatsapp.string'=> 'Whatsapp must be exit whatspp account, as 966581231234 without + or 00.',
            'facebook.string'=>'Facebook must be a link to your offical page.',
            'instagram.string'=>'Instagram must be a link to your offical account.',
            'telegram.string'=>'Telegram must be a link to your offical channle.',
            'youtube.string'=>'Youtube must be a link to your offical channle.',
            'snapchat.string'=>'Snapchat must be a link to your offical account.',
            'twitter.string'=>'Twitter must be a link to your offical account.',
            // 'map.string'=>'Map link must be a link to your location in google map',
            // 'map.required'=>'Your google map is required',
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

            $contact->email = $request->email;
            $contact->phone1 = $request->phone1;
            $contact->phone2 = $request->phone2;
            $contact->tel = $request->tel;
            $contact->whatsapp = $request->whatsapp;
            $contact->facebook = $request->facebook;
            $contact->instagram = $request->instagram;
            $contact->telegram = $request->telegram;
            $contact->youtube = $request->youtube;
            $contact->snapchat = $request->snapchat;
            $contact->twitter = $request->twitter;
            // $contact->map = $request->map;
            $contact->save();


            return back()->with('success','Updated contact info and social media links Successfully');

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
            'title_en' => 'required|string|max:250',
            'title_ar' => 'required|string|max:250',
            'description_ar' => 'required|string|min:500',
            'description_en' => 'required|string|min:500',
            'image_ar' => 'required|image:JPG,JPEG,PNG,WEBP,BMP,GIF|max:1024',
            'image_en' => 'required|image:JPG,JPEG,PNG,WEBP,BMP,GIF|max:1024',
        ],
        [
            'title_en.required' => 'Title in English is required.',
            'title_en.string' => 'Title in English must be text.',
            'title_en.max' => 'Title in English is 250 characters maximum.',
            'title_ar.required' => 'Title in Arabic is required.',
            'title_ar.string' => 'Title in Arabic must be text.',
            'title_ar.max' => 'Title in Arabic is 250 characters maximum.',

            'description_en.required' => 'Description in English is required.',
            'description_en.string' => 'Description in English must be a long text.',
            'description_en.min' => 'Description in English is 500 chars minimum.',
            'description_ar.required' => 'Description in Arabic is required.',
            'description_ar.string' => 'Description in Arabic must be a long text.',
            'description_ar.min' => 'Description in Arabic is 500 chars minimum.',

            'image_ar.required' => 'Image in Arabic is required.',
            'image_ar.image' => 'In Arabic, must upload image png or jpg or jpeg.',
            'image_ar.max' => 'Image in Arabic is 1 MB maximum.',

            'image_en.required' => 'Image in English is required.',
            'image_en.image' => 'In English, must upload image png or jpg or jpeg.',
            'image_en.max' => 'Image in English is 1 MB maximum.',
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
            'title_en' => 'required|string|max:250',
            'title_ar' => 'required|string|max:250',
            'description_ar' => 'required|string|min:250',
            'description_en' => 'required|string|min:250',
            'image_ar' => 'required|image:JPG,JPEG,PNG,WEBP,BMP,GIF|max:1024',
            'image_en' => 'required|image:JPG,JPEG,PNG,WEBP,BMP,GIF|max:1024',
        ],
        [
            'title_en.required' => 'Title in English is required.',
            'title_en.string' => 'Title in English must be text.',
            'title_en.max' => 'Title in English is 250 characters maximum.',
            'title_ar.required' => 'Title in Arabic is required.',
            'title_ar.string' => 'Title in Arabic must be text.',
            'title_ar.max' => 'Title in Arabic is 250 characters maximum.',

            'description_en.required' => 'Description in English is required.',
            'description_en.string' => 'Description in English must be a long text.',
            'description_en.min' => 'Description in English is 250 chars minimum.',
            'description_ar.required' => 'Description in Arabic is required.',
            'description_ar.string' => 'Description in Arabic must be a long text.',
            'description_ar.min' => 'Description in Arabic is 250 chars minimum.',

            'image_ar.required' => 'Image in Arabic is required.',
            'image_ar.image' => 'In Arabic, must upload image png or jpg or jpeg.',
            'image_ar.max' => 'Image in Arabic is 1 MB maximum.',

            'image_en.required' => 'Image in English is required.',
            'image_en.image' => 'In English, must upload image png or jpg or jpeg.',
            'image_en.max' => 'Image in English is 1 MB maximum.',
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
            'title_en' => 'required|string|max:250',
            'title_ar' => 'required|string|max:250',
            'description_ar' => 'required|string|min:250',
            'description_en' => 'required|string|min:250',
            'image_ar' => 'required|image:JPG,JPEG,PNG,WEBP,BMP,GIF|max:1024',
            'image_en' => 'required|image:JPG,JPEG,PNG,WEBP,BMP,GIF|max:1024',
        ],
        [
            'title_en.required' => 'Title in English is required.',
            'title_en.string' => 'Title in English must be text.',
            'title_en.max' => 'Title in English is 250 characters maximum.',
            'title_ar.required' => 'Title in Arabic is required.',
            'title_ar.string' => 'Title in Arabic must be text.',
            'title_ar.max' => 'Title in Arabic is 250 characters maximum.',

            'description_en.required' => 'Description in English is required.',
            'description_en.string' => 'Description in English must be a long text.',
            'description_en.min' => 'Description in English is 250 chars minimum.',
            'description_ar.required' => 'Description in Arabic is required.',
            'description_ar.string' => 'Description in Arabic must be a long text.',
            'description_ar.min' => 'Description in Arabic is 250 chars minimum.',

            'image_ar.required' => 'Image in Arabic is required.',
            'image_ar.image' => 'In Arabic, must upload image png or jpg or jpeg.',
            'image_ar.max' => 'Image in Arabic is 1 MB maximum.',

            'image_en.required' => 'Image in English is required.',
            'image_en.image' => 'In English, must upload image png or jpg or jpeg.',
            'image_en.max' => 'Image in English is 1 MB maximum.',
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
            'title_en' => 'required|string|max:250',
            'title_ar' => 'required|string|max:250',
            'description_ar' => 'required|string|min:250',
            'description_en' => 'required|string|min:250',
            'image_ar' => 'required|image:JPG,JPEG,PNG,WEBP,BMP,GIF|max:1024',
            'image_en' => 'required|image:JPG,JPEG,PNG,WEBP,BMP,GIF|max:1024',
        ],
        [
            'title_en.required' => 'Title in English is required.',
            'title_en.string' => 'Title in English must be text.',
            'title_en.max' => 'Title in English is 250 characters maximum.',
            'title_ar.required' => 'Title in Arabic is required.',
            'title_ar.string' => 'Title in Arabic must be text.',
            'title_ar.max' => 'Title in Arabic is 250 characters maximum.',

            'description_en.required' => 'Description in English is required.',
            'description_en.string' => 'Description in English must be a long text.',
            'description_en.min' => 'Description in English is 250 chars minimum.',
            'description_ar.required' => 'Description in Arabic is required.',
            'description_ar.string' => 'Description in Arabic must be a long text.',
            'description_ar.min' => 'Description in Arabic is 250 chars minimum.',

            'image_ar.required' => 'Image in Arabic is required.',
            'image_ar.image' => 'In Arabic, must upload image png or jpg or jpeg.',
            'image_ar.max' => 'Image in Arabic is 1 MB maximum.',

            'image_en.required' => 'Image in English is required.',
            'image_en.image' => 'In English, must upload image png or jpg or jpeg.',
            'image_en.max' => 'Image in English is 1 MB maximum.',
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
            return back()->with('success','Updated our vision section info Successfully');

        } catch (\Throwable $th) {
            return back()->with('error','Something wrong, try later again please');
        }
    }
}
