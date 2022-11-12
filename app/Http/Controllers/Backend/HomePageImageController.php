<?php

namespace App\Http\Controllers\Backend;

use App\Model\HomePageImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomePageImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['homeimages'] = HomePageImage::orderBy('id','desc')->get();
        return view('backend.homepage.images.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.homepage.images.create');
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
            $homeimage =  HomePageImage::findOrFail($update_id);
        }else{
            $homeimage = new HomePageImage();
        }
        $image = $request->file('image');
        if ($image) {
            $image_name = Auth::user()->id.time().'.'.request()->image->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/homepageimage/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $homeimage->image = $image_url;
            }
        }
        $homeimage->name = $request->name;
        $homeimage->link = $request->link;
        $homeimage->position = $request->position;
    
        // $homeimage->position = $request->position;
        // $homeimage->user_id = Auth::user()->id;
        
        $this->setSuccess('successfully created !!');
        $homeimage->save();
        return redirect()->route('homepageimage.index');
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
        $data['homeimage'] = HomePageImage::findOrFail($id);
        return view('backend.homepage.images.create',$data);
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
        $homeimage = HomePageImage::findOrFail($id);
        $homeimage->delete();
        $this->setSuccess('successfully deleted !!');
        return back();
    }
}
