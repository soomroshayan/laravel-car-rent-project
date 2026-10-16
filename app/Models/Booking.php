<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'car_id',
        'name',
        'email',
        'phone',
        'pickup_date',
        'return_date',
        'pickup_location',
        'return_location',
        'message',
        'status',
    ];
    public function car()
{
    return $this->belongsTo(Car::class);
}
}