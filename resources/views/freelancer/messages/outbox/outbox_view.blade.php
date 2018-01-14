@extends('templates.freelancer.layout')
@section('content')

  <div class="">

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><a href="{{route('outbox.index')}}" class="btn btn-info btn-xs"> Back </a></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_title">
            <div class="row">
              <div class="col-md-12">
                <p>to {{$message_out->username}} - {{$message_out->email}}</p>
                <p>Subject :{{$message_out->subject}}</p>
                <p>
                  {{$message_out->message}}
                </p>
                @if($message_out->images)
                <p>
                  <img src="{{asset('messages/'.$message_out->images)}}"><br>
                  <input type="submit" name="" value="perubahan">
                  <input type="submit" name="" value="setuju">
                </p>
                @endif
              </div>
            </div>
          </div>
          

        </div>

      </div>
    </div>
  </div>

@stop