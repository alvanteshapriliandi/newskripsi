@extends('templates.admin.layout')

@section('content')

    <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Status Product <a href="{{route('products.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form method="post" action="{{ route('products.update', ['id' => $product->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <!-- <thead>
                                <tr>
                                    <th>Name Product</th>
                                    <th>Sub Category</th>
                                    <th>Harga Awal</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name Product</th>
                                    <th>Sub Category</th>
                                    <th>Harga Awal</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot> -->
                            <tbody>
                                <tr>
                                    <th>Name freelancer</th>
                                    <td>{{$product->username}}</td>
                                </tr>
                                <tr>
                                    <th>Name Product</th>
                                    <td>{{ $product->jdl_Pdk }}</td>
                                </tr>
                                <tr>
                                    <th>Subcategory</th>
                                    <td>{{ $product->name}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ $product->description}}</td>
                                </tr>
                                <tr>
                                    <th>Images</th>
                                    <td>
                                        <img src="{{ asset('/uploads/'.$product->images)}}" width="200">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <select name="status">
                                            <option value="0">Pending</option>
                                            <option value="1">Accepted</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{ date('F d, Y', strtotime($product->created_at))}}</td>
                                </tr>
                                <tr>
                                    <th>Time</th>
                                    <td>{{ date('H:m:s', strtotime($product->updated_at))}}</td>
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
