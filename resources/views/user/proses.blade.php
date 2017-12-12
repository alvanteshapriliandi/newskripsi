@extends('templates.user.layout')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<table class="table" border="1">
					<tr>
						<td style="background: #ccc;">Summary</td>
						<td style="background: #ccc;">Payment</td>
						<td style="background: lime;">Prosess</td>
						<td>Status</td>
					</tr>
				</table>
				<a href="" class="btn btn-primary">continiue order</a>
				<form class="form-group">
					<table class="table table-hover table-bordered">
						<tr>
							<th>Kode Invoice</th>
 							<td>12345</td>
						</tr>
					</table>
					<h3>Pemesanan</h3>
					<table class="table table-hover table-bordered">
						<tr>
							<th>Nama Product</th>
							<th style="text-align: center;">Jumlah Baraang</th>
							<th style="text-align: right;">Total Harga</th>
						</tr>
						<tr>
							<td>Spanduk</td>
							<td style="text-align: center;">2</td>
							<td style="text-align: right;">100000</td>
						</tr>
						<tr>
							<td>Kaos</td>
							<td style="text-align: center;">50</td>
							<td style="text-align: right;">1500000</td>
						</tr>
						<tr>
							<th colspan="2" style="text-align: right;">Ongkos Kirim</th>
							<td  style="text-align: right;">10000</td>
						</tr>
						<tr>
							<th colspan="2" style="text-align: right;">Total Keseluruhan</th>
							<td style="text-align: right;">1610000</td>
						</tr>
						<tr>
							<th colspan="2" style="text-align: right;">Status</th>
							<td style="text-align: right;">Dalam Pengerjaan</td>
						</tr>
					</table>
					<a href="{{ route('info-prossess.index')}}" class="btn btn-info">Countiniue</a>
				</form>
			</div>
		</div>
	</div>

@stop