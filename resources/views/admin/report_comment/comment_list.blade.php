@extends('templates.admin.layout')

@section('content')


	<div class="">

		<div class="row">

			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Report List</h2>
						<div class="clearfix"></div>
					</div>
					<div>
						<table id="datatable-buttons" class="table table-hover table-responsive">
							<thead>
								<tr>
									<th>Kode Invoice</th>
									<th>Username</th>
									<th>Nama Product</th>
									<th>Comment</th>
									<th>Date</th>
									<th>Time</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Kode Invoice</th>
									<th>Username</th>
									<th>Nama Product</th>
									<th>Comment</th>
									<th>Date</th>
									<th>Time</th>
								</tr>
							</tfoot>
							<tbody>
								@foreach($comment as $c)
								<tr>
									<td>{{$c->kode_invoice}}</td>
									<td>{{$c->username}}</td>
									<td>{{$c->jdl_Pdk}}</td>
									<td>{{$c->comment}}</td>
									<td>{{ date('F d, Y', strtotime($c->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($c->created_at))}}</td>
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
