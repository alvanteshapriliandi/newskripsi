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
					<table class="table table-hover">
						<tr>
							<th width="50">No. Invoice</th>
 							<td width="50">12345</td>
						</tr>
						<tr>
							<th></th>
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