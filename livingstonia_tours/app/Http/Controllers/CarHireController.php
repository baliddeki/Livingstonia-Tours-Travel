<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarHireService;

class CarHireController extends Controller
{
    // CarHire method
    public function carhire()
    {
        $cars = CarHireService::all();
        return view('car_hire.index', compact('cars'));
    }
}
