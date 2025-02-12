<?php

namespace App\Http\Controllers;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class servicerequestController extends Controller
{
    public function create(Request $request)
    { 
        $servicePhoto = '';
        if ($request->hasFile('service_photo')) {
            $imagePaths = [];
            foreach ($request->file('service_photo') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move('uploads', $imageName);
                $imagePaths[] = $imageName;
            }
            $servicePhoto = implode(',', $imagePaths);
        }
       
    
        ServiceRequest::create([
            'user_id' => Auth::id(),
            'service_name' => $request->service_name,
            'service_issue' => $request->service_issue,
            'service_photo' => $servicePhoto,
            'service_pre_date' => $request->service_pre_date,
            'service_pre_time' => $request->service_pre_time,
            'is_emergency_req' => $request->is_emergency_req,
            'service_street' => $request->service_street,
            'service_city' => $request->service_city,
            'service_state' => $request->service_state,
            'service_zipcode' => $request->service_zipcode,
            'is_address' => $request->is_address,
            'special_instructor_name' => $request->special_instructor_name,
            'contructor_prefrerred' => $request->contructor_prefrerred,
            'is_contructor' => $request->is_contructor,
            'contructor_name' => $request->contructor_name,
            'is_contructor_booking' => $request->is_contructor_booking,
            'booking_number' => $request->booking_number,
            'booking_amount' => $request->booking_amount,
            'confirm_service_type' => $request->confirm_service_type,
            'confirm_service_date' => $request->confirm_service_date,
            'confirm_service_time' => $request->confirm_service_time,
            'confirm_service_city' => $request->confirm_service_city,
            'confirm_service_state' => $request->confirm_service_state,
            'confirm_service_zipcode' => $request->confirm_service_zipcode,
            'confirm_service_payment' => $request->confirm_service_payment,
            'is_auto_payment' => $request->is_auto_payment,
        ]);

        return redirect()->back();
    }

    public function index()
    {
        $data = ServiceRequest::all()->take(10);
        return view('admin/servicerequests',['services'=>$data]);
    }
    public function delete($id)
    {
        $service = ServiceRequest::find($id);
        $service->delete();

        return redirect()-back();
    }

    public function viewService($id)
    {
        $service = ServiceRequest::find($id);
        if (!$service) {  
            return redirect()->route('service.index')->with('error', 'services not found');
        }
        return view('admin/viewservice', ['data' => $service]);
    }

}
