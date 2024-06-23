<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $newControl = new NewsController();
        $result = $newControl->loadAndProcessData();
        $newData = array_slice($result['data'], 0, 5);
        if ($request->get('is_mobile')) {
            return view('mobile.home', ['new' => $newData[0],'news' => $newData]); // Return mobile view
        } else {
            return view('pc.home', ['new' => $newData[0],'news' => $newData]); // Return PC view
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

