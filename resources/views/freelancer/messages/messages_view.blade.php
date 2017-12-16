@extends('templates.freelancer.layout')
@section('content')

  <div class="">

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><a href="{{route('messages.index')}}" class="btn btn-info btn-xs"> Back </a></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_title">
            <div class="row">
              <div class="col-md-12">
                <p>Agus - agus@mail.com</p>
                <p>to Bagus</p>
                <p>
                  Yth, Bapak Bagus desain anda sudah selasai. Diharapkan untuk dapat memberikan kometarnya di pesan ini.
                  Terimakasih
                </p>
              </div>
            </div>
            <form class="form-group" method="POST" action="{{route('messages.store')}}">
              {{ csrf_field() }}
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
              
              
              
            </form>
          </div>
          

        </div>

      </div>
    </div>
  </div>

@stop