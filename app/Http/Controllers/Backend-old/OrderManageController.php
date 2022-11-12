<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\BuyNow;
class OrderManageController extends Controller
{
    public function orderManage($id)
    {
    	$data = [];
    	$data['order'] = Order::with('user')->find($id);
      
    	return view('backend.order.order_show',$data);
    }

    

    public function buyNowManage($id)
    {
    	$data = [];
    	$data['order'] = BuyNow::with('products')->find($id);
      
    	return view('backend.order.buynow',$data);
    }

    public function buyNowDelete($id)
    {
    	$service = BuyNow::findOrFail($id);
        $service->delete();
        $this->setSuccess('successfully deleted !!');
        return back();
    }
}
