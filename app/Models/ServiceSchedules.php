<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceSchedules extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'vehicle_id',
        'service_date',
    ];

    public function vehicle (){
        return $this->belongsTo(Vehicles::class ,'vehicle_id');
    }
}
