@extends('templates.freelancer.layout')
@section('content')

  <div class="">

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Messages List</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_title">
            <table id="datatable-buttons" class="table table-hover table-responsive">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Product Name</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Username</th>
                  <th>Product Name</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach($order_message as $om)
                @if($om->status == 0)
                  @else
                  <tr>
                    <td>{{$om->username}}</td>
                    <td>{{$om->jdl_Pdk}}</td>
                    <td>{{ date('F d, Y', strtotime($om->created_at))}}</td>
                    <td>{{ date('H:m:s', strtotime($om->created_at))}}</td>
                    <td>
                      <a href="{{route('message.show',['id'=>$om->id])}}" class="btn btn-success">Komunikasi</a>
                    </td>
                  </tr>
                @endif
                @endforeach
              </tbody>
            </table>
          </div>
          

        </div>

      </div>
    </div>
  </div>

@stop