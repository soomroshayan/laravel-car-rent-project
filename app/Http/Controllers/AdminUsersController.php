<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller
{
    public function index()
    {
        // Check login
        if (!Auth::check()) {
            return redirect('/login')->with(
                'error',
                'Please login first.'
            );
        }

        // Check admin
        if (Auth::user()->action != 1) {
            return redirect('/')->with(
                'error',
                'You are not authorized to access this page.'
            );
        }

        // Get all users
        $users = User::select(
            'id',
            'name',
            'email',
            'action',
            'image'
        )->latest()->get();

        return view('admin.users', compact('users'));
    }
}