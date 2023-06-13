<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $businessHour = new Section;
        $businessHour->name = ['en' => 'Business Hours', 'ar' => 'ساعات العمل'];
        $businessHour->slug = Str::slug("Business Hours");
        $businessHour->title = ['en' => 'Business Hours', 'ar' => 'الرجاء الالتزام بساعات العمل والحضور ضمن هذه الأوقات'];
        $businessHour->save();


        $aboutUs = new Section;
        $aboutUs->name = ['en' => 'About Us', 'ar' => 'من نحن'];
        $aboutUs->slug = Str::slug("About Us");
        $aboutUs->title = ['en' => 'About US About US About US', 'ar' => 'من نحن نحن فيزيوتيك'];
        $aboutUs->image = ['en' => 'about-us-en.png', 'ar' => 'about-us-ar.png'];
        $aboutUs->description = [
            'en' => ' About US About US About US About US About US About US About US About US About US About US About US About USAbout US About US About USAbout US About US About USAbout US About US About USAbout US About US About USAbout US About US About USAbout US About US About US',
            'ar' => 'من نحن نحن فيزيوتيك من نحن نحن فيزيوتيك',
        ];
        $aboutUs->save();

        $goal = new Section;
        $goal->name = ['en' => 'Our Goal', 'ar' => 'أهدافنا'];
        $goal->slug = Str::slug("Our Goal");
        $goal->title = ['en' => 'Our Goal Our Goal Our Goal', 'ar' => 'أهدافنا أهدافنا أهدافنا'];
        $goal->image = ['en' => 'our-goal-en.png', 'ar' => 'our-goal-ar.png'];
        $goal->description = [
            'en' => 'Our Goal Our Goal Our Goal Our Goal Our Goal Our Goal Our Goal ',
            'ar' => 'أهدافنا أهدافنا أهدافنا أهدافنا أهدافنا أهدافنا أهدافنا أهدافنا',
        ];
        $goal->save();

        $mission = new Section;
        $mission->name = ['en' => 'Our Mission', 'ar' => 'رسالتنا'];
        $mission->slug = Str::slug("Our Mission");
        $mission->title = ['en' => 'Our Mission Our Mission Our Mission', 'ar' => 'رسالتنا رسالتنا رسالتنا'];
        $mission->image = ['en' => 'our-mission-en.png', 'ar' => 'our-mission-ar.png'];
        $mission->description = [
            'en' => 'Our mission Our mission Our mission Our mission Our mission Our mission Our mission ',
            'ar' => 'رسالتنا رسالتنا رسالتنا رسالتنا رسالتنا رسالتنا رسالتنا رسالتنا',
        ];
        $mission->save();

        $vision = new Section;
        $vision->name = ['en' => 'Our vision', 'ar' => 'رؤيتنا'];
        $vision->slug = Str::slug("Our vision");
        $vision->title = ['en' => 'Our vision Our vision Our vision', 'ar' => 'رؤيتنا رؤيتنا رؤيتنا'];
        $vision->image = ['en' => 'our-vision-en.png', 'ar' => 'our-vision-ar.png'];
        $vision->description = [
            'en' => 'Our vision Our vision Our vision Our vision Our vision Our vision Our vision ',
            'ar' => 'رؤيتنا رؤيتنا رؤيتنا رؤيتنا رؤيتنا رؤيتنا رؤيتنا رؤيتنا',
        ];
        $vision->save();


        $service = new Section;
        $service->name = ['en' => 'Our Services', 'ar' => 'خدماتنا'];
        $service->slug = Str::slug("Our Services");
        $service->title = ['en' => 'Our vision Our vision Our vision', 'ar' => 'رؤيتنا رؤيتنا رؤيتنا'];
        $service->save();

        $doctor = new Section;
        $doctor->name = ['en' => 'Doctors', 'ar' => 'أطباؤنا'];
        $doctor->slug = Str::slug("Doctors");
        $doctor->title = ['en' => 'We have the best doctors', 'ar' => 'لدينا أطباء نخبة على مستوى العالم'];
        $doctor->save();


        $contactUs = new Section;
        $contactUs->name = ['en' => 'Contact Us', 'ar' => 'تواصل معنا'];
        $contactUs->slug = Str::slug("Contact Us");
        $contactUs->title = ['en' => 'We have the best doctors', 'ar' => 'لدينا أطباء نخبة على مستوى العالم'];
        $contactUs->description = ['en' => 'We have the best doctors We have the best doctors', 'ar' => 'لدينا أطباء نخبة على مستوى العالم'];
        $contactUs->image = ['en' => 'contact-us-en.png', 'ar' => 'contact-us-ar.png'];
        $contactUs->save();
    }
}
