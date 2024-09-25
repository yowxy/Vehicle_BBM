<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Approvals extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'booking_id',
        'approver_id',
        'status'
    ];

    public function booking (){
        return $this->belongsTo(Bookings::class, 'booking_id');
    }

    public function approver (){
        return $this->belongsTo(User::class, 'approver_id');
    }
}
