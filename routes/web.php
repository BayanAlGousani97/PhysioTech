<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers\PagesController;
use App\Http\Controllers\AdminControllers\BannersController;
use App\Http\Controllers\AdminControllers\BookingsController;
use App\Http\Controllers\AdminControllers\DoctorsController;
use App\Http\Controllers\AdminControllers\ServicesController;
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
Route::get('/', [ViewsController::class, 'index'])->name('front.index')->middleware('set.locale');
Route::get('/services/{id}', [ViewsController::class, 'service'])->name('front.service')->middleware('set.locale');
Route::get('/book-appoitment', [ViewsController::class, 'bookAppointment'])->name('bookAppointment')->middleware('set.locale');
Route::post('/book-appoitment', [ViewsController::class, 'storeBookAppointment'])->name('bookAppointment.store')->middleware('set.locale');

// Dashboard
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [PagesController::class, 'header']);
    Route::get('/header', [PagesController::class, 'header'])->name('header.index');
    Route::post('/header', [PagesController::class, 'updateHeader'])->name('header.update');

    Route::get('/footer', [PagesController::class, 'footer'])->name('footer.index');
    Route::post('/footer', [PagesController::class, 'updateFooter'])->name('footer.update');

    Route::get('/contact', [PagesController::class, 'contact'])->name('contact.index');
    Route::post('/contact', [PagesController::class, 'updateContact'])->name('contact.update');

    Route::get('/about', [PagesController::class, 'about'])->name('about.index');
    Route::post('/about', [PagesController::class, 'updateAbout'])->name('about.update');

    Route::get('/goal', [PagesController::class, 'goal'])->name('goal.index');
    Route::post('/goal', [PagesController::class, 'updateGoal'])->name('goal.update');

    Route::get('/mission', [PagesController::class, 'mission'])->name('mission.index');
    Route::post('/mission', [PagesController::class, 'updateMission'])->name('mission.update');

    Route::get('/vision', [PagesController::class, 'vision'])->name('vision.index');
    Route::post('/vision', [PagesController::class, 'updateVision'])->name('vision.update');

    Route::get('/banners', [BannersController::class, 'index'])->name('banners.index');
    Route::post('/banners', [BannersController::class, 'store'])->name('banners.store');
    Route::get('/banners/{id}', [BannersController::class, 'edit'])->name('banners.edit');
    Route::put('/banners/{id}', [BannersController::class, 'update'])->name('banners.update');
    Route::post('/banners/destroy', [BannersController::class, 'destroy'])->name('banners.destroy');

    Route::post('/sections/services', [ServicesController::class, 'updateSectionService'])->name('services.section.update');
    Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');
    Route::post('/services', [ServicesController::class, 'store'])->name('services.store');
    Route::get('/services/{id}', [ServicesController::class, 'edit'])->name('services.edit');
    Route::put('/services/{id}', [ServicesController::class, 'update'])->name('services.update');
    Route::post('/services/destroy', [ServicesController::class, 'destroy'])->name('services.destroy');

    Route::post('/sections/doctors', [DoctorsController::class, 'updateSectionDoctor'])->name('doctors.section.update');
    Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors.index');
    Route::get('/doctors/create', [DoctorsController::class, 'create'])->name('doctors.create');
    Route::post('/doctors', [DoctorsController::class, 'store'])->name('doctors.store');
    Route::get('/doctors/{id}', [DoctorsController::class, 'edit'])->name('doctors.edit');
    Route::put('/doctors/{id}', [DoctorsController::class, 'update'])->name('doctors.update');
    Route::post('/doctors/destroy', [DoctorsController::class, 'destroy'])->name('doctors.destroy');

    Route::get('/bookings', [BookingsController::class, 'index'])->name('bookings.index');

});

Route::middleware('auth', )->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

###################### Translation ######################
Route::get('en', function () {
    session(['locale' => 'en']);
    return back();
})->name('en');
Route::get('ar', function () {
    session(['locale' => 'ar']);
    return back();
})->name('ar');

require __DIR__ . '/auth.php';
