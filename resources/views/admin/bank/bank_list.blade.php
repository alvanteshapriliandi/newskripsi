@extends('templates.admin.layout')

@section('content')

	<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Bank <a href="{{route('bank.create')}}" class="btn btn-warning btn-xs"><i class="fa fa-plus"></i> Create New </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div>
                    <table id="datatable-buttons" class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Kepemilikan Bank</th>
                                <th>Nama Bank</th>
                                <th>Images Bank</th>
                                <th>No Rekening</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Kepemilikan Bank</th>
                                <th>Nama Bank</th>
                                <th>Images Bank</th>
                                <th>No Rekening</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($bank as $b)
                                <tr>
                                    <td>{{$b->atas_nama}}</td>
                                    <td>{{$b->name_bank}}</td>
                                    <td>
                                        <img src="{{asset('uploads/'.$b->images_bank)}}" width="100">
                                    </td>
                                    <td>{{$b->no_rekening}}</td>
                                    <td>{{ date('F d, Y', strtotime($b->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($b->created_at))}}</td>
                                    <td>
                                        <a href="{{route('bank.edit',['id'=>$b->id])}}" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('bank.show',['id'=>$b->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
