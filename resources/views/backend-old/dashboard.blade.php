@extends('backend.layouts.master')
@section('page-title','Dashboard')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Dashboard</h4>
                    
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row justify-content-center">
            <div class="col-md-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-layers float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Total Order</h6>
                    <h2 class="m-b-20" data-plugin="counterup"> {{$total_order}} </h2>
                    <a href="{{url('admin/total/orders')}}">View</a>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-paypal float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Today Orders </h6>
                    <h2 class="m-b-20"><span data-plugin="counterup">{{$today_order}}</span></h2>
                    <a href="{{url('admin/today/orders')}}">View</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-layers float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Total Buy Now Order</h6>
                    <h2 class="m-b-20" data-plugin="counterup"> {{$total_buynow}} </h2>
                    <a href="{{url('admin/total/buynow')}}">View</a>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-paypal float-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Today Buy Now Order </h6>
                    <h2 class="m-b-20"><span data-plugin="counterup">{{$today_buynow}}</span></h2>
                    <a href="{{url('admin/today/buynow')}}">View</a>
                </div>
            </div>
        </div>
        
        <!-- end row -->
        </div> <!-- container -->
    </div>
    @endsection