<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;
class ContactController extends Controller
{
    public function index() {
    	// $data = [];
    	// $data['contacts'] = Contact::orderBy('id','desc')->get();
        // return view('backend.contact.index',$data);
        $contacts = Contact::latest()->get();
        return view('backend.contact.index', compact('contacts'));
	}
	public function show($id)
    {
		$contact = Contact::find($id);
        return view('backend.contact.contactus_show',compact('contact'));
    }
    public function edit($id){
        $data = Contact::find($id);
        return view('backend.contact.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $data = Contact::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();
        $this->setSuccess('Data Successfully Updated !!');
        return redirect()->route('contactus.index');
    }

	public function destroy($id)
    {
        Contact::find($id)->delete();
        return redirect()->back();
    }
}
