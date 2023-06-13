<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = [
            [
                'full_name' => ['en'=>'Ahmed AL Ahmed', 'ar'=>'أحمد الأحمد'],
                'image' => 'ahmed.png',
                'description'=> ['en'=>'Dr.Ahmed is the best', 'ar'=>'الدكتور أحمد هو الأفضل']
            ],
            [
                'full_name' => ['en'=>'Mohammed AL Mohammed','ar'=>'محمد المحمد'],
                'image' => 'mohammed.png',
                'description'=> ['en'=>'Dr.mohammed is the best', 'ar'=>'الدكتور محمد هو اأحسن']
            ],
            [
                'full_name' => ['en'=>'Khaled AL Khaled', 'ar'=>'خالد الخالد'],
                'image' => 'khaled.png',
                'description'=>['en'=>'Dr.Khaled is the best', 'ar'=>'الدكتور خالد هو الأكثر خبرة']
            ],
            [
                'full_name' => ['en'=>'Ahmed AL Ahmed', 'ar'=>'أحمد الأحمد'],
                'image' => 'ahmed.png',
                'description'=> ['en'=>'Dr.Ahmed is the best', 'ar'=>'الدكتور أحمد هو الأفضل']
            ],
            [
                'full_name' => ['en'=>'Mohammed AL Mohammed','ar'=>'محمد المحمد'],
                'image' => 'mohammed.png',
                'description'=> ['en'=>'Dr.mohammed is the best', 'ar'=>'الدكتور محمد هو اأحسن']
            ],
            [
                'full_name' => ['en'=>'Khaled AL Khaled', 'ar'=>'خالد الخالد'],
                'image' => 'khaled.png',
                'description'=>['en'=>'Dr.Khaled is the best', 'ar'=>'الدكتور خالد هو الأكثر خبرة']
            ]
        ];

        foreach ($doctors as $item) {
            Doctor::create($item);
        }
    }
}
