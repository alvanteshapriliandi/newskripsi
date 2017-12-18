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
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            	@foreach($user as $u)
                            	@if($u->role == 2)
	                                <tr>
	                                    <td>{{$u->username}}</td>
	                                    <td>{{$u->email}}</td>
	                                    <th>{{ date('F d, Y', strtotime($u->created_at))}}</th>
                                    	<th>{{ date('H:m:s', strtotime($u->created_at))}}</th>
	                                    <td>
	                                        <a href="{{ route('userlist.show', ['id' => $u->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash" title="Edit"></i> </a>
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