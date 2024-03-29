<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['model_name', 'passenger_capacity', 'vehicle_no', 'image'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
