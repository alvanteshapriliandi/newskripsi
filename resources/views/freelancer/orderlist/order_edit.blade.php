@extends('templates.admin.layout')

@section('content')

    <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Status Product <a href="{{route('order-list.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form method="post" action="{{ route('order-list.update', ['id' => $payment->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th>User Name</th>
                                    <td>{{$payment->username}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <select name="status">
                                            <option value="0">Menunggu Konfirmasi</option>
                                            <option value="1">Dalam Proses Pengerjaan</option>
                                            <option value="3">Dalam Proses Pengiriman</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="" value="Update Status"></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
