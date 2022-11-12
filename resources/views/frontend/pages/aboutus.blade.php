@extends('frontend.layouts.master')
@section('page-title',' | About Us')
@section('style')
<style>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
.blog{
font-family: 'Open Sans Condensed', sans-serif;
}
  .about-us-content{
    line-height: 30px;
  }
  .aboutus_title_img{
    text-align: center;
    padding-bottom: 30px;
  }
  .about_us_des{
    padding-bottom: 30px;
    padding-right:100px;
    padding-left:100px;
  }
  .aboutus_title_img2{
    text-align: center;
    padding-bottom: 30px;
  }
  .aboutus_title_img2 img{
    width: 500px;
  }
  .about_us_title{
    text-align: center;
    padding-bottom: 30px;
  }
  .aboutus_title_img img{
    width: 500px;
  }
  .about_us_title{
  }
  .about_title{
  }
</style>
@endsection
@section('page-content')
<section class="blog">


    <div class="about_us_title">
      <div class="about_title">
        <h1>{!! $about_us->title !!}</h1>
        <h5>{!! $about_us->subtitle !!}</h5>
      </div>
    </div>
    <div class="aboutus_title_img">
      <img src="{{asset($about_us->image_one)}}" alt="">
    </div>
    <div class="about_us_des">
      <p>{!! $about_us->description !!}</p>
    </div>
    <div class="aboutus_title_img2">
      <img src="{{asset($about_us->image_two)}}" alt="">
    </div>
    
  

    

</section>
@endsection