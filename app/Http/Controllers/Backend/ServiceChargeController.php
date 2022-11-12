<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ServiceCharge;
use Session;
class ServiceChargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['service_charge']=ServiceCharge::orderBy('id','desc')->get();
        return view('backend.servicecharge.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.servicecharge.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $update_id = $request->update_id;
        if(isset($update_id) && !empty($update_id)){
            $contact =  ServiceCharge::findOrFail($update_id);
        }else{
            $contact = new ServiceCharge;
        }
        $contact->name = $request->name;
        $contact->price = $request->price;
        Session::flash('message','Successfully Send.');
        Session::flash('alert-class', 'alert-success'); 
        $contact->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data['service_charge'] = ServiceCharge::findOrFail($id);
       return view('backend.servicecharge.create',$data);
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
        $currency = ServiceCharge::findOrFail($id);
        $currency->delete();
        $this->setSuccess('successfully deleted !!');
        return back();
    }
}
