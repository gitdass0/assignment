<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Show all users
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Show add user form
    public function create()
    {
        return view('users.create');
    }

    // Store new user
    public function store(Request $request)
{
    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|unique:users',
        'gender'   => 'required|string',
        'role'     => 'required|array',
        'image'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $imagePath = null;

    // ✅ Handle image upload
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/users'), $fileName);
        $imagePath = 'uploads/users' . $fileName;
    }

    // ✅ Save user
    $user = new User();
    $user->name        = $request->name;
    $user->email       = $request->email;
    $user->gender      = $request->gender;
    $user->role        = json_encode($request->role);
    $user->created_by  = $request->created_by;
    $user->image       = $imagePath;
    $user->password    = Hash::make('password'); // default password
    $user->save();

    return redirect()->route('users.index')->with('success', 'User added successfully.');
}

}
