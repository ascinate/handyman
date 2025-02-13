<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\familymember;
use App\Models\Contractor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function registerUser(Request $request)
    {
        if (is_array($request->preferred_service_days)) {
            $preferredServiceDays = implode(',', $request->preferred_service_days);
        } else {
            $preferredServiceDays = null;
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'street' => $request->street,
            'city' => $request->city,
            'state' => $request->state,
            'zipcode' => $request->zipcode,
            'preferred_contact_method' => $request->contact,
            'property_type' => $request->property,
            'bedrooms' => $request->number,
            'bathrooms' => $request->bathrooms,
            'is_garden_maintenance' => $request->is_garden_maintenance,
            'is_pool' => $request->is_pool,
            'preferred_service_days' => $preferredServiceDays,
            'time_for_services' => $request->time_for_services,
            'maintenance_services_duration' => $request->maintenance_services_duration,
            'preferred_maintenance_plan' => $request->preferred_maintenance_plan,
            'reminder_routine_maintenance' => $request->reminder_routine_maintenance,
            'is_require_accessibility' => $request->is_require_accessibility,
            'emergency_alert' => $request->emergency_alert,
            'emergency_contacts' => $request->emergency_contacts,
            'smart_home_devices' => $request->smart_home_devices,
            'compatible_devices_list' => $request->compatible_devices_list,
            'home_built_year' => $request->home_built_year,
            'is_rent_out' => $request->is_rent_out,
            'major_appliances' => $request->major_appliances,
            'subscription_plan' => $request->subscription_plan,
            'is_free_trial' => $request->is_free_trial,
            'payment_method' => $request->payment_method,
            'auto_renewal' => $request->auto_renewal,
            'notifications' => $request->notifications,
            'promotional_offers' => $request->promotional_offers
           

        ]);

        return view('welcomemessage', [
            'successMessage' => 'Your account was successful. Please login to access the website.',
        ]);
    }
    

  

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();
    //         Session::put('user_id', $user->id);
    //         Session::put('user_email', $user->email);
    //         Session::put('user_name', $user->name);

    //         return redirect()->route('dashboard');
    //     }

    //     $familyMember = FamilyMember::where('email', $request->email)->first();

    //     if ($familyMember && Hash::check($request->password, $familyMember->password)) {

    //         Auth::login($familyMember->user);

    //         Session::put('family_member_id', $familyMember->id);
    //         Session::put('family_member_name', $familyMember->name);

    //         return redirect()->route('dashboard');
    //     }

    //     return back()->withErrors([
    //         'email' => 'Invalid email or password.',
    //     ]);
    // }


      public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $type = $request->input('type'); 

        if ($type === 'user') {
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                Session::put('user_id', $user->id);

                return redirect()->route('dashboard');
            }
        } elseif ($type === 'family_member_user') {
            $familyMember = FamilyMember::where('email', $request->email)->first();

            if ($familyMember && Hash::check($request->password, $familyMember->password)) {
                Auth::guard('family_member')->login($familyMember);

                return redirect()->route('dashboard');
            }
        } elseif ($type === 'contractor') {
            $contractor = Contractor::where('email', $request->email)->first();
            if ($contractor && Hash::check($request->password, $contractor->password)) {
                Auth::guard('contractor')->login($contractor); // ✅ Log in using contractor guard

                return redirect('contractors');
            }
        }

        return back()->withErrors([
            'email' => 'Invalid email, password, or type.',
        ]);
    }

     public function dashboard()
    {
        $user = Auth::user();
        $familyMember = Auth::guard('family_member')->user();

        if (!$user && !$familyMember) {
            return redirect('/')->withErrors('Unauthorized access.');
        }

        $familyMemberLoggedIn = $familyMember ? true : false;
        $authUser = $familyMember ?? $user;
       
        $appointments = \DB::table('appointments')
            ->join('contractors', 'appointments.contructor_id', '=', 'contractors.id')
            ->where('appointments.user_id', $authUser->id)
            ->orwhere('appointments.member_user_id', $authUser->id)
            ->select(
                'appointments.id as appointment_id',
                'appointments.service_name',
                'contractors.full_name as contractor_name'
            )
            ->get();

        return view('dashboard', [
            'user' => $authUser,
            'familyMember' => $familyMember,
            'familyMemberLoggedIn' => $familyMemberLoggedIn,
            'appointments' => $appointments
        ]);
    }


     public function editUser($id)
    {
        
        $user = User::findOrFail($id);

        return view('edituser', ['user'=>$user]);
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id, // Ignore current user email
            'phone' => 'required|string',
            'street' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'zipcode' => 'nullable|string',
        ]);

        
        $user = User::findOrFail($id);

       
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'street' => $request->street,
            'city' => $request->city,
            'state' => $request->state,
            'zipcode' => $request->zipcode,
        ]);


        return redirect('dashboard');
    }

    public function editFamily($id)
    {
        $familyMember = FamilyMember::findOrFail($id);

        return view('editfamily', ['familyMember' => $familyMember]);
    }


    public function updateFamily(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:family_members,email,' . $id,
            'phone' => 'nullable|string|max:15',
            
        ]);

        $familyMember = FamilyMember::findOrFail($id);

        $familyMember->update([
            'name' => $validated['name'],
            'relation' => $request->relation,
            'phone' => $validated['phone'],
            'email' => $validated['email'],
        ]);

        return redirect('dashboard');
    }
    


    



    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
    
   


    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $exists = User::where('email', $email)->exists();
        return response()->json(['exists' => $exists], 200);
    }
}
