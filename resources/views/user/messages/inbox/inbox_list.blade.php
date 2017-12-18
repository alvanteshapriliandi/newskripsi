@extends('templates.user.messages.layout')
@section('content')

  <div class="">

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <table id="datatable-buttons" class="table table-hover table-responsive">
              <thead>
                  <tr>
                      <th>User Name</th>
                      <th>Subject/Description Message</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th>User Name</th>
                      <th>Subject/Description Message</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Action</th>
                  </tr>
              </tfoot>
              <tbody>
                @foreach($message_in as $m)
                <tr>
                  <td>{{$m->email}}</td>
                  <td>
                    <b>{{$m->subject}}</b> - {{$m->message}}
                  </td>
                  <td>{{ date('F d, Y', strtotime($m->created_at))}}</td>
                  <td>{{ date('H:m:s', strtotime($m->updated_at))}}</td>
                  <td>
                    <a href="{{route('user-inbox.show',['id' => $m->id])}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          

        </div>

      </div>
    </div>
  </div>

@stop