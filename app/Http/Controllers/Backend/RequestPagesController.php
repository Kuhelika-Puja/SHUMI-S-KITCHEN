<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CustomerServiceRequest;
use App\MarketingsRequest;
use App\SalesRequest;
use App\EducationMangerRequst;
class RequestPagesController extends Controller
{
    public function sales(){
        $data = [];
    	$data['sales'] =  SalesRequest::all();
    	
    	return view('backend.pages.request_msg.sales',$data);
    } 
    public function marketing(){
        $data = [];
        $data['marketing'] =  MarketingsRequest::all();
        
        return view('backend.pages.request_msg.marketing',$data);
    }
    public function customerServices(){
        $data = [];
        $data['customer_services'] =  CustomerServiceRequest::all();
        
        return view('backend.pages.request_msg.customer_service',$data);
    }
    public function educationManager(){
        $data = [];
        $data['education_managers'] =  EducationMangerRequst::all();
        
        return view('backend.pages.request_msg.education_managers',$data);
    }
}
