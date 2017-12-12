@extends('templates.user.layout')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<table class="table" border="1">
					<tr>
						<td style="background: #ccc;">Summary</td>
						<td style="background: lime;">Payment</td>
						<td>Prosess</td>
						<td>Status</td>
					</tr>
				</table>
				<a href="" class="btn btn-primary">continiue order</a>
				<form class="form-group" action="{{route('payment-upload.store')}}" method="POST" enctype="multipart/form-data">
            		{{ csrf_field() }}
					<table class="table table-hover">
						<tr>
							<th width="50">Kode Invoice</th>
 							<td><input type="text" readonly="true" name="kd_invoice" value="{{$invoice}}" class="form-control"></td>
						</tr>
						<tr>
							<th width="50">Nama Bank</th>
							
 							<td>
 								@if($type == 1)
 									<input type="text" readonly="true" name="namaBank" value="BRI" class="form-control">
 									@else
 										<input type="text" readonly="true" name="namaBank" value="Mandiri" class="form-control">
 								@endif
 							</td>

						</tr>
						<tr>
							<th width="50">Alamat</th>
 							<td><textarea name="alamat" class="form-control"></textarea></td>
						</tr>
						<tr>
							<th width="50">Kelurahan</th>
							<td><input type="text" name="kelurahan" class="form-control"></td>
						</tr>
						<tr>
							<th width="50">Kecamatan</th>
							<td><input type="text" name="kecamatan" class="form-control"></td>
						</tr>
						<tr>
							<th width="50">Kota</th>
							<td><input type="text" name="kota" class="form-control"></td>
						</tr>
						<tr>
							<td width="100">
								<div class="panel panel-default">
								  <div class="panel-body">
								    Upload Bukti Pembayaran
								  </div>
								  <div class="panel-footer">
								  	<input type="file" name="images">
								  </div>
								</div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td colspan="1"></td>
							<td>
								<input type="submit" class="btn btn-info" name="">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>

@stop