@extends('frontend.layouts.master')
@section('page-title',' | Home')
@section('page-content')
<section class="second-section">
  <div class="container">
    
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="owl-carousel owl-theme" id="owl-one">
          @foreach($testimonials as $testimonial)
          <div class="slider-item" style="height: calc(95vh - 199px);">
            <img src="{{url($testimonial->image)}}" class="card-img-top img-fluid" alt="..." style="align-self:center;object-position: center;object-fit: cover;background: #fff;padding: 10px;height: 500px;width: 100%;">
            
          </div>
          @endforeach
          
        </div>
      </div>
    </div>
  </div>
</section>
<section class="second-section  second-section-bg-wave lazy">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        @foreach ($homepage as $data)
        <div class="making-magical">
          <h3>{{ $data->heading }}</h3>
          <p>{{ $data->content }} <a href="mailto:sanjanazamanadi@gmail.com">hear from you</a>.</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<section class="gallery">
  <div class="container">
    <div class="row">
      @foreach ($homeimages as $homeimage)
      <div class="col-md-4">
        <a href="">
          <div class="single-image">
            <img src="{{url($homeimage->image)}}" class="img-fluid py-3 " alt="" style="width: 100%;">
            <div class="overly">
              <p class="mp-0">{{ $homeimage->name }}</p>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
@section('scripts')
<script>
jQuery(".description").text(function (i, text) {
return text.length > 100 ? text.substr(0, text.lastIndexOf(' ', 70)) + '...' : text;
});
jQuery(".titlecount").text(function (i, text) {
return text.length > 40 ? text.substr(0, text.lastIndexOf(' ', 35)) + '...' : text;
});
jQuery(".pathfinderquestion").text(function (i, text) {
return text.length > 100 ? text.substr(0, text.lastIndexOf(' ', 50)) + '...' : text;
});
</script>
<script>
$('#owl-one').owlCarousel({
items:4,
loop:true,
margin:10,
autoplay:true,
autoplayTimeout:3000,
nav:false,
navText:["<i class='fas fa-chevron-left arrow-left'></i>","<i class='fas fa-chevron-right arrow-right'></i>"],
responsive:{
0:{
items:1
},
600:{
items:1
},
1000:{
items:1
}
}
});
</script>
<script>
$(document).ready(function(){
$('#question').click(function(){
var comment = $('#comment').val();
var email = $('#email').val();
if(comment != '' && email != ''){
$.ajax({
url: "{{url('pathfinderstore')}}",
type: "POST",
data: {
_token: $("#csrf").val(),
type: 1,
email: email,
comment: comment,
},
cache: false,
success: function(dataResult){
console.log(dataResult);
$('#pathfindermsg').text(dataResult);
}
});
}else{
alert('Fill all fields');
}
})
});
</script>
@endsection