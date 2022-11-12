<?php

namespace App\Http\Controllers\Frontend;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use DB;
use App\OrderProuct;
use Auth;
use App\BuyNow;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::latest()->get();
        return view('backend.order.order_index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'location' => 'required',
            'address' => 'required'
        ]); 
    
        DB::transaction(function() use ($request)
        {
            $data = new Order();
            $data->user_id = Auth::user()->id;
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->location = $request->location;
            $data->city = $request->city;
            $data->postal_code = $request->postal_code;
            $data->invoice_id = uniqid('renebd_');
            $data->total_price = Cart::subTotal();
            $data->save();
           
            
            foreach(Cart::content() as $item) {
                $pro = new OrderProuct;
                
               $pro->product_id = $item->id;
               $pro->order_id = $data->id;
               $pro->quentity = $item->qty;
               $pro->save();
            
            }
            
        });
        
        Cart::destroy();
        return redirect('/thankyou');
    }

    public function buynow(Request $request)
    {

        $this->validate($request,[
            
            'name' => 'required',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'email' => 'required|email',
            'location' => 'required',
            'address' => 'required',
            'quentity' => 'required'
        ]); 

        $buynow = new BuyNow();
        $buynow->name = $request->name;
        $buynow->invoice_id = uniqid('renebd_');
        $buynow->phone = $request->phone;
        $buynow->email = $request->email;
        $buynow->location = $request->location;
        $buynow->address = $request->address;
        $buynow->product_id = $request->product_id;
        $buynow->quentity = $request->quentity;
        $buynow->save();

        return redirect()->route('invoice',$buynow->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view ('backend.order.order_show', compact ('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id)->delete();
        return redirect()->back();
    }

    public function invoice($id){
        $data = [];
        $data['invoice'] = BuyNow::with('products')->findOrFail($id);
        return view('frontend.pages.invoice',$data);
    }
}
