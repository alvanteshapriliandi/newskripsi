@extends('templates.user.layout')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md 12">
				<table class="table" border="1">
					<tr>
						<td style="background: #ccc;">Summary</td>
						<td style="background: #ccc;">Payment</td>
						<td style="background: #ccc;">Prosess</td>
						<td style="background: lime;">Status</td>
					</tr>
				</table>
				<form class="form-group" method="POST" action="{{ route('proses.update', ['id' => $pay->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
			        <input name="_method" type="hidden" value="PATCH">
			        {{ csrf_field() }}
					<table class="table">
						<tr>
							<td>
								Beri tahu kami apakah barang anda sudah diterima?
							</td>
							<td>
								<input type="radio" name="status" value="4"> Ya sudah saya terima
							</td>
							<td>
								<input type="submit" name="btninput">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	

@stop