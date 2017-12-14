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
                                <th>Name Product</th>
                                <th>Sub Category</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>User Name</th>
                                <th>Name Product</th>
                                <th>Sub Category</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($amplop as $a)
                            @if($a->OF_status == 0)
                                @elseif($a->OF_status == 1)
                                    <tr>
                                        <td>{{$a->username}}</td>
                                        <td>{{$a->jdl_Pdk}}</td>
                                        <td>{{$a->name}}</td>
                                        
                                        <td>{{ date('F d, Y', strtotime($a->created_at))}}</td>
                                        <td>{{ date('H:m:s', strtotime($a->updated_at))}}</td>
                                        <td>
                                            <a href="" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                                            <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
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
