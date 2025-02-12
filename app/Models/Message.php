<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_id',
        'sender_id',
        'sender_type',
        'recipient_id',
        'content',
        'seen'
    ];


    public static function getMessagesWithSender($appointmentId)
{
    return DB::table('messages')
        ->leftJoin('users', function ($join) {
            $join->on('messages.sender_id', '=', 'users.id')
                ->where('messages.sender_type', '=', 'user');
        })
        ->leftJoin('contractors', function ($join) {
            $join->on('messages.sender_id', '=', 'contractors.id')
                ->where('messages.sender_type', '=', 'contractor');
        })
        ->select(
            'messages.*',
            DB::raw("COALESCE(users.name, contractors.full_name) AS sender_name")
        )
        ->where('messages.appointment_id', $appointmentId)
        ->orderBy('messages.created_at', 'ASC')
        ->get();
}


}
