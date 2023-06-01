<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers\PagesController;
use App\Http\Controllers\FrontControllers\ViewsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Guest
Route::get('/', [ViewsController::class,'index']);

// Admin
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [PagesController::class, 'home']);
});
