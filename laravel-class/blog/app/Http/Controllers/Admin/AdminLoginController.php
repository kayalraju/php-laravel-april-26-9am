<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function loginstore(Request $request){
         $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.view')->with('success', 'Logged in successfully.');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials provided.',
        ]);
        
    }

    // public function dashboard(){
    //     return view('admin.dashboard');
    // }


    public function logout(Request $request){
       Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.view');
    }
}
