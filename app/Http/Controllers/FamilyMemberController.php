<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class FamilyMemberController extends Controller
{
    // Helper function to check permission
    private function checkAdmin() {
        if (Auth::user()->role < 1) {
            abort(403, 'Unauthorized action. Only Admins can access this area.');
        }
    }

    public function index(Request $request)
    {
        $this->checkAdmin();
        $query = User::query();
        if ($request->has('search')) {
            $query->where('email', 'like', '%' . $request->search . '%')
                  ->orWhere('name', 'like', '%' . $request->search . '%');
        }
        $members = $query->orderBy('created_at', 'desc')->paginate(10); 
        return view('members.index', compact('members'));
    }

    public function edit($id)
    {
        $this->checkAdmin();
        $member = User::findOrFail($id);
        return view('members.edit', compact('member'));
    }

    // --- UPDATED FUNCTION ---
    public function update(Request $request, $id)
    {
        $this->checkAdmin();

        $request->validate([
            // The unique rule here ignores the current user's ID ($id) so they can save their own email
            'email' => 'required|email|unique:users,email,'.$id,
            'role' => 'required|integer'
        ], [
            // CUSTOM ERROR MESSAGE
            'email.unique' => 'Error: This email is already taken. Please choose another.',
        ]);

        $member = User::findOrFail($id);
        $member->email = $request->email;
        $member->name = explode('@', $request->email)[0]; 
        
        if($request->has('role')) {
            $member->role = $request->role;
        }
        
        if ($request->filled('password')) {
            $member->password = Hash::make($request->password);
        }

        $member->save();

        return redirect()->route('members.index')->with('success', 'Member updated successfully');
    }
    
    public function create() {
        $this->checkAdmin();
        return view('members.create');
    }
    
    // --- UPDATED FUNCTION ---
    public function store(Request $request) {
        $this->checkAdmin(); 

        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|integer'
        ], [
            // CUSTOM ERROR MESSAGE
            'email.unique' => 'Error: This email address is already registered in the system.',
        ]);

        User::create([
            'name' => explode('@', $request->email)[0], 
            'email' => $request->email, 
            'password' => Hash::make($request->password),
            'role' => $request->role 
        ]);
        
        return redirect()->route('members.index')->with('success', 'New member added');
    }
}