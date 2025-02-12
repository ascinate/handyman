<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'service_name',
        'contructor_id',
        'special_date',
        'service_date',
        'service_time',
        'city',
        'zipcode',
        'payment_method',    
        'status'
    ];

}
