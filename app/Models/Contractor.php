<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contractor extends Authenticatable // ✅ Extend Authenticatable instead of Model
{
    use HasFactory;

=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contractor extends Model
{
    use HasFactory;
>>>>>>> 9ecb986 (Initial commit)
    public $timestamps = false;

    protected $fillable = [
        'full_name',
        'email',
        'password',
        'phone',
        'dob',
        'street',
        'city',
        'state',
        'zipcode',
        'business_name',
        'business_street',
        'business_city',
        'business_state',
        'business_zipcode',
        'business_specialization',
        'business_licenses',
        'photo',
        'service_freq_expertise',
        'service_freq_certificate',
        'service_freq_photo',
        'service_freq_preferred_day',
        'service_freq_time',
        'is_service_freq',
        'service_freq_travel',
        'service_area_street',
        'service_area_city',
        'service_area_state',
        'service_area_zip',
        'service_radius',
        'ref_1_name',
        'ref_1_phone',
        'ref_1_relation',
        'ref_1_duration',
        'ref_2_name',
        'ref_2_phone',
        'ref_2_relation',
        'ref_2_duration'
    ];
<<<<<<< HEAD

    // ✅ Add hidden attributes to hide password in responses
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // ✅ Ensure password is hashed when setting it
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
=======
    
>>>>>>> 9ecb986 (Initial commit)
}
