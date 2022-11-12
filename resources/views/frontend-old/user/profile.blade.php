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
<section class="">
  <div class="row">
    @include('frontend.user.sidebar')
    <div class="col-md-8 mt-4">
      @include('frontend.user.message')
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="{{route('profile.update')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="">First Name</label>
              <input type="text" class="form-control custom-form-control" name="f_name" value="{{$profile->f_name}}">
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input type="text" class="form-control custom-form-control" name="l_name" value="{{$profile->l_name}}">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control custom-form-control" name="email" value="{{$profile->email}}" disabled>
            </div>
            <div class="form-group">
              <input type="submit" value="Update Profile" class="btn btn-outline-secondary custom-btn-connect-sm  mb-2">
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
</section>
@endsection