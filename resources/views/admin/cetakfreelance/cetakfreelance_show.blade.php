@extends('templates.admin.layout')

@section('content')

    <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Status Prtuct <a href="{{route('order.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col col-md-8">                                
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Data User</th>
                                    </tr>
                                    @foreach($print as $do)
                                    <form method="post" action="{{ route('orderlist.update', ['id' => 1]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                        <input name="_method" type="hidden" value="PATCH">
                                        {{ csrf_field() }}
                                    <tr>
                                        <th>Username</th>
                                        <td></td>
                                        <td rowspan="3" style="text-align: center;">
                                            <img src="{{asset('pembayaran/'.$do->images)}}" width="200">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>User Name</th>
                                        <td>{{$do->username}}</td>
                                    </tr>
                                    <tr>
                                        <th>Bank Name</th>
                                        <td>{{$do->name_bank}}</td>
                                    </tr>
                                    <tr>
                                        <th>Ubah Status</th>
                                        <td><input type="checkbox" name="status" value="1"> Sudah dikonfimasi</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="text-align: center;">
                                            <input type="submit" name="btnupdate" value="Update Status" class="btn btn-success">
                                        </td>
                                    </tr>
                                    </form>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="col col-md-12">                                
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <th colspan="2" style="text-align: center;">Data Order List</th>
                                    </tr>
                                    <?php $total = 0;?>
                                    @foreach($cetak_list as $cl)
                                    <tr>
                                        <th>Freelance Name</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Product Name</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Subcategory</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Kuantitas</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Finishing</th>
                                        <td></td>
                                    </tr>
                                    <?php $total += $cl->total; ?>
                                    @endforeach
                                    <tr>
                                        <td colspan="2" style="text-align: center; font-size: 20px;">Total = {{$total}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop