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
				<form class="form-group">
					<table class="table table-hover">
						<tr>
							<th width="50">Kode Invoice</th>
 							<td>{{$invoice}}</td>
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
							<td width="100">
								<div class="panel panel-default">
								  <div class="panel-body">
								    Upload Bukti Pembayaran
								  </div>
								  <div class="panel-footer">
								  	<input type="file" name="">
								  </div>
								</div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td colspan="1"></td>
							<td>
								<a href="{{ route('info-prossess.index')}}" class="btn btn-info">Countiniue</a>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>

@stop