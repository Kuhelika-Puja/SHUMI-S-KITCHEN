<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Session;
use Hash;
use Illuminate\Support\Facades\Input;
use App\Order;

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
        $data['orders'] = Order::where('user_id',Auth::user()->id)->get();
        return view('frontend.user.order',$data);
    }

    public function thankYou()
    {
        return view('frontend.user.thankyou');
    }

}
