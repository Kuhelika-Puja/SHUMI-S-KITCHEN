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
<section class="mt-4">
  <div class="row">
    @include('frontend.user.sidebar')
    <div class="col-md-8 mt-4">
      @include('frontend.user.message')
      <div class="row justify-content-center">
        <div class="col-md-12">
           @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-check"></i> Alert!</h4>
      {{ Session::get('success') }}
    </div>
    
    @endif
    @if(Session::has('error'))
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <!--<h4><i class="icon fa fa-check"></i> Alert!</h4>-->
      {{ Session::get('error') }}
    </div>
    
    @endif
          <form method="POST" action="{{ route('change.password') }}">
            @csrf
            
            
            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>
              <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('passwordOld') ? ' is-invalid' : '' }} custom-form-control" name="passwordOld" required>
                @if ($errors->has('passwordOld'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('passwordOld') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>
              <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} custom-form-control" name="password" required>
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label  text-md-right">{{ __('Confirm Password') }}</label>
              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control custom-form-control" name="password_confirmation" required>
              </div>
            </div>
            <br>
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-outline-secondary custom-btn-connect-sm  mb-2">
                {{ __('Change Password') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
</section>
@endsection