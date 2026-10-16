<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    // Profile show
    public function index()
    {
        $user = Auth::user();

        return view('profile', compact('user'));
    }


    // Edit profile page
    public function edit()
    {
        $user = Auth::user();

        return view('edit-profile', compact('user'));
    }


    // Update profile
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        // Password only update if user enters a new password
        if ($request->password) {
            $user->password = $request->password;
        }

        // Image upload
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '_' . $image->getClientOriginalName();

            $image->move(public_path('images'), $imageName);

            $user->image = $imageName;
        }

        $user->save();

        return redirect('/profile')
            ->with('success', 'Profile updated successfully!');
    }
}