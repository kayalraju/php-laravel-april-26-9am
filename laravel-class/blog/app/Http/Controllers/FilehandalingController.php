<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilehandalingController extends Controller
{
    public function index(){
        return view('student');
    }

    public function store(Request $request){
        //dd($request->all());
        //validation
        $validated = $request->validate([
            'name' => 'required |min:3|max:50|string',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:6',
            'city' => 'required',
            // 'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if(!$validated){
            return redirect()->back()->withErrors($validated)->withInput();
        }

        return "form submitted";


    }
}
