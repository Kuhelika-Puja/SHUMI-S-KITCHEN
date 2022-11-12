<?php

namespace App\Http\Controllers\Backend;

use App\Model\Aboutus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['aboutus'] = Aboutus::first();
        return view('backend.about_us.index',$data);
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

        $image1 = $request->file('image_one');
        $image2 = $request->file('image_two');
        if ($image1) {
            $image_name1 = Auth::user()->id.rand(0000000,9999999).'.'.request()->image_one->getClientOriginalExtension();
            $image_full_name1 = $image_name1;
            $destination_path = 'uploads/pagespic/';
            $image_url1 = $destination_path . $image_full_name1;
            $success = $request->file('image_one')->move($destination_path, $image_url1);
        }

        if ($image2) {
            $image_name2 = Auth::user()->id.rand(0000000,9999999).'.'.request()->image_two->getClientOriginalExtension();
            $image_full_name2 = $image_name2;
            $destination_path = 'uploads/pagespic/';
            $image_url2 = $destination_path . $image_full_name2;
            $success = $request->file('image_two')->move($destination_path, $image_url2);
        }

        Aboutus::where('id',$update_id)->update([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'description'=>$request->description,
            'image_one'=> $image_url1,
            'image_two'=> $image_url2,
            'updated_at'=>Carbon::now(),
        ]);

        $this->setSuccess('successfully created !!');
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
