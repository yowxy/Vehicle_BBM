<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicles extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'type',
        'is_company_owned',
    ];

    public function bookings  (){
        return $this->hasMany(Bookings::class);
    }

    public function fuelConsumptions(){
        return $this->hasMany(FuelConsumptions::class);
    }

    public function serviceSchedules(){
        return $this->hasMany(ServiceSchedules::class);
    }

}
