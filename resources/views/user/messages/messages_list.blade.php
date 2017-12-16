@extends('templates.freelancer.layout')
@section('content')

  <div class="">

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Messages List <a href="{{route('messages.create')}}" class="btn btn-danger btn-xs"> New </a></h2>
            <div class="clearfix"></div>
          </div>
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
                <tr>
                  <td>bagus@gmail.com</td>
                  <td>
                    <b>Confirmasi desain</b> - Yth, Bapak Bagus Desain anda sudah selasai
                  </td>
                  <td>
                    Desember, 07 2017
                  </td>
                  <td>
                    10.30 PM
                  </td>
                  <td>
                    <a href="{{route('messages.show',['id' => 1])}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          

        </div>

      </div>
    </div>
  </div>

@stop