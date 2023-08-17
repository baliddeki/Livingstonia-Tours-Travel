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
        'VISAProcessing' => 'visaprocessing.index',
        'AirTicketing' => 'air_ticketing.index',
    ];



    // Method to get the route name based on the service type


    public function getRouteName()
    {
        return self::SERVICE_TYPE_ROUTES[$this->sType] ?? null;
    }
}
