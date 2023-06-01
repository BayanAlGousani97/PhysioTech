<?php

namespace App\Http\Controllers\FrontControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
}
