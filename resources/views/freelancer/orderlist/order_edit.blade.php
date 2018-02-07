@extends('templates.freelancer.layout')

@section('content')

    <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Status Order <a href="{{route('order.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                @foreach($orderlist as $t)
                <div class="x_content">
                    <form method="post" action="{{ route('order.update', ['id' => $t->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <td colspan="2"> Ubah setatus order</td>
                                </tr>
                                <tr>
                                    <th>User Name</th>
                                    <td>{{$t->username}}</td>
                                </tr>
                                
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if($t->status == 0)
                                            <input type="checkbox" name="status" value="1"> Dalam Proses Pengerjaan
                                            @elseif($t->status == 1)
                                                Dalam Proses Pengerjaan
                                            @elseif($t->status == 2)
                                                Dalam Proses Pengeriman
                                            @elseif($t->status == 3)
                                                Barang Sudah Diterima
                                            @else
                                                Pembayaran Telah selesai
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        @if($t->status == 0)
                                            <input type="submit" name="" value="Update Status" class="btn btn-success">
                                            @else
                                            <input type="submit" disabled="true" name="" value="Update Status" class="btn btn-success">
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@stop
