<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'member_user_id',
        'phone',
        'street',
        'city',
        'state',
        'zipcode',
        'preferred_contact_method',
        'property_type',
        'bedrooms',
        'bathrooms',
        'is_garden_maintenance',
        'is_pool',
        'preferred_service_days',
        'time_for_services',
        'maintenance_services_duration',
        'preferred_maintenance_plan',
        'reminder_routine_maintenance',
        'is_require_accessibility',
        'emergency_alert',
        'emergency_contacts',
        'smart_home_devices',
        'compatible_devices_list',
        'home_built_year',
        'is_rent_out',
        'major_appliances',
        'subscription_plan',
        'is_free_trial',
        'payment_method',
        'auto_renewal',
        'notifications',
        'promotional_offers'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function conversations()
    {
        return $this->belongsToMany(Conversation::class, 'conversation_user')->withTimestamps();
    }

    public function familyMembers()
    {
        return $this->hasMany(FamilyMember::class);
    }

   
    public function parent()
    {
        return $this->belongsTo(User::class, 'member_user_id');
    }

 
    public function children()
    {
        return $this->hasMany(User::class, 'member_user_id');
    }
}
