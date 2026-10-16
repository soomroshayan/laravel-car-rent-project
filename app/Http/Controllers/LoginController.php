<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function authenticate(Request $request){
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
    $user = User::where('email', $request->email)->first();
    if (!$user) {
        return back()->with('error', 'Email not found!');
    }
    if ($user->password !== $request->password) {
        return back()->with('error', 'Incorrect password!');
    }
    Auth::login($user);
$request->session()->regenerate();
$request->session()->put('user_id', $user->id);
$request->session()->put('user_name', $user->name);
$request->session()->put('user_email', $user->email);
return redirect('/');
}
}