@extends('templates.freelancer.layout')

@section('content')


	<div class="">

		<div class="row">

			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Ulasan</h2>
						<div class="clearfix"></div>
					</div>
					<div>
						<table id="datatable-buttons" class="table table-hover table-responsive">
							<thead>
								<tr>
									<th>username</th>
									<th>Product Name</th>
									<th>Rate</th>
									<th>Judul</th>
									<th>Koment</th>
									<th>Date TIme</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>username</th>
									<th>Product Name</th>
									<th>Rate</th>
									<th>Judul</th>
									<th>Koment</th>
									<th>Date TIme</th>
								</tr>
							</tfoot>
							<tbody>
								@foreach($ulasan as $ul)
								<tr>
									<td>{{$ul->username}}</td>
									<td>{{$ul->jdl_Pdk}}</td>
									<!-- <td>
										<i class="fa fa-star" style="color: yellow;"></i>
										<i class="fa fa-star" style="color: yellow;"></i>
										<i class="fa fa-star" style="color: yellow;"></i>
										<i class="fa fa-star" style="color: yellow;"></i>
										<i class="fa fa-star"></i>
									</td> -->
									<td>{{$ul->rate}}</td>
									<td>{{$ul->judul}}</td>
									<td>{{$ul->komen}}</td>
									<td>{{ date('F d, Y', strtotime($ul->created_at))}} {{ date('H:m:s', strtotime($ul->created_at))}}</td>
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
