<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\Aboutus;
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
        
       libxml_use_internal_errors(true);
        $dom = new \DomDocument();
        $body = $request->description;
        $dom->loadHtml($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $k => $img) {

            $data = $img->getAttribute('src');
if (substr($img->getattribute('src'), 0, 4) != 'http') {

    if(isset($data)){
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
}
            $data = base64_decode($data);

            $image_name = time() . $k . '.png';

            $image_full_name = $image_name;
            $destination_path = 'uploads/project/';
            $image_url = $destination_path . $image_full_name;
            file_put_contents($image_url, $data);

            // $path = public_path() . $image_name;

            // file_put_contents($path, $data);

            // file_put_contents($image_url, $data);

            $img->removeAttribute('src');

            $img->setAttribute('src', url($image_url));

        }
        }
        $body = $dom->saveHTML();


        $update_id = $request->update_id;
        if(isset($update_id) && !empty($update_id)){
            $aboutus =  Aboutus::findOrFail($update_id);
        }else{
            $aboutus = new Aboutus();
        }
        $aboutus->description = $body;
        
        
        $aboutus->save();
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
