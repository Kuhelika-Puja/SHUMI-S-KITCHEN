@extends('frontend.layouts.master')
@section('page-title',' | Checkout')
@section('page-content')
<section class="discount-section">
  <div class="container p-5"  style="background-color: #fff;">
    <div class="py-5">
      
      <!-- <h2>Checkout your order</h2> -->
      
    </div>
    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">{{Cart::count()}}</span>
        </h4>
        <ul class="list-group mb-3">
          <?php $total = 0 ;?>
          @foreach(Cart::content() as $items)
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">{{$items->name}}</h6>
              <small class="text-muted">Quentity : {{$items->qty}}</small>
              <small class="text-muted">Price : {{$items->price}} BDT</small>
            </div>
            <span class="text-muted"><?php echo $subTotal = $items->qty * $items->price;?> BDT</span>
          </li>
          <?php $total+=$subTotal;?>
          @endforeach
          
        <li class="list-group-item d-flex justify-content-between">
          <span>Total ( BDT )</span>
          <strong><?php echo number_format ($total); ?> BDT</strong>
        </li>
      </ul>
    
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing & Shipping address</h4>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form class="needs-validation" novalidate="" method="post" action="{{url('order')}}">
        @csrf
        <input type="hidden" name="total_amount" value="{{$total}}">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Full Name</label>
            <input type="text" class="form-control" name="name" id="firstName" placeholder="" required="" value="{{ old('name')}}">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="firstName">Phone Number</label>
            <input type="text" class="form-control" name="phone" id="firstName" placeholder="" required="" value="{{ old('phone')}}">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="firstName">Email</label>
            <input type="email" class="form-control" name="email" id="firstName" placeholder="" required="" value="{{ old('email')}}">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-md-12">
            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required="" value="{{ old('address')}}">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">city</label>
            <input type="text" class="form-control" name="city" id="address" placeholder="1234 Main St" required="" value="{{ old('city')}}">
          </div>
          
          <div class="col-md-3 mb-3">
            <label for="zip">Postal Code</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="" required="" value="{{ old('postal_code')}}">
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        @foreach($servicecharge as $charge)
          <div class="form-group form-check">
            <input type="radio" name="location" class="form-check-input" id="{{$charge->id}}" value="{{$charge->id}}" required>
            <label class="form-check-label" for="{{$charge->id}}">{{$charge->name }} {{$charge->price }} {{$charge->currency}}</label>
          </div>
        @endforeach
        <!-- <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
      <hr class="mb-4"> -->
        <!-- <hr class="mb-4">
        <h4 class="mb-3">Payment</h4>
        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="paypal">Paypal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div> -->
        
        <button class="btn btn-outline-secondary custom-btn-connect-sm  mb-2 btn-lg btn-block" type="submit">Place Order</button>
      </form>
    </div>
  </div>
</div>

</section>
@endsection