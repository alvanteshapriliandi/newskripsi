@extends('templates.freelancer.layout')

@section('content')

	<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Product <a href="{{route('product.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create New </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div>
                    <table id="datatable-buttons" class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Name Product</th>
                                <th>Sub Category</th>
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
                                <th>Status</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        @foreach($product as $p)
                        <tbody>
                            <tr>
                                <td>{{ $p->jdl_Pdk }}</td>
                                <td>{{ $p->name}}</td>
                                @if($p->status == 0)
                                    <td>Pending</td>
                                    @else
                                        <td>Accepted</td>

                                @endif

                                <td>{{ date('F d, Y', strtotime($p->created_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($p->updated_at))}}</td>
                                <td>
                                    <a href="{{ route('product.edit', ['id' => $p->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                                    <a href="{{ route('product.show', ['id' => $p->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
