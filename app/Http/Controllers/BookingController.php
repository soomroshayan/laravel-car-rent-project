<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request, $carId)
    {
        // Check custom login session
        if (!session()->has('user_id')) {
            return redirect('/login');
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'pickup_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:pickup_date',
            'pickup_location' => 'required',
            'return_location' => 'required',
            'message' => 'nullable',
        ]);

        $car = Car::findOrFail($carId);

        Booking::create([
            'user_id' => session('user_id'),
            'car_id' => $car->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'pickup_date' => $request->pickup_date,
            'return_date' => $request->return_date,
            'pickup_location' => $request->pickup_location,
            'return_location' => $request->return_location,
            'message' => $request->message,
            'status' => 2,
            'action' => 2,
        ]);

        return redirect('/')->with(
            'success',
            'Car booking submitted successfully!'
        );
    }


    public function myBookings()
    {
        // Check custom login session
        if (!session()->has('user_id')) {
            return redirect('/login');
        }

        // Only logged-in user's bookings
        $bookings = Booking::where(
            'user_id',
            session('user_id')
        )
        ->with('car')
        ->latest()
        ->get();

        return view('my-bookings', compact('bookings'));
    }
    public function rent($id)
{
    $car = Car::findOrFail($id);

    return view('car-details', compact('car'));
}
}