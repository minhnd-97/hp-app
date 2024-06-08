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
}

