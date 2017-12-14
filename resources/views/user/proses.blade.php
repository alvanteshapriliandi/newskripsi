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
				
				<form class="form-group">
					<table class="table table-hover table-bordered">
						@foreach($pay as $p)
						<tr>
							<th>Kode Invoice</th>
							<td>{{$p->kd_invoice}}</td>
						</tr>
						<tr>
							<th>Nama Bank</th>
							<td>{{$p->namaBank}}</td>
						</tr>
						<tr>
							<th>Alamat</th>
							<td>{{$p->alamat}}</td>
						</tr>
						<tr>
							<th>Kelurahan</th>
							<td>{{$p->kelurahan}}</td>
						</tr>
						<tr>
							<th>Kecamatan</th>
							<td>{{$p->kecamatan}}</td>
						</tr>
						<tr>
							<th>Kota</th>
							<td>{{$p->kota}}</td>
						</tr>
						@endforeach
					</table>
					<h3>Pemesanan</h3>
					<table class="table table-hover table-bordered">
						<tr>
							<th>Nama Product</th>
							<th style="text-align: center;">Jumlah Baraang</th>
							<th style="text-align: right;">Total Harga</th>
						</tr>
						<?php 
							$total = 0;
							$kirim = 10000;
						 ?>
						<!-- start checkout Banner -->
						@foreach($banner as $ban)
						<tr>
							<td>{{$ban->name}}</td>
							<td style="text-align: center;">{{$ban->BN_pemesanan}}</td>
							<td style="text-align: right;">{{$ban->BN_total}}</td>
							<?php $total += $ban->BN_total; ?>
						</tr>
						@endforeach
						<!-- end checkout Banner -->

						<!-- start checkout Bantal Photo -->
						@foreach($bantalfoto as $bafo)
						<tr>
							<td>{{$bafo->name}}</td>
							<td style="text-align: center;">{{$bafo->BT_pemesanan}}</td>
							<td style="text-align: right;">{{$bafo->BT_total}}</td>
							<?php $total += $bafo->BT_total; ?>
						</tr>
						@endforeach
						<!-- end checkout Bantal Photo -->

						<!-- start checkout Brosur -->
						@foreach($brosur as $br)
						<tr>
							<td>{{$br->name}}</td>
							<td style="text-align: center;">{{$br->BR_pemesanan}}</td>
							<td style="text-align: right;">{{$br->BR_total}}</td>
							<?php $total += $br->BR_total; ?>
						</tr>
						@endforeach
						<!-- end checkout Brosur -->

						<!-- start checkout Goodle Bag -->
						@foreach($goodlebag as $gd)
						<tr>
							<td>{{$gd->name}}</td>
							<td style="text-align: center;">{{$gd->GD_pemesanan}}</td>
							<td style="text-align: right;">{{$gd->GD_total}}</td>
							<?php $total += $gd->GD_total; ?>
						</tr>
						@endforeach
						<!-- end checkout Goodle Bag -->

						<!-- start checkout Kalender -->
						@foreach($kalender as $kl)
						<tr>
							<td>{{$kl->name}}</td>
							<td style="text-align: center;">{{$kl->KL_pemesanan}}</td>
							<td style="text-align: right;">{{$kl->KL_total}}</td>
							<?php $total += $kl->KL_total; ?>
						</tr>
						@endforeach
						<!-- end checkout Kelender -->

						<!-- start checkout Kaos -->
						@foreach($kaos as $ks)
						<tr>
							<td>{{$ks->name}}</td>
							<td style="text-align: center;">{{$ks->KS_pemesanan}}</td>
							<td style="text-align: right;">{{$ks->id}}</td>
							<?php $total += $ks->KS_total; ?>
						</tr>
						@endforeach
						<!-- end checkout Kaos -->

						<!-- start checkout Kartu -->
						@foreach($kartu as $kr)
						<tr>
							<td>{{$kr->name}}</td>
							<td style="text-align: center;">{{$kr->KR_pemesanan}}</td>
							<td style="text-align: right;">{{$kr->KR_total}}</td>
							<?php $total += $kr->KR_total; ?>
						</tr>
						@endforeach
						<!-- end checkout Kartu -->

						<!-- start checkout Mug -->
						@foreach($mug as $mg)
						<tr>
							<td>{{$mug->name}}</td>
							<td style="text-align: center;">{{$mg->MG_pemesanan}}</td>
							<td style="text-align: right;">{{$mg->MG_total}}</td>
							<?php $total += $mg->MG_total; ?>
						</tr>
						@endforeach
						<!-- end checkout Mug -->

						<!-- start checkout Office -->
						@foreach($office as $of)
						<tr>
							<td>{{$of->name}}</td>
							<td style="text-align: center;">{{$of->OF_pemesanan}}</td>
							<td style="text-align: right;">{{$of->OF_total}}</td>
							<?php $total += $of->OF_total; ?>
						</tr>
						@endforeach
						<!-- end checkout Office -->

						<!-- start checkout Polo -->
						@foreach($polo as $pl)
						<tr>
							<td>{{$pl->name}}</td>
							<td style="text-align: center;">{{$pl->PL_pemesanan}}</td>
							<td style="text-align: right;">{{$pl->PL_total}}</td>
							<?php $total += $pl->PL_total; ?>
						</tr>
						@endforeach
						<!-- end checkout Polo -->

						<!-- start checkout Poster -->
						@foreach($poster as $pt)
						<tr>
							<td>{{$pt->name}}</td>
							<td style="text-align: center;">{{$pt->PT_pemesanan}}</td>
							<td style="text-align: right;">{{$pt->PT_total}}</td>
							<?php $total += $pt->PT_total; ?>
						</tr>
						@endforeach
						<!-- end checkout Poster -->

						<!-- start checkout Stempel -->
						@foreach($stempel as $sm)
						<tr>
							<td>{{$sm->name}}</td>
							<td style="text-align: center;">{{$sm->SM_pemesanan}}</td>
							<td style="text-align: right;">{{$sm->SM_total}}</td>
							<?php $total += $sm->SM_total; ?>
						</tr>
						@endforeach
						<!-- end checkout Stempel -->

						<!-- start checkout Stiker -->
						@foreach($stiker as $st)
						<tr>
							<td>{{$st->name}}</td>
							<td style="text-align: center;">{{$st->ST_pemesanan}}</td>
							<td style="text-align: right;">{{$st->ST_total}}</td>
							<?php $total += $st->ST_total; ?>
						</tr>
						@endforeach
						<!-- end checkout Stiker -->
						<?php 
							$total = $total + $kirim;
						 ?>
						<tr>
							<th colspan="2" style="text-align: right;">Ongkos Kirim</th>
							<td  style="text-align: right;">{{$kirim}}</td>
						</tr>
						<tr>
							<th colspan="2" style="text-align: right;">Total Keseluruhan</th>
							<td style="text-align: right;">{{$total}}</td>
						</tr>
						<tr>
							<th colspan="2" style="text-align: right;">Status</th>
							@foreach($pay as $p)
								@if($p->status == 0)
									<td style="text-align: right;">Menunggu Konfirmasi</td>
									@elseif($p->status == 1)
										<td style="text-align: right;">Dalam Proses Pengerjaan</td>
									@else
										<td style="text-align: right;">Dalam Proses Pengiriman</td>
								@endif
						</tr>
					</table>
						@if($p->status == 0)
							<a href="" class="btn btn-info" style="pointer-events: none;">Lanjut</a>
							@else
								<a href="" class="btn btn-info">Lanjut</a>
						@endif
					@endforeach
				</form>
			</div>
		</div>
	</div>

@stop