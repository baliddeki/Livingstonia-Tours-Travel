<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelBooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'hotel_id',
        'check_in',
        'check_out',
        'number_of_people',
        'number_of_rooms',
        'fname',
        'lname',
        'email',
        'phone',

    ];
}
