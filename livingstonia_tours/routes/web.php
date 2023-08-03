<?php

use App\Models\CarBooking;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('landing_page');
    });

Route::middleware(['web'])->group(function(){
    //My routes here

    //car hire routes here
    Route::get('/carhire', [CarHireController::class, 'carhire'])->name('carhire');

    //Car booking routes here
    Route::get('/carbooking',[CarBookingController::class, 'carbooking'])->name('carbooking');
    Route::post('/submit',[CarBookingController::class, 'submit'])->name('submit');

});
