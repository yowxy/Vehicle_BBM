<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drivers extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'license_number',
        'contact_info,'
    ];

    public function Bookings(){
        return $this->hasMany(Bookings::class);
    }
}
