@extends('templates.freelancer.layout')

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
									<th>Username</th>
									<th>Nama Product</th>
									<th>Subcategory</th>
									<th>Harga</th>
									<th>Pendapatan</th>
									<th>Status</th>
									<th>Date</th>
									<th>Time</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Username</th>
									<th>Nama Product</th>
									<th>Subcategory</th>
									<th>Harga</th>
									<th>Pendapatan</th>
									<th>Status</th>
									<th>Date</th>
									<th>Time</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
								@foreach($report as $r)
								@if($r->status == 4)
								<tr>
									<?php 
										// $pendapatan = $r->total - $r->harga_awal;
										// $pendapatan = $r->total - $pendapatan;
									?>
									<td>{{$r->username}}</td>
									<td>{{$r->jdl_Pdk}}</td>
									<td>{{$r->name}}</td>
									<?php 
										// $r->total = number_format($r->total, 1, ",",".");
										// $pendapatan = number_format($pendapatan, 1, ",",".");
									?>
									<td>{{$r->harga_awal}}</td>
									<td>{{$pendapatan}}</td>
									@if($r->status_frpay == 1)
										<td>Terkirim</td>
										@else
											<td>Belum Terkirim</td>
									@endif
									<td>{{ date('F d, Y', strtotime($r->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($r->created_at))}}</td>
                                    @if($r->status_frpay == 0)
                                    	<td>
                                    		<a href="{{route('report.show',['id'=>$r->id])}}" class="btn btn-info">komentar</a>
                                    	</td>
                                    	@else
                                    		<td>
                                    			<input type="submit" disabled="true" class="btn btn-danger" name="" value="komentar">
                                    		</td>

                                    @endif
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
