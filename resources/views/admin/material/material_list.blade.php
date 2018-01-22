@extends('templates.admin.layout')

@section('content')

    <div class="">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List Material</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Subcategory</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Subcategory</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($subcategory as $sub)
                                <tr>
                                    <td>{{$sub->name}}</td>
                                    <td>{{ date('F d, Y', strtotime($sub->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($sub->created_at))}}</td>
                                    <td align="center">
                                        <a href="{{route('material.show', ['id' => $sub->id])}}" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                                        <a href="{{route('material.edit', ['id' => 1])}}" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('material.show', ['id' => 1])}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
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
