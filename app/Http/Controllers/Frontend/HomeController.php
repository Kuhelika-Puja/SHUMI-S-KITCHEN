<?php

namespace App\Http\Controllers\Frontend;

use DB;
use App\Partner;
use App\Project;
use App\Model\Blog;
use App\Model\News;
use App\Model\Team;
use App\PathFinder;
use App\ImpactStory;
use App\Model\Award;
use App\Model\Event;
use App\Testimonial;
use App\Model\Product;
use App\Model\Service;
use App\Model\HomePage;
use App\Model\SectionTwo;
use App\Model\SectionShop;
use App\Model\SectionVoic;
use App\Model\Sectionevent;
use App\Model\BannerSection;
use App\Model\HomePageImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function posts(){
        $data = [];
        $data['posts'] = DB::table('wb_posts')->paginate(50);
        return view('frontend.pages.posts',$data);
    }

    public function postsDetails($id){
        $data = [];
        $data['posts'] = DB::table('wb_posts')->where('ID',$id)->first();
        return view('frontend.pages.postsDetails',$data);
    }

    public function index()
    {
        $data = [];
        $data['products'] = Product::limit(3)->get();
        $data['testimonials'] = Testimonial::limit(5)->latest()->orderBy('id','desc')->get();
        $data['homepage'] = HomePage::where('status',1)->take(1)->latest()->get();
        // $data['homeimages'] = HomePageImage::limit(7)->latest()->get();
        $data['img1'] = HomePageImage::where('position', 1)->take(1)->latest()->get();
        $data['img2'] = HomePageImage::where('position', 2)->take(1)->latest()->get();
        $data['img3'] = HomePageImage::where('position', 3)->take(1)->latest()->get();
        $data['img4'] = HomePageImage::where('position', 4)->take(1)->latest()->get();
        $data['img5'] = HomePageImage::where('position', 5)->take(1)->latest()->get();
        $data['img6'] = HomePageImage::where('position', 6)->take(1)->latest()->get();
        return view('frontend.index', $data);
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
        //
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
