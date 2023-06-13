<?php

namespace App\Http\Controllers\FrontControllers;

use App\Http\Controllers\Controller;
use App\Models\BusinessHour;
use App\Models\Info;
use App\Models\Section;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ViewsController extends Controller
{
    public function index()
    {
        $info = Info::first();
        $infoT = $info->getTranslations();
        $services = Service::get();
        $businessSection = Section::where('slug',Str::slug("Business Hours"))->first();
        $businessHours = BusinessHour::get();
        return view('front.index', compact('info', 'infoT','services','businessSection','businessHours'));
    }
}
