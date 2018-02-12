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
									<th>Date</th>
									<th>Time</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>username</th>
									<th>Product Name</th>
									<th>Rate</th>
									<th>Judul</th>
									<th>Koment</th>
									<th>Date</th>
									<th>Time</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
								<tr>
									<td>Fahmi</td>
									<td>Mantap Amplop</td>
									<?php 
										$rate = 3;
									?>
									<td>
										<i class="fa fa-star" style="color: yellow;"></i>
										<i class="fa fa-star" style="color: yellow;"></i>
										<i class="fa fa-star" style="color: yellow;"></i>
										<i class="fa fa-star" style="color: yellow;"></i>
										<i class="fa fa-star"></i>
									</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop
