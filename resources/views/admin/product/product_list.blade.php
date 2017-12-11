@extends('templates.admin.layout')

@section('content')

    <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Status Product</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name Freelancer</th>
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
                                <th>Name Freelancer</th>
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
                                <td>{{ $p->username}}</td>
                                <th>{{ $p->jdl_Pdk }}</th>
                                <th>{{ $p->name}}</th>
                                @if($p->status == 0)
                                    <th>Pending</th>
                                    @else
                                        <th>Accepted</th>

                                @endif

                                <th>{{ date('F d, Y', strtotime($p->created_at))}}</th>
                                <th>{{ date('H:m:s', strtotime($p->updated_at))}}</th>
                                <td>
                                    <a href="{{ route('products.edit', ['id' => $p->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
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
