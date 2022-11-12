@extends('frontend.layouts.master')
@section('page-title',' | Invoice')
@section('page-content')
<section class="blog pb-4" style="background: #eee;">
	<div class="container-fluid">
		
		
		<div id="invoice">
			<div class="toolbar hidden-print">
				<div class="text-right">
					<button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
				</div>
				<hr>
			</div>
			<div class="invoice overflow-auto">
				<div style="min-width: 600px">
					<header>
						<div class="row">
							<div class="col">
								<a target="_blank" href="#">
									<img src="{{url('frontend/logo/logo.png')}}" style="height: 50px;" data-holder-rendered="true" />
								</a>
							</div>
							<div class="col company-details">
								<h2 class="name">
							
									Rene BD
							
								</h2>
								<div>Office address: Road-3, House-5, Dhanmondi-1209 <br>
 Factory address:MuslimNagar, konapara, Demra, Dhaka</div>
								<div>(+880) 1990599829</div>
								<div>sanjana@renebd.com, naimul@renebd.com</div>
							</div>
						</div>
					</header>
					<main>
						<div class="row contacts">
							<div class="col invoice-to">
								<div class="text-gray-light">INVOICE TO:</div>
								<h2 class="to">{{$invoice->name}}</h2>
								<div class="address">{{$invoice->address}}</div>
								<div class="email"><a href="mailto:john@example.com">{{$invoice->email}}</a></div>
								<div class="email"><a href="mailto:john@example.com">{{$invoice->phone}}</a></div>
							</div>
							<div class="col invoice-details">
								<h1 class="invoice-id">INVOICE  {{$invoice->invoice_id}}</h1>
								<div class="date">Date of Invoice: {{$invoice->created_at}}</div>
								
							</div>
						</div>
						<table border="0" cellspacing="0" cellpadding="0">
							<thead>
								<tr>
									<th>#</th>
									<th class="text-left">Product Name</th>
									<th class="text-right">Price</th>
									<th class="text-right">Quentity</th>
									<th class="text-right">TOTAL</th>
								</tr>
							</thead>
							<tbody>
								
								
								<tr>
									<td>01</td>
									<td class="text-left">{{$invoice->products->name}}</td>
									<td class="unit">{{$invoice->products->price}} {{$invoice->products->currency}}</td>
									<td class="qty">{{$invoice->quentity}} </td>
									<td class="total"><?php echo $invoice->products->price*$invoice->quentity;?> {{$invoice->products->currency}}</td>
								</tr>
				
							</tbody>
							<tfoot>
							<tr>
								<td colspan="2"></td>
								<td colspan="2">SUBTOTAL</td>
								<td><?php echo $invoice->products->price*$invoice->quentity;?> {{$invoice->products->currency}}</td>
							</tr>
							<tr>
								<td colspan="2"></td>
								<td colspan="2">Shipping</td>
								<td>
									<?php
										$shipping = DB::table('service_charges')->where('id',$invoice->location)->first();
										echo $shipping->price;
									?>
									{{$invoice->products->currency}}
								</td>
							</tr>
							<tr>
								<td colspan="2"></td>
								<td colspan="2">GRAND TOTAL</td>
								<td><?php  echo $invoice->products->price*$invoice->quentity + $shipping->price;?> {{$invoice->products->currency}}</td>
							</tr>
							</tfoot>
						</table>
						<div class="thanks">Thank you!</div>
						<div class="notices">
							<div>NOTICE:</div>
							<div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
						</div>
					</main>
					<footer>
						Invoice was created on a computer and is valid without the signature and seal.
					</footer>
				</div>
				<!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
				<div></div>
			</div>
		</div>
		
		
	</div>
</div>
</section>
@endsection
@section('scripts')
<script>
	 $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
</script>
@endsection