<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Setting;
use Auth;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['setting'] = Setting::first();
        return view('backend.setting.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $update_id = $request->update_id;
        if(isset($update_id) && !empty($update_id)){
             $setting = Setting::findOrFail($update_id);
        }else{
            $setting = new Setting();
        }
        $logo = $request->file('logo');
        if ($logo) {
            $image_name = Auth::user()->id.time().'.'.request()->logo->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/setting/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('logo')->move($destination_path, $image_full_name);
            if ($success) {
                $setting->logo = $image_url;
            }
        }
        $setting->company_name = $request->company_name;
        $setting->company_sologan = $request->company_sologan;
        $setting->company_description = nl2br($request->company_description);
        $setting->company_author = $request->company_author;
        $setting->phone_one = $request->phone_one;
        $setting->phone_two = $request->phone_two;
        $setting->email_one = $request->email_one;
        $setting->email_two = $request->email_two;
        $setting->address = $request->address;
        $setting->fb = $request->fb;
        $setting->twitter = $request->twitter;
        $setting->ins = $request->ins;
        $setting->linkedin = $request->linkedin;
        $setting->skype = $request->skype;
        $setting->youtube = $request->youtube;
        $setting->location_embaded = $request->location_embaded;
        $setting->save();
        $this->setSuccess(' Successfully Inserted !! ');
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
        //
    }
}
