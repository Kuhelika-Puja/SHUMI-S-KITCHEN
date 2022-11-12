@extends('backend.layouts.master')
@section('page-title','Service')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-head text-white" style="background-color: #2B3D51;">
                            <h5 class="p-3">Order Information </h5>
                        </div>
                        <div class="card-body">
                            <p><b>Invoice:</b> {{$order->invoice_id}}</p>
                            <p><b>Total Price:</b> {{$order->total_price}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-info">
                        <div class="card">
                            <div class="card-head text-white" style="background-color: #2B3D51;">
                                <h5 class="p-3">Product Information </h5>
                            </div>
                            <div class="card-body">
                                @foreach($order_prouct as $op)
                                <p><b>Product Name: </b> {{$op->product->name}}</p>
                                <p><b>Product Price: </b> {{$op->product->price}}</p>
                                <p><b>Quentity: </b> {{$op->quentity}}</p>
                                <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-info">
                        <div class="card">
                            <div class="card-head text-white" style="background-color: #2B3D51;">
                                <h5 class="p-3">Billing Information </h5>
                            </div>
                            <div class="card-body">
                                <p><b>Name:</b> {{$order->name}}</p>
                                <p><b>Phone:</b> {{$order->phone}}</p>
                                <p><b>Address:</b> {{$order->address}}</p>
                                <p><b>Email:</b> {{$order->email}}</p>
                                <p><b>City:</b> {{$order->city}}</p>
                                <p><b>Postal Code:</b> {{$order->postal_code}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="product-info">
                        <div class="card">
                            <div class="card-head text-white" style="background-color: #2B3D51;">
                                <h5 class="p-3">User Information </h5>
                            </div>
                            <div class="card-body">
                                <p><b>First Name:</b> {{$order->user->f_name}}</p>
                                <p><b>First Name:</b> {{$order->user->l_name}}</p>
                                <p><b>First Name:</b> {{$order->user->email}}</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection