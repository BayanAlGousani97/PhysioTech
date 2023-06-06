<?php

namespace Database\Seeders;

use App\Models\BusinessHour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class BusinessHoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businessHour = new BusinessHour;
        $businessHour->day = 1;
        $businessHour->from = "09:00";
        $businessHour->to = "18:00";
        $businessHour->status = 'open';
        $businessHour->save();

        $businessHour = new BusinessHour;
        $businessHour->day = 2;
        $businessHour->from = "09:00";
        $businessHour->to = "18:00";
        $businessHour->status = 'open';
        $businessHour->save();

        $businessHour = new BusinessHour;
        $businessHour->day = 3;
        $businessHour->from = "09:00";
        $businessHour->to = "18:00";
        $businessHour->status = 'open';
        $businessHour->save();

        $businessHour = new BusinessHour;
        $businessHour->day = 4;
        $businessHour->from = "09:00";
        $businessHour->to = "18:00";
        $businessHour->status = 'open';
        $businessHour->save();

        $businessHour = new BusinessHour;
        $businessHour->day = 5;
        $businessHour->from = "09:00";
        $businessHour->to = "18:00";
        $businessHour->status = 'open';
        $businessHour->save();

        $businessHour = new BusinessHour;
        $businessHour->day = 6;
        $businessHour->from = "09:00";
        $businessHour->to = "18:00";
        $businessHour->status = 'open';
        $businessHour->save();

        $businessHour = new BusinessHour;
        $businessHour->day = 7;
        $businessHour->status = 'close';
        $businessHour->save();
    }
}
