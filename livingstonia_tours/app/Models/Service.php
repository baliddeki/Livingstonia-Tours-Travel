<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    // Constant array to map service types to their corresponding routes
    public const SERVICE_TYPE_ROUTES = [
        'Tour' => 'tour-packages.index',
        'Hotel' => 'hotel.index',
        'CarHire' => 'car_hire.index',
        'VISAProcessing' => 'visa_processing.index',
        'AirTicketing' => 'air_ticketing.index',
    ];



    // Method to get the route name based on the service type
    /* public function getRouteName()
    {

        // Convert the service type to camel case and add '.index' suffix
        # get route name from database
        # $routeName = Str::of($this->sType)->snake()->append('.index');
        if (($this->sType) == 'Hotel') {
            $routeName = 'hotel.index';
        } elseif (($this->sType) == 'Tour') {
            $routeName = 'tour-packages.index';
        } else {
            $routeName = null;
        }
        return $routeName;
    }*/
}
