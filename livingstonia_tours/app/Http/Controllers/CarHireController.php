<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarHireController extends Controller
{
   //CarHire method
   public function carhire()
   {
       return view("car_hire");
   }
}
