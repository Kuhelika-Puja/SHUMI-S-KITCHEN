@extends('frontend.layouts.master')
@section('style')
<link rel="stylesheet" href="{{url('frontend/css/lightbox.min.css')}}">
@endsection
@section('page-content')

<section class="gallery section-padding py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3>Illustration Work</h3>
				<br>
				<a href="{{url('contact')}}" class="btn btn-secondary custom-btn-connect-sm  mb-2">Contact</a>
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