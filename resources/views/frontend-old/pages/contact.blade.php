@extends('frontend.layouts.master')
@section('page-title',' | Contact Us')
@section('style')
<style>
.about-us-content{
line-height: 30px;
}
</style>
@endsection
@section('page-content')
<section class="blog">
  <div class="home-page-content">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="contact-us text-center">
          <h3 class="text-center">Contact</h3> <br>
          <p class="mp-0">sanjana@renebd.com , naimul@renebd.com</p>
          <p class="mp-0">+88 01990599829</p>
        </div>
          @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-check"></i> Alert!</h4>
      {{ Session::get('message') }}
    </div>
    
    @endif
    
        <form action="{{url('contact')}}" method="post">
          @csrf
        <div class="contact-form mt-4">
          <div class="form-group">
            <label for="">Name *</label>
            <input type="text" class="form-control custom-form-control" name="name" value="" required>
          </div>
          <div class="form-group">
            <label for="">Email Address *</label>
            <input type="email" class="form-control custom-form-control" name="email" value="" required>
          </div>
          <div class="form-group">
            <label for="">Phone *</label>
            <input type="number" class="form-control custom-form-control" name="phone" value="" required>
          </div>
          <div class="form-group">
            <label for="">Subject *</label>
            <input type="text" class="form-control custom-form-control" name="subject" value="" required>
          </div>
          <div class="form-group">
            <label for="">Message *</label>
            <textarea name="message" class="form-control custom-form-control" id="" cols="10" rows="5"></textarea>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-outline-secondary custom-btn-connect-sm  mb-2">SUBMIT</button>
          </div>
        </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
</section>
@endsection