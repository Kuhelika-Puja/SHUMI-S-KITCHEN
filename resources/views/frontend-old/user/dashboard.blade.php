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
  .sidebar{
    height: 100vh;
    background: #ececec;
    padding: 50px 0px;
  }
  .sidebar ul{
    list-style: none;
  }
  .sidebar ul li{
    padding: 10px 0px;
  }
  .nav-link{
    color: #000;
  }
  .wizard{
    background: #ececec;
    text-align: center;
    padding: 20px;
  }
</style>
@endsection
@section('page-content')
<section class="">
  <div class="row">
    @include('frontend.user.sidebar')
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-4">
          <div class="wizard">
            <h5>Total Orders</h5>
            <h5><b>{{$total_order}}</b></h5>
          </div>
        </div>
      </div>
      <br>
    
    </div>
  </div>
</section>
@endsection