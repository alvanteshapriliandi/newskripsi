@extends('templates.freelancer.layout')
@section('content')

<div class="">

  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2><a href="{{route('message.index')}}" class="btn btn-info btn-xs"> Back </a></h2>
          <div class="clearfix"></div>
        </div>
          <div class="chat-panel panel panel-default">
            <div class="panel-heading">
              @foreach($orders as $o)
              <i class="fa fa-comments fa-fw"></i> Chat - {{$o->username}}
              @endforeach
            </div>
            <div class="panel-body">
              <div class="row">

                @foreach($messages as $m)
                @if(Auth::user()->id == $m->fr_user_id)
                <div class="col col-md-12">
                  <div class="alert alert-info" role="alert" style="width: auto; float: right;margin-bottom: 5px;">
                    <span style="float: right;">me</span> &nbsp;
                    <span style="float: left;">{{ date('F d, Y', strtotime($m->created_at))}}&nbsp;</span>
                    &nbsp;<span style="float: left;">{{ date('H:m:s', strtotime($m->created_at))}}</span>&nbsp;
                    <br>
                    <b>{{$m->message}}</b>
                    <br>
                    @if($m->images)
                    <img src="{{asset('messages/'.$m->images)}}" width="150" style="margin-bottom: 5px;"><br>
                    @foreach($orders as $o)
                    <button type="submit" class="btn btn-danger">Perubahan ({{$o->ket}})</button>
                    @endforeach
                    <button class="btn btn-success">Setuju</button>
                    @endif
                  </div>
                </div>
                @else
                <div class="col col-md-12">
                  <div class="alert alert-success" role="alert" style="width: auto; float: left;margin-bottom: 5px;">
                    <span style="float: left;">{{$m->username}}</span>&nbsp;&nbsp;
                    <span style="float: right;">{{ date('F d, Y', strtotime($m->created_at))}}</span>&nbsp;
                    <span style="float: right;">{{ date('H:m:s', strtotime($m->created_at))}}</span>
                    <br>
                    <b>{{$m->message}}</b><br>
                    @if($m->images)
                    <img src="{{asset('messages/'.$m->images)}}" width="150" style="margin-bottom: 5px;">
                    @endif
                  </div>
                </div>
                @endif


                @endforeach

              </div>
            </div>
            <!-- /.panel-body -->
            <div class="panel-footer">
              <form method="POST" action="{{ route('message.store') }}" class="input-group" enctype="multipart/form-data" style="width: 100%;">
                {{ csrf_field() }}
                <table class="table-responsive" style="width: 100%;">
                  <tr>
                    <td style="width: 100%;">
                      <input id="btn-input" name="message" type="text" class="form-control" placeholder="Type your message here..." autocomplete="off"/>
                    </td>
                    <td>
                      <span class="input-group-btn">
                        @foreach($orders as $o)
                        <input type="hidden" name="order_id" value="{{$o->id}}"><input type="hidden" name="user_id" value="{{$o->user_id}}">
                        @endforeach

                        <button class="btn btn-warning" id="btn-chat">
                          <i class="fa fa-paper-plane"></i>
                        </button>
                      </span>
                    </td>
                  </tr>
                  <tr style=" margin-top: 10px;">
                    <td><input id="btn-input" type="file" name="images" /></td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
      </div>

    </div>

  </div>
</div>

@stop