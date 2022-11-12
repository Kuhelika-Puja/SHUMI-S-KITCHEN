<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\News;
use App\Model\Story;
use App\Model\Event;
use App\Model\Team;
use App\Model\Product;
use App\Model\Contact;
use App\Model\Aboutus;
use App\Model\Gallery;
use App\Model\Community;
use App\Model\Art;
use App\Model\ArtCategory;
use App\Model\Video;
use App\Model\Subscription;
use App\Model\Mission;
use App\Model\History;
use App\Model\Library;
use App\Model\BlogImage;
use App\Model\NewsImage;
use App\PathFinder;
use App\Project;
use App\Model\Award;
use App\Model\Partner;
use App\PageBuilder;
use App\Model\GalleryCategory;
use App\ImpactStory;
use App\ServiceCharge;
use Session;
class PagesController extends Controller
{
    

    

    public function aboutUs(){
        $data = [];
        $data['about_us'] = Aboutus::first();
        return view('frontend.pages.aboutus',$data);
    }

    
    public function shopCategory($id){
        $data = [];
        $data['products'] = Product::where('category_id',$id)->get();
        return view('frontend.pages.shopCategory',$data);
    }

    
    

    
    public function shop(){
        $data = [];
        $data['products'] = Product::orderBy('id','desc')->paginate(30);
        return view('frontend.pages.shop',$data);
    }
    public function shopDetails($id){
        $data = [];
        $data['product'] = Product::findOrFail($id);
        $data['servicecharge'] = ServiceCharge::all();
        return view('frontend.pages.shopDetails',$data);
    }

    public function blog(){
        $data = [];
        $data['blogs'] = Blog::orderBy('position','desc')->orderBy('id','desc')->get();
        return view('frontend.pages.blog',$data);
    }

    public function blogDetails($id){
        $data = [];
        $data['blogs'] = Blog::findOrFail($id);
        
        return view('frontend.pages.blogDetails',$data);
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function ourClients(){
        return view('frontend.pages.our-clients');
    }

    public function contactSave(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        Session::flash('message','Successfully Send.');
        Session::flash('alert-class', 'alert-success'); 
        $contact->save();
        return back();
    }

    public function search(){
        return view('frontend.pages.mission');
    }

    public function mentorProgram(){
        return view('frontend.pages.mentorProgram');
    }
    public function subscribe(){
        return view('frontend.pages.subscribe');
    }
    public function subscribePost(Request $request){
        $this->validate($request, [
        
            'email' => 'required|email|unique:subscriptions,email',
            
        ]);
        $subscription = new Subscription();
        $subscription->fullname = $request->fullname;
        $subscription->email = $request->email;
        $subscription->save();
        return back();
    }

    public function testimonial(){

        return view('frontend.pages.testimonial');
    }
    public function libraryCategory($id){

        $data = [];
        $data['library'] = Library::where('category_id',$id)->get();
        return view('frontend.pages.libraryCategory',$data);
    }
    public function libraryDetails($id){
        
        $data = [];
        $data['library'] = Library::where('id',$id)->first();
        return view('frontend.pages.libraryDetails',$data);
    }

    public function pathfinder(){
        $data = [];
        $data['pathfinders'] = PathFinder::all();
        return view('frontend.pages.pathfinder',$data);
    }
public function projects() {
        $data = [];
        $data['projects'] = Project::orderBy('id', 'desc')->paginate(18);
        return view('frontend.pages.projects', $data);
    }
    public function project($id) {
        $data = [];
        $data['project'] = Project::where('id', $id)->first();
        return view('frontend.pages.projectDetails', $data);
    }
public function awards() {
        $data = [];
        $data['awards'] = Award::where('status', 1)->orderBy('id','desc')->get();
        return view('frontend.pages.awards', $data);
    }
public function partners() {
        $data = [];
        $data['partners'] = Partner::orderBy('id', 'desc')->paginate(18);
        return view('frontend.pages.partners', $data);
    }
public function page($slug) {
        $data = [];
        $data['pagecontent'] = PageBuilder::where('slug', $slug)->first();
        // echo "<pre>";
        // print_r($data['pagecontent']);
        return view('frontend.pages.dynamicpage', $data);

    }
public function demoPage(){
        return view('frontend.pages.demoPage');
    }
public function historyDetails($id){
        $data = [];
        $data['historyDetails'] = History::where('id',$id)->first();
        return view('frontend.pages.historyDetails',$data);
    }
public function galleryCategory(){
        $data = [];
        $data['galleryCategory'] = GalleryCategory::where('status',1)->orderBy('id','desc')->get();
        return view('frontend.pages.gallery',$data);
    }

    public function album($id){
        $data = [];
        $data['id'] = $id;
        $data['album'] = Gallery::where('category_id',$id)->where('status',1)->get();
        return view('frontend.pages.gallery_single',$data);
    }
    public function illustration(){
        $data = [];
    
        $data['illustrations'] = Gallery::orderBy('id','desc')->get();
        return view('frontend.pages.illustration',$data);
    }
    public function papercutCommissions(){
        $data = [];
    
        $data['illustrations'] = Gallery::orderBy('id','desc')->get();
        return view('frontend.pages.papercutCommissions',$data);
    }
    public function customerInfoWholesale(){
        $data = [];
    
        $data['illustrations'] = Gallery::orderBy('id','desc')->get();
        return view('frontend.pages.customerInfoWholesale',$data);
    }
public function impactStory($id){
        $data = [];
        $data['impactstory'] = ImpactStory::findOrFail($id);
        return view('frontend.pages.impactstorydetails',$data);
    }
public function impactStorys(){
        $data = [];
        $data['impactstorys'] =  ImpactStory::orderBy('id','desc')->paginate(9);
        return view('frontend.pages.impactstory',$data);
    }

    public function blogSearch(Request $request)
    {
        $data = [];
        $data['name'] =  $request->name;
        $name = $request->name;
        $data['search'] = Blog::where('title','like', '%'.$name.'%')->get();
        return view('frontend.pages.blogSearch',$data);
    }
}
