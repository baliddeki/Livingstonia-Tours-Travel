<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Constant array to map service types to their corresponding routes
    public const SERVICE_TYPE_ROUTES = [
        'Hotel Booking service' => 'hotel.index',
        'Tour Services' => 'tour-packages.index',
        'Air Ticketing' => 'air_ticketing.index',
        'Visa Processing' => 'visa_processing.index',
        'Car Hire Service' => 'car_hire.index',
    ];

    // Method to get the route name based on the service type
    public function getRouteName()
    {
        return self::SERVICE_TYPE_ROUTES[$this->sType] ?? null;
    }
}
