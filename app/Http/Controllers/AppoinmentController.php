<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;
use App\Models\Message;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;


class AppoinmentController extends Controller
{

    public function create(Request $request)
    {

        if (Auth::guard('web')->check()) {
            $userId = Auth::id();
            $memberUserId = null; 
        } elseif (Auth::guard('family_member')->check()) {
            $userId = null;
            $memberUserId = Auth::guard('family_member')->id();
        } else {
            return back()->with('error', 'Unauthorized access.');
        }

        // Create the appointment
        Appointment::create([
            'user_id' => $userId, 
            'member_user_id' => $memberUserId, 
            'service_name' => $request->service_name,
            'contructor_id' => $request->contructor_id,
            'special_date' => $request->special_date,
            'service_date' => $request->service_date,
            'service_time' => $request->service_time,
            'city' => $request->city,
            'state' => $request->state,
            'zipcode' => $request->zipcode,
            'payment_method' => $request->payment_method,
        ]);

        return view('appointment', [
            'success' => 'Appointment is created successfully and start exploring.',
        ]);
    }

    public function index()
    {
        $data = Appointment::all()->take(10);
        return view('admin/appointment',['app'=>$data]);
    }
    
    public function appointment()
    {   
        return view('appointment');
    }

    public function viewAppointment($id)
    {
        $app = Appointment::find($id);
        if (!$app) {  
            return redirect()->route('appointment.index')->with('error', 'appointment not found');
        }
        return view('admin/viewappointment', ['data' => $app]);
    }

    public function delete($id)
    {
        $app = Appointment::find($id);
        $app->delete();

        return redirect()->back();
    }

    public function accept($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'accepted';
        $appointment->save();

        return back()->with('success', 'Appointment accepted.');
    }

    public function decline($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'declined';
        $appointment->save();

        return back()->with('error', 'Appointment declined.');
    }





    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        $messages = Message::getMessagesWithSender($id);

        if ($messages->isEmpty()) {
            $messages = new Collection(); // Ensures Blade handles it safely
        }

        return view('chat', [
            'appointment' => $appointment,
            'messages' => $messages
        ]);
    }



    public function sendMessage(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        if (Auth::guard('contractor')->check()) {
            $sender = Auth::guard('contractor')->user();
            $senderType = 'contractor';
            $appointment = DB::table('appointments')->where('id', $id)->first();
            $recipientId = $appointment->member_user_id ?? $appointment->user_id;

        } elseif (Auth::guard('web')->check()) {
            $sender = Auth::guard('web')->user();
            $senderType = 'user';
            $appointment = DB::table('appointments')->where('id', $id)->first();
            $recipientId = $appointment->contructor_id;

        } elseif (Auth::guard('family_member')->check()) {
            $sender = Auth::guard('family_member')->user();
            $senderType = 'member';
            $appointment = DB::table('appointments')->where('id', $id)->first();
            $recipientId = $appointment->contructor_id;

        } else {
            return response()->json(['error' => 'Unauthorized action.'], 403);
        }

        if (!$recipientId) {
            return response()->json(['error' => 'Recipient not found.'], 400);
        }

        // Save message
        $message = Message::create([
            'appointment_id' => $id,
            'sender_id' => $sender->id,
            'sender_type' => $senderType,
            'recipient_id' => $recipientId,
            'content' => $request->content,
            'seen' => false,
        ]);

        return response()->json([
            'message' => $message,
            'sender_name' => $sender->name ?? $sender->full_name
        ]);
    }





}
