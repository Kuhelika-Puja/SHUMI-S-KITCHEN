<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Subscription;
use App\Model\News;
use DB;
class SubscriberController extends Controller
{
    public function index(){
    	$data = [];
    	$data['subs'] = Subscription::all();
    	return view('backend.subscribe.index',$data);
    }

    public function newsImageDelete($newsId,$id){
        
    	$news = News::findOrFail($newsId);
    	$hd = explode(',',$news->other_image);
    	foreach($hd as $singleimg){
    		$other_image[]=$singleimg;
    		if($singleimg == $id){
    			unset($singleimg);
    		}else{
                 $other_image[]=$singleimg; 
            }
    	}

        $news->other_image =  implode(",",$other_image);
        $news->save();
        return back();
	}
	public function destroy($id)
    {
        Subscription::find($id)->delete();
        return redirect()->back();
    }
}
