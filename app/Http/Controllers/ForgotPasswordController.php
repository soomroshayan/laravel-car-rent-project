<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'This email is not registered!'
            ]);
        }

        // 6 digit OTP
        $otp = rand(100000, 999999);

        // OTP session mein save
        session([
            'reset_email' => $request->email,
            'reset_otp' => $otp,
            'reset_otp_expires' => now()->addMinutes(5),
        ]);

        // OTP email par send
        Mail::raw(
            "Your password reset OTP is: " . $otp,
            function ($message) use ($request) {
                $message->to($request->email)
                        ->subject('Password Reset OTP');
            }
        );

        return redirect('/reset-otp');
    }

    public function resetOtp()
    {
        return view('reset-otp');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        if ($request->otp != session('reset_otp')) {
            return back()->withErrors([
                'otp' => 'Invalid OTP!'
            ]);
        }

        if (now()->greaterThan(session('reset_otp_expires'))) {
            return back()->withErrors([
                'otp' => 'OTP has expired!'
            ]);
        }

        return redirect('/new-password');
    }

    public function newPassword()
    {
        return view('new-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::where(
            'email',
            session('reset_email')
        )->first();

        if (!$user) {
            return redirect('/login')->withErrors([
                'email' => 'User not found!'
            ]);
        }

        // Plain password, tumhari current requirement ke mutabiq
        $user->password = $request->password;

        $user->save();

        session()->forget([
            'reset_email',
            'reset_otp',
            'reset_otp_expires',
        ]);

        return redirect('/login')->with(
            'success',
            'Password changed successfully! Please login.'
        );
    }
}