<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PathFinder;
use Session;
use App\PathfinderReply;
use Auth;
use App\PathfinderOwnerReply;
class PathfinderController extends Controller
{
    public function pathfinderstore(Request $request) {
		$validatedData = $request->validate([

			'comment' => 'required|max:500',
			'email' => 'email',
		]);
		$pathfinder = new PathFinder();

		$pathfinder->email = $request->email;
		$pathfinder->comment = $request->comment;
		$pathfinder->save();
		Session::flash('message', 'Saved!!');
		echo "Successfully Saved !!";
	}

    public function singlePathfinder($id){
    	$data = [];
    	$data['pathfinder'] = PathFinder::where('id',$id)->first();
    	$data['pathfinders'] = PathFinder::all();
        $data['pathfinder_owner_reply'] = PathfinderOwnerReply::where('pathfinder_id',$id)->first();

        $data['replycomments'] = PathfinderReply::where('pathfinder_id',$id)->get();
    	return view('frontend.pages.pathfinderdetails',$data);
    }

    public function pathFinderReply(Request $request){
        $reply = new PathfinderReply();
        $reply->user_id = Auth::user()->id;
        $reply->pathfinder_id = $request->pathfinder_id;
        $reply->reply = $request->reply;
        $reply->save();
        Session::flash('message', 'Saved!!'); 
        return back();
    }
}
