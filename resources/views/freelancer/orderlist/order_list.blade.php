@extends('templates.freelancer.layout')

@section('content')

	<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Order List</h2>
                    <div class="clearfix"></div>
                </div>
                <div>
                    <table id="datatable-buttons" class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>User Name</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($orderlist as $t)
                            @if($t->status_transaksi == 1)
                                <tr>
                                    <th>{{$t->username}}</th>
                                    @if($t->status == 0)
                                        <td>Menunggu Konfirmasi</td>
                                        @elseif($t->status == 1)
                                            <td>Dalam Proses Pengerjaan</td>
                                        @elseif($t->status == 2)
                                            <td>Dalam Proses Pengeriman</td>
                                        @elseif($t->status == 3)
                                            <td>Barang Sudah Diterima</td>
                                        @elseif($t->status == 4)
                                            <td>Barang Sudah Diterima</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($t->updated_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($t->updated_at))}}</td>
                                    <td>
                                        <a href="{{route('order.edit', ['id' => $t->id])}}" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('order.show', ['id' => $t->id])}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
