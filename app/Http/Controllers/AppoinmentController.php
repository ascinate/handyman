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
        
        Appointment::create([
            'user_id' => Auth::id(),
            'service_name' => $request->service_name,
            'contructor_id' => $request->contructor_id,
            'special_date' => $request->special_date,
            'service_date' => $request->service_date,
            'service_time' =>$request->service_time,
            'city' => $request->city,
            'state' => $request->state,
            'zipcode' => $request->zipcode,
            'payment_method' => $request->payment_method,
            
        ]);

        return view('appointment', [
            'success' => 'Appointment is created sucessfully and start exploring.',
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


    // public function sendMessage(Request $request, $id)
    // {
    //     $request->validate([
    //         'content' => 'required|string',
    //     ]);

    //     // Identify sender (User, Family Member, or Contractor)
    //     if (Auth::guard('contractor')->check()) {
    //         $sender = Auth::guard('contractor')->user();
    //         $senderType = 'contractor';
    //         $recipientId = Appointment::find($id)->user_id; // Send to user
    //     } elseif (Auth::guard('family_member')->check()) {
    //         $sender = Auth::guard('family_member')->user();
    //         $senderType = 'family_member';
    //         $recipientId = Appointment::find($id)->contractor_id; // Send to contractor
    //     } elseif (Auth::check()) {
    //         $sender = Auth::user();
    //         $senderType = 'user';
    //         $recipientId = Appointment::find($id)->contractor_id; // Send to contractor
    //     } else {
    //         return redirect()->back()->withErrors('Unauthorized action.');
    //     }

    //     Message::create([
    //         'appointment_id' => $id,
    //         'sender_id' => $sender->id,
    //         'sender_type' => $senderType,
    //         'recipient_id' => $recipientId,
    //         'content' => $request->content,
    //         'seen' => false,
    //     ]);
     

    //     return redirect()->back();
    // }

    public function sendMessage(Request $request, $id)
{
    $request->validate([
        'content' => 'required|string',
    ]);

    // Identify sender
    if (Auth::guard('contractor')->check()) {
        $sender = Auth::guard('contractor')->user();
        $senderType = 'contractor';
        
        // Fetch the user_id from appointments table
        $recipientId = DB::table('appointments')->where('id', $id)->value('user_id'); 
        
    } elseif (Auth::check()) {
        $sender = Auth::user();
        $senderType = 'user';
        
        // Fetch the contractor_id from appointments table
        $recipientId = DB::table('appointments')->where('id', $id)->value('contructor_id'); 
    } else {
        return redirect()->back()->withErrors('Unauthorized action.');
    }

    // Ensure recipient ID is not null before inserting
    if (!$recipientId) {
        return redirect()->back()->withErrors('Recipient not found.');
    }

    // Insert the message
    Message::create([
        'appointment_id' => $id,
        'sender_id' => $sender->id,
        'sender_type' => $senderType,
        'recipient_id' => $recipientId, // Now correctly assigned
        'content' => $request->content,
        'seen' => false,
    ]);

    return redirect()->back();
}





}
