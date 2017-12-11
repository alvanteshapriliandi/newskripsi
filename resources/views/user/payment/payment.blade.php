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
					<h3 align="center">Pilih Bank</h3>
					<div class="row">
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_BRI.png" alt="..." width="300">
					      <div class="caption">
					        <h3>BRI</h3>
					        <p>A/N : techno graphic</p>
					        <p>00012135</p>
					        <p><a href="{{url('payment-upload?type=1')}}" class="btn btn-primary" role="button">Pilih</a></p>
					      </div>
					    </div>
					  </div>
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="http://desain360.com/admin/uploads/image/mandiri_logo.png" alt="..." width="300">
					      <div class="caption">
					        <h3>Mandiri</h3>
					        <p>A/N : techno graphic</p>
					        <p>00012135</p>
					        <p><a href="{{url('payment-upload?type=2')}}" class="btn btn-primary" role="button">Pilih</a></p>
					      </div>
					    </div>
					  </div>
					</div>

				</form>
			</div>
		</div>
	</div>

@stop