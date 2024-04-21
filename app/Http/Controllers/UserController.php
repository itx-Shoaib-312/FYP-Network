<?php

namespace App\Http\Controllers;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index(){
        $userdatas=User::all();
  $roles = Role::all();


        return view('Userdata.userdata ',compact('userdatas','roles'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|string',
        ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();


        $roleName = $validatedData['role'];
        $role = Role::where('name', $roleName)->first();
        if ($role) {
            $user->assignRole($role);
        } else {
            redirect()->back()->with('error', 'Role not found in database');
        }

        return redirect()->back()->with('success', 'User added successfully');
    }



public function update(Request $request, $id)

{
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|string',
        'password' => 'required|string',
    ]);
    $userdata  = User::findOrFail($id);

    $userdata ->name = $request->input('name');
    $userdata ->email = $request->input('email');
    $userdata ->password = $request->input('password');
    $userdata ->save();

    return redirect()->back()->with('success', 'users updated successfully');
}


public function destroy($id)
{
    $userdata = User::findOrFail($id);
    $userdata ->delete();

    return redirect()->back()->with('success', 'userdata  deleted successfully');
}

public function workSubmission()
{
    return view('workSubmission');
}

}

