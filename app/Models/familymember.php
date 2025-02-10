<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class familymember extends Model
{
    use HasFactory;

    protected $table = 'family_members';


    protected $fillable = [
        'user_id',
        'name',
        'relation',
        'phone',
        'email',
        'password',
    ];

 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
