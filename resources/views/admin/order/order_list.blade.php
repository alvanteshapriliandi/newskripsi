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
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($transaction as $t)
                                <tr>
                                    <td>{{$t->username}}</td>
                                    @if($t->status_transaksi == 0)
                                        <td>Order Pending</td>
                                        @elseif($t->status_transaksi == 1)
                                        <td>Disetujui</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($t->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($t->created_at))}}</td>
                                    <td>
                                        <a href="{{route('orderlist.edit', ['id' => $t->id])}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
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
