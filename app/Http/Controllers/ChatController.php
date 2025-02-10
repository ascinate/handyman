<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Message;

use App\Models\familymember;
use App\Events\MessageSent;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    public function index($appointment_id)
    {  
         $contractor = Auth::guard('contractor')->user();


        

        // If not logged in, redirect to login page
        if (!$contractor) {
            return redirect('login')->with('error', 'Please login to access the chat.');
        }

        $appointments =  Appointment::query()
        ->leftJoin('users', 'appointments.user_id', '=', 'users.id')
        ->leftJoin('family_members', 'users.id', '=', 'family_members.user_id')
        ->leftJoin('contractors', 'appointments.contructor_id', '=', 'contractors.id')
        ->where('appointments.id', $appointment_id)
        ->select(
            'appointments.*', 
            'users.name as user_name', 'users.id as user_id','users.email as user_email',
            'family_members.name as family_members_name', 'family_members.user_id as family_members_id','family_members.email as family_members_email',
            'contractors.full_name as contractor_name', 'contractors.email as contractor_email'
        )
        ->get();

       
        return view('chat', [
            'appointments' => $appointments,
        ]);
    }

    public function sendMessage(Request $request)
    {

        $contractor = Auth::guard('contractor')->user();
        $message = Message::create([
            'appointment_id' => $request->appointment_id,
            'sender_id' => $contractor->id,
            'receiver_id' => $request->receiver_id,
            'message' => $request->message
        ]);
        
        //dd($message);
        // Broadcast the message event
        broadcast(new MessageSent($message))->toOthers();

        return response()->json(['message' => 'Message sent successfully']);
    }


}
