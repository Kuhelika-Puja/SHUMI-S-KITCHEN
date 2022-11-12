<?php

namespace App\Http\Controllers\Backend;

use App\Model\Publication;
use App\Model\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{
  public function index()
  {
    $data = [];
    $data['publications'] = Publication::orderBy('id','desc')->get();
    $data['blogcategory'] = BlogCategory::all();
  
    return view('backend.publications.index',$data);
  }
  public function publication_create()
  {

    return view('backend.publications.create');
  }
  public function store(Request $request)
  {
      $update_id = $request->update_id;
      if(isset($update_id) && !empty($update_id)){
          $service =  Publication::findOrFail($update_id);
      }else{
          $service = new Publication();
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



    
}
