<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function product()
    {
        return view('product');
    }
    public function order()
    {
        return view('order');
    }
}
