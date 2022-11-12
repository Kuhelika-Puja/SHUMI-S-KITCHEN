@extends('frontend.layouts.master')
@section('page-title',' | Home')
@section('style')
<style>
  .custom-image-4{
    margin-top: -225px;
  }
  .custom-image-6{
    margin-top: -118px;
  }
  .single-image{
    text-align: center;
    
  }
</style>
@endsection
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

{{-- @php
$password = '12345678';
$hashedPassword = Hash::make($password);
echo $hashedPassword; 
@endphp --}}
<section class="second-section  second-section-bg-wave lazy">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9 text-center">
        @foreach ($homepage as $data)
        <div class="making-magical">
          @if($data->status == 1)
          <h3>{{ $data->heading }}</h3>
          <p>{{ $data->content }} <a href="mailto:anaznin@yahoo.com">Hear from you</a>.</p>
          @endif
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>



{{-- <section class="gallery">
  <div class="container">
    <div class="row">
      @foreach ($homeimages as $key=> $homeimage)
      <div class="col-md-4">
        <a href="{{ $homeimage->link }}" target="blank">
          <div class="single-image">
            <img src="{{url($homeimage->image)}}" class="img-fluid py-3 custom-image-{{ $key+1 }}" alt="" style="width: 100%;">
            <div class="overly">
              <p class="mp-0 text-center">{{ $homeimage->name }}</p>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section> --}}

<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        @foreach ($img1 as $item)
          <div class="single-image">
            @if($item->position == 1)
            <img src="{{ url($item->image) }}" alt="{{ $item->name }}" class="img-fluid py-3">
            <a href="{{ $item->link }}" target="blank">
              <div class="overly">
                <p class="mp-0 text-center">{{ $item->name }}</p>
              </div>
            </a>
            @endif
          </div>
        @endforeach

        @foreach ($img4 as $item)
          <div class="single-image">
            @if($item->position == 4)
            <img src="{{ url($item->image) }}" alt="{{ $item->name }}" class="img-fluid py-3">
            <a href="{{ $item->link }}" target="blank">
              <div class="overly">
                <p class="mp-0 text-center">{{ $item->name }}</p>
              </div>
            </a>
            @endif
          </div>
        @endforeach
      </div>
      
      <div class="col-sm-4">
        @foreach ($img2 as $item)
          <div class="single-image">
            @if($item->position == 2)
            <img src="{{ url($item->image) }}" alt="{{ $item->name }}" class="img-fluid py-3">
            <a href="{{ $item->link }}" target="blank">
              <div class="overly">
                <p class="mp-0 text-center">{{ $item->name }}</p>
              </div>
            </a>
            @endif
          </div>
        @endforeach
        @foreach ($img5 as $item)
          <div class="single-image">
            @if($item->position == 5)
            <img src="{{ url($item->image) }}" alt="{{ $item->name }}" class="img-fluid py-3">
            <a href="{{ $item->link }}" target="blank">
              <div class="overly">
                <p class="mp-0 text-center">{{ $item->name }}</p>
              </div>
            </a>
            @endif
          </div>
        @endforeach
      </div>
      
      <div class="col-sm-4">
        @foreach ($img3 as $item)
          <div class="single-image">
            @if($item->position == 3)
            <img src="{{ url($item->image) }}" alt="{{ $item->name }}" class="img-fluid py-3">
            <a href="{{ $item->link }}" target="blank">
              <div class="overly">
                <p class="mp-0 text-center">{{ $item->name }}</p>
              </div>
            </a>
            @endif
          </div>
        @endforeach

        @foreach ($img6 as $item)
          <div class="single-image">
            @if($item->position == 6)
            <img src="{{ url($item->image) }}" alt="{{ $item->name }}" class="img-fluid py-3">
            <a href="{{ $item->link }}" target="blank">
              <div class="overly">
                <p class="mp-0 text-center">{{ $item->name }}</p>
              </div>
            </a>
            @endif
          </div>
        @endforeach
      </div>
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