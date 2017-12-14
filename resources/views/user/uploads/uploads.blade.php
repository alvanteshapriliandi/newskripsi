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
							@foreach($banner as $b)
							<input type="hidden" name="BN_ID" value="{{$b->id}}">
							@endforeach
							
							@foreach($bantalfoto as $bt)
							<input type="hidden" name="BT_ID" value="{{$bt->id}}">
							@endforeach
							
							@foreach($brosur as $br)
							<input type="hidden" name="BR_ID" value="{{$br->id}}">
							@endforeach
							
							@foreach($goodlebag as $gd)
							<input type="hidden" name="GD_ID" value="{{$gd->id}}">
							@endforeach
							
							@foreach($kalender as $kl)
							<input type="hidden" name="KL_ID" value="{{$kl->id}}">
							@endforeach
							
							@foreach($kaos as $ks)
							<input type="hidden" name="KS_ID" value="{{$ks->id}}">
							@endforeach
							
							@foreach($kartu as $kr)
							<input type="hidden" name="KR_ID" value="{{$kr->id}}">
							@endforeach
							
							@foreach($mug as $mg)
							<input type="hidden" name="MG_ID" value="{{$mg->id}}">
							@endforeach
							
							@foreach($office as $of)
							<input type="hidden" name="OF_ID" value="{{$of->id}}">
							@endforeach
							
							@foreach($polo as $pl)
							<input type="hidden" name="PL_ID" value="{{$pl->id}}">
							@endforeach
							
							@foreach($poster as $pt)
							<input type="hidden" name="PT_ID" value="{{$pt->id}}">
							@endforeach
							
							@foreach($stempel as $sm)
							<input type="hidden" name="SM_ID" value="{{$sm->id}}">
							@endforeach
							
							@foreach($stiker as $st)
							<input type="hidden" name="ST_ID" value="{{$st->id}}">
							@endforeach
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