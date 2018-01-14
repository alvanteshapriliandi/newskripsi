@extends('templates.admin.layout')

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
                                <th>Freelance Name</th>
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
                                <th>Freelance Name</th>
                                <th>Product Name</th>
                                <th>Sub Category</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($cetak as $c)
                            <tr>
                                <th>{{$c->username}}</th>
                                <td>{{$c->jdl_Pdk}}</td>
                                <td>{{$c->name}}</td>
                                @if($c->status_cetak == 0)
                                    <td>Pesanan Belum Dicetak</td>
                                    @elseif($c->status_cetak == 1)
                                        <td>Menunggu Konfimasi Cetak</td>
                                    @elseif($c->status_cetak == 2)
                                        <td>Diterima</td>
                                @endif
                                <td>{{ date('F d, Y', strtotime($c->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($c->updated_at))}}</td>
                                <td>
                                    <a href="{{route('cetak-freelance.show', ['id' => $c->id])}}" class="btn btn-info">
                                        <i class="fa fa-print"></i>
                                    </a>
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
