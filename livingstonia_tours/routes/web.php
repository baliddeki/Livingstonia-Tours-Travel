<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourServiceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\HotelController;


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
Route::resource('/hotel', HotelController::class);
Route::resource('/car_hire', hotelController::class);
Route::resource('/visa_processing', hotelController::class);
Route::resource('/air_ticketing', hotelController::class);




Route::get('/hoteldetails', function () {
    return view('hotel.details');
});
