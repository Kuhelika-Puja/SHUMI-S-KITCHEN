@extends('frontend.layouts.master')
@section('page-title',' | Thank you')
@section('style')
<style>
  .content-middle {
    height: 70vh;
    
    display: flex;
    align-items: center;
    justify-content: center;
  }
</style>
@endsection
@section('page-content')
<section class="">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

      <div class="content-middle">
        <div class="text-center">
          <h2>Thank you for <br> Your order ! </h2>
          <p>We will back soon</p>
          <a href="{{url('/shop')}}" class="btn btn-outline-secondary custom-btn-connect-sm  mb-2"> Continue Shoping</a>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>
@endsection