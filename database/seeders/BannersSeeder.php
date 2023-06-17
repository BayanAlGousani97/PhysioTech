<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banners = [
            [
                'title' => ['en' => 'Home Care', 'ar' => 'عناية منزلية'],
                'image' => ['en' => 'banner1-en.png', 'ar' => 'banner1-ar.png'],
                'description' => [
                    'en' => 'When you can\'t come to our clinck, we send medical team to your home.',
                    'ar' => 'عندما لا تستطيع الحضور للمركز، نرسل فريق طبي لمنزلك'],
                'status' => 1,
            ],
            [
                'title' => ['en' => 'Book Appointment', 'ar' => 'احجز موعدك'],
                'image' => ['en' => 'banner2-en.png', 'ar' => 'banner2-ar.png'],
                'description' => ['en' => 'Book your appointment by one click, then a professional team will contact you.', 'ar' => 'احجز موعدك بضغطة زر، ويقوم فريق مختص بالتواصل معك.'],
                'status' => 1,
            ],
            [
                'title' => ['en' => 'Physiotherapy clinic', 'ar' => 'عيادة خاصة بالعلاج الطبيعي'],
                'image' => ['en' => 'banner3-en.png', 'ar' => 'banner3-ar.png'],
                'description' => ['en' => 'Opening a professional clinic specializing in physiotherapy within the neurology building',
                'ar' => 'افتتاح عيادة احترافية متخصصة بالعلاج الطبيعي ضمن مجمع طب الأعصاب'],
                'status' => 1,
            ],
        ];

        foreach ($banners as $item) {
            Banner::create($item);
        }
    }
}
