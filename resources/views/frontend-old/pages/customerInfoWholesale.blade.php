@extends('frontend.layouts.master')
@section('style')
<link rel="stylesheet" href="{{url('frontend/css/lightbox.min.css')}}">
@endsection
@section('page-content')
<section class="gallery section-padding py-5">
	<div class="container">
		<h3 class="text-center">Customer Info</h3> <br><br>
		<div class="row">
			<div class="col-md-3">
				
				<h3>PAPERCUT COMMISSIONS</h3>
				
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-8">
				<p><b>Updated June 2018 - Emily is currently taking orders for march 2019 onwards</b></p> <br>
				<p>When contacting Emily please let her know what your deadline is. Due to the amount of time required for each custom papercut the more notice you give the better.
				In terms of what you can have in a commission: the possibilities are endless. For example: names, dates, family, special places, jobs, careers, education, hobbies, interests, where people live or are from, holidays and any other details you consider important. Emily will work with you and help you gather as much information as is required to create the commission.</p> <br>
				<p>Once the information has been gathered Emily will combine your stories and personal details to create a very sentimental and unique artwork. As Emily doesn’t draw out the designs before she cuts them out, you have to trust her – there will be lots of communication before hand so you will have a good idea what you are ordering. Also, it is a good idea to look through the images on the commission pages on this website to see previous work. If there is anything you particularly like (or don’t) then let Emily know.</p> <br>
				<p>Framing is available but you should consider the postage. It is safer to post artwork unframed. Emily will not post any framed artwork outside of the UK. </p> <br>
				<p>Colour – Have a think about what colour you would like. Darker colours work best as they emphasise the finer details of the papercut but other colours can be considered.</p>
				<br><hr>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-3">
				<h3>DELIVERY COSTS & TIMES</h3>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-8">
				<p>Shop orders are despatched within 1-3 working days.</p>
				<br>
				<p>UK Orders include free postage (Royal Mail second class sign for service) and should arrive within a few days</p>
				<br>
				<p>Shop orders outside the UK take between 5-10 days to arrive depending on where you are and postage is individually priced</p>
				<br><hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<h3>RETURNS</h3>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-8">
				<p>Wholesale enquiries are always welcome. Please get in touch to request details - all of Emily Hogarth’s work is designed by herself and made within the UK.</p>
				
				<br><hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<h3>WHOLESALE</h3>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-8">
				<p>We're very happy to accept returns. Please notify us as soon as possible and return your item in its original condition within 28 days; when we've received your returned items we'll process your refund. Postage costs will not be refunded</p>
				
				<br><hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<h3>OTHER QUERIES</h3>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-8">
				<p>If you have any other questions please email and we will get back to you as soon as possible.
				</p>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-12 text-center">
				<a href="{{url('contact')}}" class="btn btn-secondary custom-btn-connect-sm  mb-2">Contact</a>
			</div>
		</div>
	</div>
</section>
<!--  Awards Section End   -->
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="{{url('frontend/js/lightbox.min.js')}}"></script></script>
@endsection