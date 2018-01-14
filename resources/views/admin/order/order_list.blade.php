@extends('templates.admin.layout')

@section('content')

    <div class="">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Status Order</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Name Product</th>
                                    <th>Subcategory</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Username</th>
                                    <th>Name Product</th>
                                    <th>Subcategory</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($order as $o)
                                <tr>
                                    <td>{{$o->username}}</td>
                                    <td>{{$o->jdl_Pdk}}</td>
                                    <td>{{$o->name}}</td>
                                    @if($o->status == 0)
                                        <td>Belum ada Transaksi</td>
                                        @else
                                        <td>Sudah ada Transaksi</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($o->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($o->created_at))}}</td>
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
