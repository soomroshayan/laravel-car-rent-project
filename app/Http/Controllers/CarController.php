<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('cars', compact('cars'));
    }
    public function show($id)
    {
    $car = Car::findOrFail($id);

    return view('car-details', compact('car'));
    }
}