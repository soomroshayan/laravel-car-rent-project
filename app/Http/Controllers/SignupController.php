<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SignupController extends Controller
{
    public function signup()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // 6 digit OTP
        $otp = rand(100000, 999999);

        // Image save
        $imageName = time() . '_' . $request->image->getClientOriginalName();

        $request->image->move(
            public_path('images'),
            $imageName
        );

        // Signup data temporarily session mein
        session([
            'signup_name' => $request->name,
            'signup_email' => $request->email,
            'signup_password' => $request->password,
            'signup_image' => $imageName,
            'signup_otp' => $otp,
            'signup_otp_expires' => now()->addMinutes(5),
        ]);

        // OTP email par send
        Mail::raw(
            "Your Car Rental verification OTP is: " . $otp,
            function ($message) use ($request) {
                $message->to($request->email)
                        ->subject('Email Verification OTP');
            }
        );

        return redirect('/verify-otp');
    }


    public function verifyOtp()
    {
        return view('verify-otp');
    }


    public function checkOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        // OTP check
        if ($request->otp != session('signup_otp')) {
            return back()->withErrors([
                'otp' => 'Invalid OTP!'
            ]);
        }

        // OTP expiry check
        if (now()->greaterThan(session('signup_otp_expires'))) {
            return back()->withErrors([
                'otp' => 'OTP has expired!'
            ]);
        }

        // User create
        User::create([
            'name' => session('signup_name'),
            'email' => session('signup_email'),
            'password' => session('signup_password'),
            'image' => session('signup_image'),
            'action' => 2,
            'email_verified_at' => now(),
        ]);

        // Signup session clear
        session()->forget([
            'signup_name',
            'signup_email',
            'signup_password',
            'signup_image',
            'signup_otp',
            'signup_otp_expires',
        ]);

        return redirect('/login')->with(
            'success',
            'Account created successfully! Please login.'
        );
    }
}