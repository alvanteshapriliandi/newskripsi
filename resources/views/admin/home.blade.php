@extends('templates.admin.layout')

@section('content')

  <div class="row">
    <div class="col col-md-3">
      <div class="panel panel-default" style="background: #007bff; border-radius: 15px;">
        <div class="panel-body" style="color: white;">
          <h3>Total User
            <span class="badge" style="float: right; background: white; color: #007bff; font-size: 30px;">
              @if(count($user))
                    {{$user[0]->total}}
                @else
                  0
              @endif
            </span>
          </h3>
        </div>
        <a href="{{url('/admin/userlist')}}">
          <div class="panel-footer" style="background: #EEEEEE;">
            View Detail 
            <span class="badge" style="float: right; background: white; color: #007bff;">
              <i class="fa fa-angle-right"></i>
            </span>
          </div>
        </a>
      </div>
    </div>
    <div class="col col-md-3">
      <div class="panel panel-default" style="background: #ffc107; border-radius: 15px;">
        <div class="panel-body" style="color: white;">
          <h3>Total Freelancer
            <span class="badge" style="float: right; background: white; color: #ffc107; font-size: 30px;">
              @if(count($freelance))
                    {{$freelance[0]->total}}
                @else
                  0
              @endif
            </span>
          </h3>
        </div>
        <a href="{{url('admin/freelancelist')}}">
          <div class="panel-footer" style="background: #EEEEEE;">
            View Detail 
            <span class="badge" style="float: right; background: white; color: #007bff;">
              <i class="fa fa-angle-right"></i>
            </span>
          </div>
        </a>
      </div>
    </div>
    <div class="col col-md-3">
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
    <div class="col col-md-3">
      <div class="panel panel-default" style="background: #28a745; border-radius: 15px;">
        <div class="panel-body" style="color: white;">
          <h3>Orderlist Pending
            <span class="badge" style="float: right; background: white; color: #28a745; font-size: 30px;">
              @if(count($transaction))
                    {{$transaction[0]->total}}
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
    <div class="col col-md-4">
      <div class="panel panel-default" style="background: #E91E63; border-radius: 15px;">
        <div class="panel-body" style="color: white;">
          <h3>Printlist Pending
            <span class="badge" style="float: right; background: white; color: #E91E63; font-size: 30px;">
              @if(count($cetak))
                    {{$cetak[0]->total}}
                @else
                  0
              @endif
            </span>
          </h3>
        </div>
        <a href="{{url('admin/cetakpesanan')}}">
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
        <a href="{{url('admin/freelance-payment')}}">
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
          <h3>Reportlist Comment
            <span class="badge" style="float: right; background: white; color: #4E342E; font-size: 30px;">
              @if(count($comment))
                    {{$comment[0]->total}}
                @else
                  0
              @endif
            </span>
          </h3>
        </div>
        <a href="{{url('admin/report-comment')}}">
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
