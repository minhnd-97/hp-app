<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->get('is_mobile')) {
            return view('mobile.home'); // Return mobile view
        } else {
            return view('pc.home'); // Return PC view
        }
    }

    public function product(Request $request) {
        if ($request->get('is_mobile')) {
            return view('mobile.product'); // Return mobile view
        } else {
            return view('pc.product'); // Return PC view
        }
    }
}

