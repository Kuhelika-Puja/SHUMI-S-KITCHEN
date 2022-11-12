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
</style>
@endsection
@section('page-content')
<section class="blog">
  


{!! $about_us->description !!}

</section>
@endsection