@extends('templates.freelancer.layout')

@section('content')
<?php 
	$id = Auth::user()->id;
	$product = DB::select('SELECT COUNT(p.id) total FROM products p where p.freelancer_id = '.$id);
	$order = DB::select('SELECT COUNT(o.id) total, t.status_transaksi FROM orders o join products p on p.id = o.product_id join transaction t on t.id = o.transaction_id where p.freelancer_id = '.$id.' GROUP BY t.status_transaksi');
	$bayar = DB::select('SELECT COUNT(o.id) total FROM orders o join products p on p.id = o.product_id where o.status = 4 and p.freelancer_id = '.$id);
	$cetak = DB::select('SELECT COUNT(c.id) total FROM cetaks c join orders o on o.id = c.order_id join products p on p.id = o.product_id and  p.freelancer_id = '.$id );
?>
	<div class="row">
	    <div class="col col-md-4">
	      <div class="panel panel-default" style="background: #dc3545; border-radius: 15px;">
	        <div class="panel-body" style="color: white;">
	          <h3>Product Pending
	            <span class="badge" style="float: right; background: white; color: #dc3545; font-size: 30px;">
	              @if(count($product))
	                    {{$product[0]->total}}
	                @else
	                  0
	              @endif
	            </span>
	          </h3>
	        </div>
	        <a href="{{url('admin/products')}}">
	          <div class="panel-footer" style="background: #EEEEEE;">
	            View Detail 
	            <span class="badge" style="float: right; background: white; color: #007bff;">
	              <i class="fa fa-angle-right"></i>
	            </span>
	          </div>
	        </a>
	      </div>
	    </div>
	    <div class="col col-md-4">
	      <div class="panel panel-default" style="background: #ffc107; border-radius: 15px;">
	        <div class="panel-body" style="color: white;">
	          <h3>Massages List
	            <span class="badge" style="float: right; background: white; color: #dc3545; font-size: 30px;">
	              @if(count($order))
	                    {{$order[0]->total}}
	                @else
	                  0
	              @endif
	            </span>
	          </h3>
	        </div>
	        <a href="{{url('freelance/message')}}">
	          <div class="panel-footer" style="background: #EEEEEE;">
	            View Detail 
	            <span class="badge" style="float: right; background: white; color: #007bff;">
	              <i class="fa fa-angle-right"></i>
	            </span>
	          </div>
	        </a>
	      </div>
	    </div>
	    <div class="col col-md-4">
	      <div class="panel panel-default" style="background: #4E342E; border-radius: 15px;">
	        <div class="panel-body" style="color: white;">
	          <h3>Print list
	            <span class="badge" style="float: right; background: white; color: #4E342E; font-size: 30px;">
	              @if(count($cetak))
	                    {{$cetak[0]->total}}
	                @else
	                  0
	              @endif
	            </span>
	          </h3>
	        </div>
	        <a href="{{url('/freelance/cetak')}}">
	          <div class="panel-footer" style="background: #EEEEEE;">
	            View Detail 
	            <span class="badge" style="float: right; background: white; color: #007bff;">
	              <i class="fa fa-angle-right"></i>
	            </span>
	          </div>
	        </a>
	      </div>
	    </div>
	    <div class="col col-md-6">
	      <div class="panel panel-default" style="background: #28a745; border-radius: 15px;">
	        <div class="panel-body" style="color: white;">
	          <h3>Orderlist Pending
	            <span class="badge" style="float: right; background: white; color: #28a745; font-size: 30px;">
          			@if(count($order))
		                {{$order[0]->total}}
		                @else
		                  0
		            @endif
	            </span>
	          </h3>
	        </div>
	        <a href="{{url('admin/orderlist')}}">
	          <div class="panel-footer" style="background: #EEEEEE;">
	            View Detail 
	            <span class="badge" style="float: right; background: white; color: #007bff;">
	              <i class="fa fa-angle-right"></i>
	            </span>
	          </div>
	        </a>
	      </div>
	    </div>
	    <div class="col col-md-6">
	      <div class="panel panel-default" style="background: #8E24AA; border-radius: 15px;">
	        <div class="panel-body" style="color: white;">
	          <h3>Paymentlist Pending
	            <span class="badge" style="float: right; background: white; color: #8E24AA; font-size: 30px;">
	              @if(count($bayar))
	                    {{$bayar[0]->total}}
	                @else
	                  0
	              @endif
	            </span>
	          </h3>
	        </div>
	        <a href="{{url('freelance/report')}}">
	          <div class="panel-footer" style="background: #EEEEEE;">
	            View Detail 
	            <span class="badge" style="float: right; background: white; color: #007bff;">
	              <i class="fa fa-angle-right"></i>
	            </span>
	          </div>
	        </a>
	      </div>
	    </div>
	</div>

@stop
