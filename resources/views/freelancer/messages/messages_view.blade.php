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
            <form class="form-group" method="POST" action="{{route('message.store')}}">
              {{ csrf_field() }}
              <!-- <div style="clear: both;">
                <table class="table">
                  <tr>
                    <td colspan="2">
                      <textarea class="form-control" style="height: 150px;"></textarea>
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
              </div> -->
              <!-- /.panel -->
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            @foreach($orders as $o)
                            <i class="fa fa-comments fa-fw"></i> Chat - {{$o->username}}
                            @endforeach
                            <!-- <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i> Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <div class="row">

                            @foreach($message_in as $mi)
                            <div class="col col-md-12">
                              <div class="alert alert-success" role="alert" style="width: auto; float: left;margin-bottom: 5px;">
                                <span style="float: right;">{{$mi->username}}</span> <br>
                                <b>{{$mi->message}}</b>
                              </div>
                            </div>
                            @endforeach

                            @foreach($message_out as $mo)
                            <div class="col col-md-12">
                              <div class="alert alert-info" role="alert" style="width: auto; float: right;margin-bottom: 5px;">
                                <span style="float: right;">me</span> <br>
                                <b>{{$mo->message}}</b><br>
                                @if($mo->images)
                                  <img src="{{asset('messages/'.$mo->images)}}" width="150" style="margin-bottom: 5px;"><br>
                                  @foreach($orders as $o)
                                    <span class="btn btn-danger">Perubahan ({{$o->ket}})</span>
                                  @endforeach
                                  <button class="btn btn-success">Setuju</button>
                                @endif
                              </div>
                            </div>
                            @endforeach

                          </div>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                          <form method="POST" action="{{ route('message.store') }}" class="input-group" enctype="multipart/form-data">
                            <table class="table-responsive">
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
                          
                            <!-- <div class="input-group">
                                <input id="btn-input" type="text" class="form-control" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning" id="btn-chat">
                                        <i class="fa fa-paper-plane"></i>
                                    </button>
                                </span>
                            </div>
                        </div> -->
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
            </form>
          </div>
          

        </div>

      </div>
    </div>
  </div>

@stop