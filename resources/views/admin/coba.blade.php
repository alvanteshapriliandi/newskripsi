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
          <a href="{{url('admin/orderlist')}}">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-check-square-o"></i></div>
                <div class="count">
                  <h1>Order List</h1>
                  <h1>Pending</h1>
                  @if(count($transaction))
                        {{$transaction[0]->total}}
                    @else
                      0
                  @endif
                </div>
              </div>
            </div>
          </a>
          <a href="{{url('admin/orderlist')}}">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-check-square-o"></i></div>
                <div class="count">
                  <h1>Print List</h1>
                  <h1>Pending</h1>
                  @if(count($cetak))
                        {{$cetak[0]->total}}
                    @else
                      0
                  @endif
                </div>
              </div>
            </div>
          </a>
          <a href="{{url('admin/freelance-payment')}}">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-check-square-o"></i></div>
                <div class="count">
                  <h1>Paymant List</h1>
                  <h1>Pending</h1>
                  @if(count($bayar))
                        {{$bayar[0]->total}}
                    @else
                      0
                  @endif
                </div>
              </div>
            </div>
          </a>
          <a href="{{url('admin/report-comment')}}">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-check-square-o"></i></div>
                <div class="count">
                  <h1>Report List</h1>
                  <h1>Comment</h1>
                  @if(count($comment))
                        {{$comment[0]->total}}
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