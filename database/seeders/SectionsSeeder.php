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
    }
}
