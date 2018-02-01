@extends('templates.admin.layout')

@section('content')

  <div class="x_content">
  	<div class="bs-example" data-example-id="simple-jumbotron">
	    <div class="row top_tiles">
          <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-check-square-o"></i></div>
              <div class="count">
                <h1>Total</h1>
              	<h1>Users</h1>
              	@if(count($user))
                  		{{$user[0]->total}}
	              	@else
	              		0
              	@endif
              </div>
            </div>
          </div>
          <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-check-square-o"></i></div>
              <div class="count">
              	<h1>Total</h1>
                <h1>Freelances</h1>
              	@if(count($freelance))
                  		{{$freelance[0]->total}}
	              	@else
	              		0
              	@endif
              </div>
            </div>
          </div>
          <a href="{{url('admin/products')}}">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-check-square-o"></i></div>
                <div class="count">
                	<h1>Product</h1>
                  <h1>Pending</h1>
                	@if(count($product))
                    		{{$product[0]->total}}
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
