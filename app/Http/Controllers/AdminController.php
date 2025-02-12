<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Contractor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    //
    function adminlogin(Request $request)
    {
        $credential = new Admin();

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential->email = $request->email;
        $credential->password = $request->password;

        $data = DB::table('admins')
        ->where('email',$credential->email)
        ->where('password', $credential->password)->get();

        $count = $data->count();

        if($count!=0)
        {
           $request->session()->put('adminuser',$credential->email);
           return redirect('admin/dashboard');
        }

        else{
            echo "Login Failed";
        }
    }

        public function dashboard()
    {
        $totalCustomers = User::count();
        $totalContractors = Contractor::count();
        $customers = User::orderBy('created_at', 'desc')->take(10)->get();
        return view('admin.dashboard', [
            'totalCustomers' => $totalCustomers,
            'totalContractors' => $totalContractors,
            'customers' => $customers
        ]);
    }

    

     public function logout()
    {
        Auth::logout();
        session()->flush(); 
        return redirect('admin/login'); 
    }
}
