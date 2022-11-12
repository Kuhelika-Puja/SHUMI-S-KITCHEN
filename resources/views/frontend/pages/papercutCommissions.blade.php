@extends('frontend.layouts.master')
@section('style')
<link rel="stylesheet" href="{{url('frontend/css/lightbox.min.css')}}">
@endsection
@section('page-content')

<section class="gallery section-padding py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center">
				<h3>Papercut Commissions</h3>
				<br>
				 <hr>
				 <br>
				<p>Currently taking bookings for 2021</p> <br>

<p>Papercut commissions by Emily are a great way to capture special moments in life such as: weddings, anniversaries, birthdays, babies, graduations and many more. They can be as personal as you wish with lots of details to mark the occasion. For more information about commissions please visit the customer info page here.</p> <br>

<p>Below you will find a price guide for standard sizes however other sizes can be considered so if you would like a circular design for example then please just ask. These prices are for personal commissions only. If you would like information about commercial commissions please contact by email for details.</p> <br>

<p>A5  (21cm x 15cm - 8.5” x 6”) - <b>£160 (£200 framed)</b></p>
<p>A4  (130cm x 21cm - 1.5” x 8.5”) - <b>£295 (£350 framed)</b></p>
<p>A3  (42cm x 30cm - 16.5 x 11.5”) - <b>£650 (£750 framed)</b></p>
<p>A2  (60cm x 42cm - 23” x 16.5”) - <b>£950 (£1100 framed)</b></p>
<br>
				<a href="{{url('customer-info-wholesale')}}" class="btn btn-secondary custom-btn-connect-sm  mb-2">Read More</a>
				<br>
				<br>
			</div>
		</div>
		<!-- <h3 class="font-weight-regular text-center"></h3> <br><br> -->
		
		
		<div class="row">
			@foreach($illustrations as $data)
			<div class="col-md-4 mt-3">
				<div class="zoom-effect-container">
					<div class="image-card">
						<a class="example-image-link" href="{{url($data->image)}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img  src="{{url($data->image)}}" style='width: 100%;height: auto;object-fit: cover;object-position: center center;' alt='' class='img-responsive'/>
						</a>
					</div>
				</div>
			</div>
			@endforeach
			
			
		</div>
	</div>
</section>
<!--  Awards Section End   -->
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="{{url('frontend/js/lightbox.min.js')}}"></script></script>
@endsection