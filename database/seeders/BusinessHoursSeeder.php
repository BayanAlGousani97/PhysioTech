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
        $businessHour->from = Carbon::createFromTime('09', '00', '00');
        $businessHour->to = Carbon::createFromTime('18', '00', '00');
        $businessHour->status = 1;
        $businessHour->save();

        $businessHour = new BusinessHour;
        $businessHour->day = 2;
        $businessHour->from = Carbon::createFromTime('09', '00', '00');
        $businessHour->to = Carbon::createFromTime('18', '00', '00');
        $businessHour->status = 1;
        $businessHour->save();

        $businessHour = new BusinessHour;
        $businessHour->day = 3;
        $businessHour->from = Carbon::createFromTime('09', '00', '00');
        $businessHour->to = Carbon::createFromTime('18', '00', '00');
        $businessHour->status = 1;
        $businessHour->save();

        $businessHour = new BusinessHour;
        $businessHour->day = 4;
        $businessHour->from = Carbon::createFromTime('09', '00', '00');
        $businessHour->to = Carbon::createFromTime('18', '00', '00');
        $businessHour->status = 1;
        $businessHour->save();

        $businessHour = new BusinessHour;
        $businessHour->day = 5;
        $businessHour->from = Carbon::createFromTime('09', '00', '00');
        $businessHour->to = Carbon::createFromTime('18', '00', '00');
        $businessHour->status = 1;
        $businessHour->save();

        $businessHour = new BusinessHour;
        $businessHour->day = 6;
        $businessHour->from = Carbon::createFromTime('09', '00', '00');
        $businessHour->to = Carbon::createFromTime('18', '00', '00');
        $businessHour->status = 1;
        $businessHour->save();

        $businessHour = new BusinessHour;
        $businessHour->day = 7;
        $businessHour->status = 0;
        $businessHour->save();
    }
}
