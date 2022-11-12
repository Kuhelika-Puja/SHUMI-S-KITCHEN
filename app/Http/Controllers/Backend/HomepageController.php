<?php

namespace App\Http\Controllers\Backend;

use App\Model\HomePage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = HomePage::latest()->get();
        return view('backend.homepage.content.index', compact('datas'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //return view('backend.homepage.content.index');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'heading' => 'required',
            'content' => 'required',
            'status' => 'required'
        ]);
        $homepage = new HomePage();
        $homepage->heading = $request->heading;
        $homepage->content = $request->content;
        $homepage->status = $request->status;
        $homepage->save();
        $this->setSuccess('Successfully Created !!');
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = HomePage::find($id);
        return view('backend.homepage.content.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = HomePage::find($id);
        return view('backend.homepage.content.edit', compact('data'));
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
        $this->validate($request,[
            'heading' => 'required',
            'content' => 'required',
            'status' => 'required'
        ]);
        $homepage = HomePage::find($id);
        $homepage->heading = $request->heading;
        $homepage->content = $request->content;
        $homepage->status = $request->status;
        $homepage->save();
        $this->setSuccess('Data Successfully Updated !!');
        return redirect()->route('homepage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        HomePage::find($id)->delete();
        $this->setSuccess('Data Successfully Deleted !!');
        return redirect()->back();
        
    }
    
}