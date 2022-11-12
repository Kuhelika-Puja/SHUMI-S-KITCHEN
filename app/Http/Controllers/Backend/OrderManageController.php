<?php

namespace App\Http\Controllers\Backend;

use Auth;
use App\Order;
use App\BuyNow;
use App\OrderProuct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OrderManageController extends Controller
{
    public function orderManage($id)
    {
    	// $data = [];
    	// $data['order'] = Order::with('user')->find($id);
    	// $data['order_prouct'] = DB::table('orders')
        //                 ->select(
        //                     'orders.id as ordersId','orders.total_price','orders.created_at as orderDate',
        //                     'order_proucts.id as ordersProductId','order_proucts.quentity as order_prouctsQty',
        //                     'products.id as productstId','products.name as productname','products.price'
        //                 )
        //                 ->join('order_proucts', 'orders.id', '=', 'order_proucts.order_id')
        //                 ->join('products', 'order_proucts.product_id', '=', 'products.id')
        //                 ->where('orders.id',$id)
        //                 ->orderBy('order_proucts.id','desc')
        //                 ->get();

        $order = Order::find($id);
        $order_prouct = OrderProuct::where('order_id',$id)->get();
       
        return view ('backend.order.order_show', compact ('order','order_prouct'));

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
