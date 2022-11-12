<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\PathFinder;
use Illuminate\Http\Request;
use Session;
use App\PathfinderOwnerReply;
use App\PathfinderReply;
class PathFinderController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$data = [];
		$data['pathfinders'] = PathFinder::orderBy('id','desc')->get();
		return view('backend.pathfinder.index', $data);
	}


	public function reply(Request $request){
		$update_id = $request->update_id;
		if(isset($update_id) && !empty($update_id)){
			$pathfinderOwnerReply = PathfinderOwnerReply::findOrFail($update_id);
		}else{
			$pathfinderOwnerReply = new PathfinderOwnerReply();
		}
		$pathfinderOwnerReply->pathfinder_id = $request->pathfinder_id;
		$pathfinderOwnerReply->reply = $request->reply;
		$pathfinderOwnerReply->save();
		return back();
	}


	public function showDetails($id){
		$data = [];
		$data['pathfinderReplay'] = PathfinderReply::where('pathfinder_id',$id)->orderBy('id','desc')->get();
		return view('backend.pathfinder.showDetails',$data);
	}

	public function pathfinderReplyDel($id){
		$service = PathfinderReply::findOrFail($id);
		$service->delete();
		$this->setSuccess('successfully deleted !!');
		return back();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *ret
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$data = [];
		$data['pathfinder'] = PathFinder::where('id',$id)->first();
		$data['pathfinderreplay'] = PathfinderOwnerReply::where('pathfinder_id',$id)->first();
		return view('backend.pathfinder.show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {

		$pathfinder = PathFinder::findOrFail($id);

		$pathfinder->status = 1;

		$pathfinder->save();
		Session::flash('message', 'Published!!');
		echo "Successfully Saved !!";
		return back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$service = PathFinder::findOrFail($id);
		$service->delete();
		$this->setSuccess('successfully deleted !!');
		return back();
	}
}
