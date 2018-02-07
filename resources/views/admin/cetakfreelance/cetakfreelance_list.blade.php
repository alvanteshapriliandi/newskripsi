@extends('templates.admin.layout')

@section('content')

	<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Print List</h2>
                    <div class="clearfix"></div>
                </div>
                <div>
                    <table id="datatable-buttons" class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>username</th>
                                <th>Product Name</th>
                                <th>Sub Category</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>username</th>
                                <th>Product Name</th>
                                <th>Sub Category</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($print as $c)
                            <tr>
                                <td>{{$c->username}}</td>
                                <td>{{$c->jdl_Pdk}}</td>
                                <td>{{$c->name}}</td>
                                @if($c->status == 0)
                                    <td>Menunggu Konfimasi</td>
                                    @else
                                        <td>Dalam Proses Pencetakan</td>
                                @endif
                                <td>{{ date('F d, Y', strtotime($c->created_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($c->created_at))}}</td>
                                <td>
                                    <a href="{{route('cetakpesanan.edit', ['id'=>$c->id])}}" class="btn btn-success"><i class="fa fa-pencil"></i></a>
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
