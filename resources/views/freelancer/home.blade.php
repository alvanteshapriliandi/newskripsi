@extends('templates.freelancer.layout')

@section('content')
<?php 
	$id = Auth::user()->id;
	$product = DB::select('SELECT COUNT(p.id) total FROM products p where p.freelancer_id = '.$id);
	$order = DB::select('SELECT COUNT(o.id) total FROM orders o join products p on p.id = o.product_id where p.freelancer_id = '.$id);
?>
<div class="x_content">
	<div class="bs-example" data-example-id="simple-jumbotron">
		<div class="row top_tiles">
			<a href="{{url('freelance/product')}}">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-check-square-o"></i></div>
						<div class="count">
							<h1>Post Product</h1>
							@if(count($product))
		                  		{{$product[0]->total}}
		                  	@else
		                  		0
		                  	@endif
						</div>
					</div>
				</div>
			</a>
			<a href="{{url('freelance/order')}}">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-check-square-o"></i></div>
						<div class="count">
							<h1>Order List</h1>
							@if(count($order))
		                  		{{$order[0]->total}}
		                  	@else
		                  		0
		                  	@endif
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

@stop
