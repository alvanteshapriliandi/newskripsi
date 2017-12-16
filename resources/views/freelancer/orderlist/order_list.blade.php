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
                                <tr>
                                    <td>{{$pay->username}}</td>
                                        @if($pay->status == 0)
                                            <td>Menunggu Konfirmasi</td>
                                            @elseif($pay->status == 1)
                                                <td>Dalam Proses Pengerjaan</td>
                                            @else
                                                <td>Dalam Proses Pengiriman</td>
                                        @endif
                                    <td>{{ date('F d, Y', strtotime($pay->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($pay->updated_at))}}</td>
                                    <td>
                                        <a href="{{ route('order-list.edit', ['id' => $pay->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                                        <a href="{{ route('order-list.show', ['id' => $pay->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
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
