<?php

use App\Models\CarBooking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourServiceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\hotelController;
use App\Http\Controllers\CarHireController;
use App\Http\Controllers\CarBookingController;


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

Route::get('/', [HomeController::class, 'index'])->name('landing_page.index');
Route::get('/tour_packages', [TourServiceController::class, 'index'])->name('tour-packages.index');
Route::resource('services', ServiceController::class);
Route::resource('/about', AboutController::class);
Route::resource('/hotel', hotelController::class);
Route::post(
    '/hotel/{hotelId}/hotelBooking',
    [hotelController::class, 'storeHotelBooking']
)->name('hotelBooking');





// href = "{{route('country.visa', ['country' => $country->id])}}
// Route::get('/visaprocessing/{country}/visa', [VisaProcessingController::class, 'showVisa'])->name('country.visa');

Route::middleware(['web'])->group(function () {
    //My routes here

    //car hire routes here
    Route::get('/carhire', [CarHireController::class, 'carhire'])->name('car_hire.index');

    //Car booking routes here
    Route::get('/car_hire/git carbooking', [CarBookingController::class, 'carbooking'])->name('carbooking');
    Route::post('/car_hire.submit', [CarBookingController::class, 'submit'])->name('submit');
});
