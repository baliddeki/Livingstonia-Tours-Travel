<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourServiceController;


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


Route::get('/tour_packages', [TourServiceController::class, 'index'])->name('tour-packages.index');
