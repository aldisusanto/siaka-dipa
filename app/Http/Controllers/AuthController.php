<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function inLogin(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {

            if (auth()->user()->role == 'admin') {
                return redirect('/admin_dashboard');
            }
            if (auth()->user()->role == 'mahasiswa') {
                return redirect('/mahasiswa_dashboard');
            }
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
