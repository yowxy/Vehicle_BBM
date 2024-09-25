<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bookings extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'vehicle_id',
        'user_id',
        'driver_id',
        'approver_status',
    ];
    public function user ()  {
        return $this->belongsTo(User::class  ,'user_id');
    }
    public function vehicle (){
        return $this->belongsTo(Vehicles::class ,'vehicle_id' );
    }

    public function driver() {
        return $this->belongsTo(Drivers::class , 'driver_id' );
    }

    public function approvals(){
        return $this->hasMany(Approvals::class);
    }

}
