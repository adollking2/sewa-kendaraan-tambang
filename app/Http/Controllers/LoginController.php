<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        if (Auth::attempt($validatedData) && Auth::user()->roles == 'admin') {
            $request->session()->regenerate();
            Log::info('admin telah login');

            return redirect()->intended('admin/dashboard')->withSuccess('Signed in');
        }
        if (Auth::attempt($validatedData) && Auth::user()->roles == 'penyetuju') {
            $request->session()->regenerate();
            Log::info('penyetuju telah login');

            return redirect()->intended('penyetuju/dashboard')->withSuccess('Signed in');
        }

        Log::info('akun tidak terdaftar/ belum login');
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function logout() {
        // Session::flush();
        Auth::logout();
        Log::info('Logout');

        return Redirect('/');
    }

}
