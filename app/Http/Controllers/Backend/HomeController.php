<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Frontend\Website\Contact;
use Carbon\Carbon;
use App\Models\Frontend\Website\ApplayCourse;
use DB;
use App\Suggestion;
use App\FranchiseProfile;
use App\Order;
use App\BuyNow;

class HomeController extends Controller
{
    public function index(){
    	$data = [];
        $data['total_order'] = Order::count();
        $data['today_order'] = Order::whereDate('created_at', Carbon::today())->count();

        $data['total_buynow'] = BuyNow::count();
        $data['today_buynow'] = BuyNow::whereDate('created_at', Carbon::today())->count();

    	return view('backend.dashboard',$data);
    }

    
    public function totalOrders(){
        $data = [];
        $data['orders'] = Order::orderBy('id','desc')->get();
        return view('backend.order.totalOrders',$data);
    }
    
    public function todayOrders(){
        $data = [];
        $data['orders'] = Order::whereDate('created_at', Carbon::today())->get();
        return view('backend.order.todayOrders',$data);
    }

    public function totalBuynow(){
         $data = [];
        $data['orders'] = BuyNow::with('products')->orderBy('id','desc')->get();
        return view('backend.order.totalBuynow',$data);
    }

    public function todayBuynow(){
        $data = [];
        $data['orders'] = BuyNow::with('products')->whereDate('created_at', Carbon::today())->get();
        return view('backend.order.todayBuynow',$data);
    }
    public function homecontentcreate(){
        // $datas = HomePage::latest('heading','content')->get();
        // return view('backend.homepage.content.index');
        // dd('test');
    }
}
