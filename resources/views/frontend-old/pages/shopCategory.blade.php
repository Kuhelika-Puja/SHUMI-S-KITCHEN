@extends('frontend.layouts.master')
@section('page-title',' | Shop')
@section('page-content')

    <section class="blog">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              
              @foreach($products as $proudct)
              <div class="col-md-4 mb-4 text-center">
                  <div class="single-shop ">
                   <a href="{{url('shop',$proudct->id)}}">  <img src="{{url($proudct->image)}}" alt="Avatar" class="image" style="width: 100%;"></a>
                    <p class="mp-0 text-center">{{$proudct->name}}</p>
                    <p class="mp-0 text-center">  {{$proudct->price}} {{$proudct->currency}}</p>
                  </div>
                  <a href="javascript:void(0)" class="btn btn-info btn-sm custom-shopping-cart-btn addtocart"  id="cartBtn" data-id="{{$proudct->id}}">Add to cart</a>
              </div>
             @endforeach
              
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection