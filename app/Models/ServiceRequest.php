<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'user_id',
        'service_name',
        'service_issue',
        'service_photo',
        'service_pre_date',
        'service_pre_time',
        'is_emergency_req',
        'service_street',
        'service_city',
        'service_state',
        'service_zipcode',
        'is_address',
        'special_instructor_name',
        'contructor_prefrerred',
        'is_contructor',
        'contructor_name',
        'is_contructor_booking',
        'booking_number',
        'booking_amount',
        'confirm_service_type',
        'confirm_service_date',
        'confirm_service_time',
        'confirm_service_city',
        'confirm_service_state',
        'confirm_service_zipcode',
        'confirm_service_payment',
        'is_auto_payment',
    ];
}

