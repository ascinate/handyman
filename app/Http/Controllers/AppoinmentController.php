<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;
use App\Events\AppointmentAccepted;

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

        return redirect()->back()->with('success', 'Appointment is created successfully and start exploring.');
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

    
    public function acceptAppointment($appointment_id)
    {
        $appointment = Appointment::findOrFail($appointment_id);
        $appointment->status = 'accepted';
        $appointment->save();
    
        // Broadcast the event
        broadcast(new AppointmentAccepted($appointment))->toOthers();
    
        return redirect()->route('chat.open', ['appointment_id' => $appointment_id]);
    }


}
