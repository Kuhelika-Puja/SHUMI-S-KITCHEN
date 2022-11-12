<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog;
use DB;
use Auth;
use App\Model\BlogCategory;
use App\Model\BlogImage;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['blogs'] = Blog::orderBy('id','desc')->get();
        $data['blogcategory'] = BlogCategory::all();
       // echo "<pre>";
        // print_r($data);
        //echo $data['news'][0]->title; // work
       // exit();
        // foreach($data['news'] as $data){
        //     echo $data->title;
        //     echo "<br>";
        // }
        // exit();

        return view('backend.blog.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['blogcategory'] = BlogCategory::all();
        return view('backend.blog.create',$data);
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
            $service =  Blog::findOrFail($update_id);
        }else{
            $service = new Blog();
        }
        $image = $request->file('image');
        if ($image) {
            $image_name = Auth::user()->id.time().'.'.request()->image->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/news/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $service->image = $image_url;
            }
        }
        
        $service->title = $request->title;
        $service->description = nl2br($request->description);
        $service->position = $request->position;
        $service->user_id = Auth::user()->id;
        

       



        $this->setSuccess('successfully Work !!');
        $service->save();


        

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
        $data['blog'] = Blog::findOrFail($id);
        $data['blogcategory'] = BlogCategory::all();
        $data['blogimage'] = BlogImage::where('blog_id',$id)->get();
        return view('backend.blog.edit',$data);
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
        $service =  Blog::findOrFail($id);
        $image = $request->file('image');
        if ($image) {
            $image_name = Auth::user()->id.time().'.'.request()->image->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/news/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('image')->move($destination_path, $image_full_name);
            if ($success) {
                $service->image = $image_url;
            }
        }
        
        $service->title = $request->title;
        $service->description = nl2br($request->description);
        $service->position = $request->position;
        $service->user_id = Auth::user()->id;
        

       



        $this->setSuccess('successfully Work !!');
        $service->save();


        


        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Blog::findOrFail($id);
        $service->delete();
        $this->setSuccess('successfully deleted !!');
        return back();
    }
}
