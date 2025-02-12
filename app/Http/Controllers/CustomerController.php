<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('admin/customers',['customers'=>$data]);
    }
    public function viewUser($id)
    {
        $customer = User::find($id);

        if (!$customer) {
            return redirect()->route('customers.index')->with('error', 'Customer not found');
        }

        return view('admin/viewuser', ['data' => $customer]);
    }

    
    public function delete($id)
    {
        $customers = User::find($id);
        $customers->delete();

        return redirect('customers');
    }
}
