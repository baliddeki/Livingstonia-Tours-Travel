<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Service
{
    use HasFactory;
    protected $primaryKey = 'hId';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
    ];
}
