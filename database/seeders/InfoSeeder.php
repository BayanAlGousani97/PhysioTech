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
        $slogan = ['en' => 'Physiotherapy | Home Care', 'ar' => 'معالجة فيزيائية | عناية منزلية'];
        $summary = ['en' => 'Home Care Home Care Home Care Home Care Home Care Home Care', 'ar' => 'فيزيوتيك للمعالجة الفيزيائية والعناية المنزلية'];
        $address = ['en' => 'KSA - Riyadh - Al-Morouj District - Imam Saud bin Abdulaziz Street',
        'ar' => 'المملكة العربية السعودية -الرياض - حي المروج - طريق الإمام سعود بن عبدالعزيز'];

        $info->setTranslations('title', $title);
        $info->setTranslations('slogan', $slogan);
        $info->setTranslations('summary', $summary);
        $info->setTranslations('address', $address);

        $info->email = 'info@physiotech.sa';
        $info->whatsapp = '966582700602';
        $info->facebook = '';
        $info->instagram = '';
        $info->telegram = '';
        $info->youtube = '';
        $info->snapchat = '';
        $info->phone1 =  '00966582700602';
        $info->phone2 =   '00966505151977';
        $info->tel = '0112443444';
        $info->twitter = '';
        $info->map = '';
        $info->linkedin = '';

        $info->save();
    }
}
