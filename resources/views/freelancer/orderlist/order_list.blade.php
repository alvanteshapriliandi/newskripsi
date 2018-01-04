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
                                <th>Staus</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($payment as $pay)
                                @if($pay->status == 0)
                                @else
                                <tr>
                                    <td>{{$pay->username}}</td>
                                    @if($pay->status == 1)
                                        <td>Menunggu Konfirmasi</td>
                                        @elseif($pay->status == 2)
                                            <td>Dalam Proses Pngerjaan</td>
                                        @elseif($pay->status == 3)
                                            <td>Dalam Proses Pengeriman</td>
                                        @else
                                            <td>Barang Sudah Diterima</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($pay->updated_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($pay->updated_at))}}</td>
                                    <td>
                                    @if($pay->status == 4)  
                                        <button disabled="true" class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                        <button disabled="true" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                        @else
                                        <a href="{{route('order-list.edit',['id'=>$pay->id])}}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('order-list.show',['id'=>$pay->id])}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    @endif
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
