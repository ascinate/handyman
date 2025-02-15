<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contractor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class ContractorController extends Controller
{
    public function create(Request $request)
    {
        $businessLicensesPath = null;
        $photoPath = null;
        $serviceFreqPhotoPath = null;

        if ($request->hasFile('business_licenses')) {
            $businessLicensesPath = $request->file('business_licenses')->store('licenses', 'public');
        }

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        if ($request->hasFile('service_freq_photo')) {
            $serviceFreqPhotoPath = $request->file('service_freq_photo')->store('frequency', 'public');
        }

       

        if (is_array($request->service_freq_preferred_day)) {
            $preferredFreqDays = implode(',', $request->service_freq_preferred_day);
        } else {
            $preferredFreqDays = null;
        }

        $contractor = Contractor::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'dob' =>$request->dob,
            'street' => $request->street,
            'city' => $request->city,
            'state' => $request->state,
            'zipcode' => $request->zipcode,
            'business_name' => $request->business_name,
            'business_street' => $request->business_street,
            'business_city' => $request->business_city,
            'business_state' => $request->business_state,
            'business_zipcode' => $request->business_zipcode,
            'business_specialization' => $request->business_specialization,
            'business_licenses' => $businessLicensesPath,
            'photo' => $photoPath,
            'service_freq_expertise' => $request->service_freq_expertise,
            'service_freq_certificate' => $request->service_freq_certificate,
            'service_freq_photo' => $serviceFreqPhotoPath,
            'service_freq_preferred_day' => $preferredFreqDays,
            'service_freq_time' => $request->service_freq_time,
            'is_service_freq' => $request->is_service_freq,
            'service_freq_travel' => $request->service_freq_travel,
            'service_area_street' => $request->service_area_street,
            'service_area_city' => $request->service_area_city,
            'service_area_state' => $request->service_area_state,
            'service_area_zip' => $request->service_area_zip,
            'service_radius' => $request->service_radius,
            'ref_1_name' => $request->ref_1_name,
            'ref_1_phone' => $request->ref_1_phone,
            'ref_1_relation' => $request->ref_1_relation,
            'ref_1_duration' => $request->ref_1_duration,
            'ref_2_name' => $request->ref_2_name,
            'ref_2_phone' => $request->ref_2_phone,
            'ref_2_relation' => $request->ref_2_relation,
            'ref_2_duration' => $request->ref_2_duration
              
        ]);

        if ($contractor && $contractor->email) {
        $to = $contractor->email;
        $subject = "Welcome to Handyman Service!";
        $messageBody = "
            <html>
            <body>
                <h2>Welcome to Handyman Service</h2>
                <p>Dear {$contractor->full_name},</p>
                <p>Thank you for signing up! Below are your login credentials:</p>
                <p><strong>Email:</strong> {$contractor->email}</p>
                <p><strong>Password:</strong> (The password you set during registration)</p>
                <p>You can now log in and start using our services.</p>
                <p>Best Regards,<br>Handyman Service Team</p>
            </body>
            </html>";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: <webmaster@ascinate.in>" . "\r\n";

        mail($to, $subject, $messageBody, $headers);
    }


        return view('welcomecontractor', [
            'successMessage' => 'Your account was successful. Please login to access the website.',
        ]);
    }

    public function index()
    {
        if (!Auth::guard('contractor')->check()) {
            return redirect('/login')->with('error', 'Please login to access the dashboard.');
        }

        $contractor = Auth::guard('contractor')->user();

        if (!$contractor) {
            return redirect('/login')->with('error', 'Contractor not found.');
        }

        $appointments = \DB::table('appointments')
            ->join('contractors', 'appointments.contructor_id', '=', 'contractors.id')
            ->leftJoin('users', 'appointments.user_id', '=', 'users.id')
            ->leftJoin('family_members', 'appointments.member_user_id', '=', 'family_members.id') 
            ->where('contractors.id', $contractor->id)
            ->select(
                'appointments.id',
                \DB::raw("COALESCE(users.name, family_members.name) as user_name"),
                'appointments.service_name',
                'appointments.special_date',
                'appointments.service_date',
                'appointments.service_time',
                'appointments.city',
                'appointments.zipcode',
                'appointments.payment_method',
                'appointments.status',
                'contractors.full_name as contractor_name'
            )
            ->get();

        return view('dashboardcontructor', [
            'contractor' => $contractor,
            'appointments' => $appointments
        ]);
    }




    public function viewContractor($id)
    {
        $contractor = Contractor::find($id);
        if (!$contractor) {  
            return redirect()->route('contractors.index')->with('error', 'Contractor not found');
        }
        return view('admin/viewcontractor', ['data' => $contractor]);
    }

    public function adminindex()
    {
        $contractors = Contractor::all(); 
       
        return view('admin/contractor', ['contractors' => $contractors]);
    }

    public function delete($id)
    {
        $contractor = Contractor::find($id);
        $contractor->delete();

        return redirect()->back();
    }

    public function edit($id){
        $contractor = Contractor::findOrFail($id);
        return view('editcontractor', ['contractor' => $contractor]);
    }

    public function update(Request $request, $id){

        $contractor = Contractor::findOrFail($id);

        $contractor->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'dob' =>$request->dob,
            'street' => $request->street,
            'city' => $request->city,
            'state' => $request->state,
            'zipcode' => $request->zipcode,
            'business_name' => $request->business_name,
            'service_area_street' => $request->service_area_street,
            'service_area_city' => $request->service_area_city,
            'service_area_state' => $request->service_area_state,
            'service_area_zip' => $request->service_area_zip,
            'service_radius' => $request->service_radius,
        ]);
        session(['contractor_name' => $request->full_name]);
        
        return redirect('contractors');
    }
}
