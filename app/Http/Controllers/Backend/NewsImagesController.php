<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\NewsImage;
use Auth;
use App\Model\News;
class NewsImagesController extends Controller
{
    public function index($id)
    {   
        $data = [];
        $data['id'] = $id;
        $data['blogimages'] = NewsImage::where('news_id',$id)->get();
        return view('backend.newsimages.index',$data);
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


        

        $photos = $request->file('photos');
        if ($photos) {
            $inc = 0;
            foreach($photos as $photo){
                $inc++;
                $blog_image = new NewsImage();
            $image_name = Auth::user()->id.time().$inc.'.'.$photo->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/newsimages/';
            $image_url = $destination_path . $image_full_name;
            $success = $photo->move($destination_path, $image_full_name);
            if ($success) {
                
                $blog_image->photos = $image_url;
            }
            $blog_image->news_id = $request->news_id;
            $blog_image->save();
        }
        }

        return back();


    }

    public function blogimageDelete($id){
        $service = NewsImage::findOrFail($id);
        $service->delete();
        $this->setSuccess('successfully deleted !!');
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
