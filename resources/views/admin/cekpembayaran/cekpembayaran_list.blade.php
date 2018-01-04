@extends('templates.admin.layout')

@section('content')


	<div class="">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Cek Pembayaran</h2>
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
                            	@foreach($pay as $p)
                                <tr>
                                    <td>{{$p->username}}</td>
                                    @if($p->status == 0)
                                        <td>Menunggu Konfirmasi Pembayaran</td>
                                        @else
                                            <td>Konfirmasi Sudah Dilakukan</td>
                                    @endif
                                    <th>{{ date('F d, Y', strtotime($p->updated_at))}}</th>
                                	<th>{{ date('H:m:s', strtotime($p->updated_at))}}</th>
                                    <td>
                                        <a href="{{ route('cekpembayaran.edit', ['id' => $p->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
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