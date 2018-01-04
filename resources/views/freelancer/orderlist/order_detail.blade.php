@extends('templates.freelancer.layout')

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
                    <form method="post" action="" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}
                        <div class="row">
                            <div class="col col-md-8">
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Data User</th>
                                        </tr>
                                        @foreach($payment as $pay)
                                        <tr>
                                            <th>Name User</th>
                                            <td>{{$pay->username}}</td>
                                            <td rowspan="3">
                                                <img src="{{asset('images/flat-faces-icons-circle-3.png')}}" width="100">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{$pay->email}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col col-md-12">
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th colspan="2" style="text-align: center;color: orange;">Order List</th>
                                        </tr>
                                        @foreach($banner as $ban)
                                        <tr>
                                            <th>Product Name</th>
                                            <td>{{$ban->jdl_Pdk}}</td>
                                        </tr>
                                        <tr>
                                            <th>Sub-category Name</th>
                                            <td>{{$ban->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Images Product</th>
                                            <td><img src="{{asset('uploads/'.$ban->images)}}"></td>
                                        </tr>
                                        <tr>
                                            <th>Description Product Order</th>
                                            <td>{{$ban->BN_description}}</td>
                                        </tr>
                                        <tr>
                                            <th>Images Order</th>
                                            <td><img src="{{asset('orders/'.$ban->BN_images)}}"></td>
                                        </tr>
                                        <tr>
                                            <th>Ukuran Product Order</th>
                                            <td>{{$ban->BN_ukuran}}</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Product Order</th>
                                            <td>{{$ban->BN_jenis}}</td>
                                        </tr>
                                        <tr></tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
