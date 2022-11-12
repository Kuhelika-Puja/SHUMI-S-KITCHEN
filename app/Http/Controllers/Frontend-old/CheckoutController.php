<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ServiceCharge;
class CheckoutController extends Controller
{
    public function index()
    {
    	$data = [];
        $data['servicecharge'] = ServiceCharge::all();
    	return view('frontend.pages.checkout',$data);
    }
}
