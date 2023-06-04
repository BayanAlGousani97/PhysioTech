<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers\PagesController;
use App\Http\Controllers\FrontControllers\ViewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Guest
Route::get('/', [ViewsController::class, 'index'])->name('front.index');

// Dashboard
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [PagesController::class, 'home']);
    Route::get('/header', [PagesController::class, 'header'])->name('header.index');
    Route::post('/header', [PagesController::class, 'updateHeader'])->name('header.update');

    Route::get('/footer', [PagesController::class, 'footer'])->name('footer.index');
    Route::post('/footer', [PagesController::class, 'updateFooter'])->name('footer.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';