<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function dashboard()
    {
        $data = [];
        $data['total_order'] = Order::where('user_id',Auth::user()->id)->count();
    	return view('frontend/user/dashboard',$data);
    }

    public function profile()
    {
    	$data = [];
    	$data['profile'] = User::where('id',Auth::user()->id)->first();
    	return view('frontend/user/profile',$data);
    }

    public function updateProfile(Request $request){
    	$user = User::findOrFail(Auth::user()->id);
    	$user->f_name = $request->f_name;
    	$user->l_name = $request->l_name;
    	$user->save();
    	Session::flash('success','Successfully Updated');
    	return back();
    }

    public function changePassword(){

        return view('frontend/user/changePassword');
    }

     public function savePassword(){
        $user = User::find(Auth::user()->id);
        if(Hash::check(Input::get('passwordOld'),$user['password']) && Input::get('password') == Input::get('password_confirmation')){
            $user->password = bcrypt(Input::get('password'));
            $user->save();
            Session::flash('success', 'Update  Successfully !');
            Auth::logout();
            return redirect('/login');
        }else{
            Session::flash('error','Sorry Failed !!');
            return back();
        }
    }

    public function orders()
    {
        $data = [];
        $data['total_order'] = Order::where('user_id',Auth::user()->id)->count();
        $data['orders'] = DB::table('orders')
                        ->select(
                            'orders.id as ordersId','orders.total_price','orders.created_at as orderDate',
                            'order_proucts.id as ordersProductId','order_proucts.quentity as order_prouctsQty',
                            'products.id as productstId','products.name as productname','products.price'
                        )
                        ->join('order_proucts', 'orders.id', '=', 'order_proucts.order_id')
                        ->join('products', 'order_proucts.product_id', '=', 'products.id')
                        ->where('orders.user_id',Auth::user()->id)
                        ->orderBy('order_proucts.id','desc')
                        ->get();
        return view('frontend.user.order',$data);
    }

    public function thankYou()
    {
        return view('frontend.user.thankyou');
    }

}
