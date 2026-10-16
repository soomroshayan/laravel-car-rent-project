<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminCarsController;



//signup
Route::get('/signup', [SignupController::class, 'signup'])->name('signup');
Route::post('/signup', [SignupController::class, 'register']);

//email verfy
Route::get('/verify-otp', [SignupController::class, 'verifyOtp']);
Route::post('/verify-otp', [SignupController::class, 'checkOtp']);

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

//logout
Route::post('/logout', [LogoutController::class, 'logout']);

//cars databse se leata ha
Route::get('/cars', [CarController::class, 'index']);

//index.blade.php ma cars show kerta ha
Route::get('/', [HomeController::class, 'index']);

//car ki sari details
Route::get('/car/{id}', [CarController::class, 'show']);

//form fill for car booking
Route::post('/book-car/{carId}', [BookingController::class, 'store']);
Route::get('/my-bookings', [BookingController::class, 'myBookings']);

//about us
Route::get('/about', function () {
    return view('about');
});

//
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'update'])->middleware('auth');

// Rent car page
Route::get('/rent/{id}', [BookingController::class, 'rent'])->middleware('auth');

Route::get('/car/{id}', [CarController::class, 'show'])->middleware('auth');

//forgot password
Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendOtp']);
Route::get('/reset-otp', [ForgotPasswordController::class, 'resetOtp']);
Route::post('/reset-otp', [ForgotPasswordController::class, 'verifyOtp']);
Route::get('/new-password', [ForgotPasswordController::class, 'newPassword']);
Route::post('/new-password', [ForgotPasswordController::class, 'updatePassword']);



// Admin Panel
Route::get('/admin', function () {
    // User login check
    if (!Auth::check()) {
        return redirect('/login')->with(
            'error',
            'Please login first.'
        );
    }
    // Admin check
    if (Auth::user()->action != 1) {
        return redirect('/')->with(
            'error',
            'You are not authorized to access the Admin Panel.'
        );
    }
    return view('admin.index');
});                      

// Admin - View All Users
Route::get('/admin/users', [AdminUsersController::class, 'index']);

Route::get('/admin/cars', [AdminCarsController::class, 'index']);

