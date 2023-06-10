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
                'title' => ['en' => 'First Banner', 'ar' => 'First Banner First Banner'],
                'image' => ['en' => 'banner1-en.png', 'ar' => 'banner1-ar.png'],
                'description' => ['en' => 'First Banner First Banner ', 'ar' => ' First Banner  First Banner  First Banner '],
                'status' => 1,
            ],
            [
                'title' => ['en' => 'Second Banner', 'ar' => 'Second Banner Second Banner'],
                'image' => ['en' => 'banner2-en.png', 'ar' => 'banner2-ar.png'],
                'description' => ['en' => 'First Banner First Banner ', 'ar' => ' First Banner  First Banner  First Banner '],
                'status' => 1,
            ],
            [
                'title' => ['en' => 'First Banner', 'ar' => 'First Banner First Banner'],
                'image' => ['en' => 'banner3-en.png', 'ar' => 'banner3-ar.png'],
                'description' => ['en' => 'First Banner First Banner ', 'ar' => ' First Banner  First Banner  First Banner '],
                'status' => 1,
            ],
        ];

        foreach ($banners as $item) {
            Banner::create($item);
        }
    }
}
