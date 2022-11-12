@extends('frontend.layouts.master')
@section('page-title',' | Shop Details')
@section('style')
<style>
.description p {
text-align: justify !important;
}
</style>
@endsection
@section('page-content')
<section class="blog">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <img src="{{ url($product->image)}}" alt="" style="width: 100%;">
      </div>
      <div class="col-md-6">
        <div class="product-content">
          <h5>Name : {{$product->name}}</h5>
          <h5>Price : {{$product->price}} {{$product->currency}}</h5>
          <p> <b>Details : </b> {!! $product->description !!}</p>
          <br><br>
          <div class="add-to-card">
            <a href="javascript:void(0)" class="btn btn-outline-secondary custom-btn-connect-sm addtocart"  id="cartBtn" data-id="{{$product->id}}">Add to cart</a>
            <button class="btn btn-outline-secondary custom-btn-connect-sm " type="submit" data-toggle="modal" data-target="#exampleModal">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Order</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ url('buynow')}}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <div class="modal-body">
              <div class="form-group">
                <label for="fullname">Fullname</label>
                <input type="text" class="form-control" name="name" required>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="number" class="form-control" name="phone" required>
              </div>
              <div class="form-group">
                <label for="phone">Email</label>
                <input type="email" class="form-control" name="email" required>
              </div>
              <div class="form-group">
                <label for="phone">Quentity</label>
                <input type="number" class="form-control" name="quentity" required>
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="" cols="5" rows="3" class="form-control"></textarea>
              </div>
              
              
              @foreach($servicecharge as $charge)
              <div class="form-group form-check">
                <input type="radio" name="location" class="form-check-input" id="{{$charge->id}}" value="{{$charge->id}}" required>
                <label class="form-check-label" for="{{$charge->id}}">{{$charge->name }} {{$charge->price }} {{$charge->currency}}</label>
              </div>
              @endforeach
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Checkout</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('scripts')
<script>
jQuery(".description").text(function (i, text) {
return text.length > 100 ? text.substr(0, text.lastIndexOf(' ', 550)) + '...' : text;
});
</script>
@endsection