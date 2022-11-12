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
<section class="mt-5">
  <div class="row">
    @include('frontend.user.sidebar')
    <div class="col-md-8">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <table class="table table-bordered">
            <thead>
              <td>Sl.</td>
              <td>Product Name</td>
              <td>Quentity</td>
              <td>Price</td>
              <td>Total</td>
              <td>Order Date</td>
              
            </thead>
            <tbody>
              <?php $i=0; ?>
              @foreach($orders as $order)
              <?php
                
              ?>
              <?php $i++; ?>
              <tr>
                <td>{{$i}}</td>
                <td>{{$order->productname}}</td>
                <td>{{$order->order_prouctsQty}}</td>
                <td>{{$order->price}}</td>
                <td>{{ $order->price * $order->order_prouctsQty }}</td>
                <td>{{ $order->orderDate }}</td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <br>
    
    </div>
  </div>
</section>
@endsection