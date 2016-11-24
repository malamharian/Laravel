<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->save();

        return redirect('/')->with('register_status', 'Register successful');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect('home');
        }
        return redirect('/')->with('login_status', 'Invalid username or password');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
