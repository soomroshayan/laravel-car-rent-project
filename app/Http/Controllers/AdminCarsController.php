<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Support\Facades\Auth;

class AdminCarsController extends Controller
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

        // Get all cars
        $cars = Car::latest()->get();

        // Send cars to admin cars view
        return view('admin.cars', compact('cars'));
    }
}