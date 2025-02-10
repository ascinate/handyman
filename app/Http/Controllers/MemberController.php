<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\familymember;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function memberform()
    {

        return view('memberform');
    }

    public function memberlisting()
    {
        $familymembers = familymember::all(); 

        return view('memberlisting', ['familymembers' => $familymembers]);
    }
    

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:family_members,email',
            'phone' => 'nullable|string|max:15',
            'password' => 'required',
        ]);

        $hashedPassword = Hash::make($validated['password']);

        $familyMember = FamilyMember::create([
            'user_id' => Auth::id(),
            'name' => $validated['name'],
            'relation' => 'Spouse',
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'password' => $hashedPassword,
        ]);

        $user = User::find(Auth::id());
        if ($user->member_user_id) {
            $existingParentIds = explode(',', $user->member_user_id);
        } else {
            $existingParentIds = [];
        }

        $existingParentIds[] = $familyMember->id;

        $user->update([
            'member_user_id' => implode(',', $existingParentIds),
        ]);

        return redirect('memberlisting');
    }

    public function edit($id)
    {
        $familyMember = FamilyMember::findOrFail($id);

        return view('editmember', ['familyMember' => $familyMember]);
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:family_members,email,' . $id,
            'phone' => 'nullable|string|max:15',
            'password' => 'nullable|string|min:6',
        ]);

        $familyMember = FamilyMember::findOrFail($id);

        $familyMember->update([
            'name' => $validated['name'],
            'relation' => $request->relation,
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'password' => $request->password ? Hash::make($validated['password']) : $familyMember->password,
        ]);

        return redirect('memberlisting')->with('success', 'Family member updated successfully.');
    }

    public function delete($id)
    {
        $familyMember = FamilyMember::findOrFail($id);
        $familyMember->delete();

        return redirect('memberlisting')->with('success', 'Family member deleted successfully.');
    }
}