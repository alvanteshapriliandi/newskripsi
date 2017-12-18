@extends('templates.user.messages.layout')
@section('content')

  <div class="">

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><a href="{{route('user-inbox.index')}}" class="btn btn-info btn-xs"> Back </a></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_title">
            <div class="row">
              <div class="col-md-12">
                <p>{{$message_in->username}} - {{$message_in->email}}</p>
                <p>{{$message_in->subject}}</p>
                <p>
                  {{$message_in->message}}
                </p>
              </div>
            </div>
            <form class="form-group" method="POST" action="{{route('user-inbox.store')}}">
              {{ csrf_field() }}
              <table class="table">
                <tr>
                  <td colspan="2">
                    <input type="hidden" name="subject" value="{{$message_in->subject}}">
                    <input type="hidden" name="to_user_id" value="{{$message_in->fr_user_id}}">
                    <textarea class="form-control" style="height: 150px;" name="message"></textarea>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="file" name="file">
                  </td>
                  <td align="right">
                    <button class="btn btn-success"><i class="fa fa-send"></i>send</button>
                  </td>
                </tr>

              </table>
              
              
              
            </form>
          </div>
          

        </div>

      </div>
    </div>
  </div>

@stop