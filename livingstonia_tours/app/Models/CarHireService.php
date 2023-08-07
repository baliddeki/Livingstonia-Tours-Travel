<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarHireService extends Model
{
    use HasFactory;
    protected $table = 'car_hire_services';
protected $primaryKey = 'cID';

}
