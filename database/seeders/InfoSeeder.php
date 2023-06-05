<?php

namespace Database\Seeders;

use App\Models\Info;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info = new Info;

        $title = ['en' => 'PhysioTech', 'ar' => 'فيزيوتيك'];
        $slogan = ['en' => 'Home Care', 'ar' => 'عناية منزلية'];
        $summary = ['en' => 'Home Care Home Care Home Care Home Care Home Care Home Care', 'ar' => 'فيزيوتيك للمعالجة الفيزيائية والعناية المنزلية'];
        $phone = ['en' => '0996312345678', 'ar' => '0996312345678'];
        $address = ['en' => 'Saudi - test - test street', 'ar' => 'المملكة العربية السعودية - الرياض - شارع الاربعين'];

        $info->setTranslations('title', $title);
        $info->setTranslations('slogan', $slogan);
        $info->setTranslations('summary', $summary);
        $info->setTranslations('phone', $phone);
        $info->setTranslations('address', $address);

        $info->email = 'doctor@physiotech.sa';
        $info->whatsapp = '987654321';
        $info->facebook = 'physiotech';
        $info->instagram = '@physiotech';
        $info->telegram = '@physiotech';
        $info->youtube = '@physiotech';
        $info->snapchat = '@physiotech';
        $info->twitter = '@physiotech';
        $info->map = '@physiotech';
        $info->linkedin = '@physiotech';

        $info->save();
    }
}
