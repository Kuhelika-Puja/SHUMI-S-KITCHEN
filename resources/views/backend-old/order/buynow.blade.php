@extends('backend.layouts.master')
@section('page-title','Service')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-head text-white" style="background-color: #2B3D51;">
                            <h5 class="p-3">Order Information </h5>
                        </div>
                        <div class="card-body">
                            <p><b>Invoice:</b> {{$order->invoice_id}}</p>
                            <p><b>Quentity:</b> {{$order->quentity}}</p>
                            <p><b>Total Price:</b> 
                                <?php echo $order->quentity *$order->products->price; ?>
                            </p>
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
                                <p><b>Product Name: </b> {{$order->products->name}}</p>
                                <p><b>Product Price: </b> {{$order->products->price}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection