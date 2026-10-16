<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect('/')->with(
            'success',
            'You have been logged out successfully!'
        );
    }
}