<div class="form-content">
	<div class="row">
		<div class="col-md-12">
			<p><button type="button" id="btnAdd" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Field</button></p>
		</div>
	</div>

	<div class="row group">
		<div class="form-group{{ $errors->has('bahan') ? ' has-error' : '' }} col-md-4">
			<label class="col-xs-12" for="bahan">Bahan <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="bahan[]" id="bahan" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Pemesanan-</option>
					<option value="GILDAN SOFTSTYLE">GILDAN SOFTSTYLE</option>
					<option value="KATUN">KATUN</option>
				</select>
				@if ($errors->has('bahan'))
				<span class="help-block">{{ $errors->first('bahan') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('ukuran') ? ' has-error' : '' }} col-md-4">
			<label class="col-xs-12" for="ukuran">Ukuran <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="ukuran[]" id="ukuran" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Ukuran-</option>
					<option value="XS - Extra Small">XS - Extra Small</option>
                  	<option value="S - Small">S - Small</option>
                  	<option value="M - Medium">M - Medium</option>
                  	<option value="L - Large">L - Large</option>
                  	<option value="XL - Extra Large">XL - Extra Large</option>
                  	<option value="XXL - 2 Extra Large">XXL - 2 Extra Large</option>
				</select>
				@if ($errors->has('ukuran'))
				<span class="help-block">{{ $errors->first('ukuran') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('cetak_depan') ? ' has-error' : '' }} col-md-4">
			<label class="col-xs-12" for="cetak_depan">Area Cetak Depan <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="cetak_depan[]" id="cetak_depan" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Area Cetak Depan-</option>
					<option value="None">None</option>
                    <option value="A4">A4</option>
                    <option value="A3">A3</option>
				</select>
				@if ($errors->has('cetak_depan'))
				<span class="help-block">{{ $errors->first('cetak_depan') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('cetak_belakang') ? ' has-error' : '' }} col-md-4">
			<label class="col-xs-12" for="cetak_belakang">Area Cetak Belakang <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="cetak_belakang[]" id="cetak_belakang" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Area Cetak Belakang-</option>
					<option value="None">None</option>
                    <option value="A4">A4</option>
                    <option value="A3">A3</option>
				</select>
				@if ($errors->has('cetak_belakang'))
				<span class="help-block">{{ $errors->first('cetak_belakang') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('cetak_lengan') ? ' has-error' : '' }} col-md-4">
			<label class="col-xs-12" for="cetak_lengan">Area Cetak Lengan <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="cetak_lengan[]" id="cetak_lengan" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih Area Cetak Lengan-</option>
					<option value="NONE">NONE</option>
                    <option value="RIGHT ARM">RIGHT ARM</option>
                    <option value="LEFT ARM">LEFT ARM</option>
                    <option value="BOTH CHEST ARM">BOTH CHEST ARM</option>
				</select>
				@if ($errors->has('cetak_lengan'))
				<span class="help-block">{{ $errors->first('cetak_lengan') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jlh_pesanan') ? ' has-error' : '' }} col-md-4">
			<label class="col-xs-12" for="jlh_pesanan">Pemesanan (lusin) <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jlh_pesanan[]" id="jlh_pesanan" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Pemesanan-</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
				@if ($errors->has('jlh_pesanan'))
				<span class="help-block">{{ $errors->first('jlh_pesanan') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jns_finishing') ? ' has-error' : '' }} col-md-4">
			<label class="col-xs-12" for="jns_finishing">Jenis Finishing <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jns_finishing[]" id="jns_finishing" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Jenis Kertas-</option>
					<option value="Print">Print</option>
                    <option value="Bordir">Bordir</option>
				</select>
				@if ($errors->has('jns_finishing'))
				<span class="help-block">{{ $errors->first('jns_finishing') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }} col-md-4">
			<label class="col-xs-12" for="harga">Harga <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<input type="text" value="{{ Request::old('harga') ?: '' }}" id="harga" name="harga[]" class="form-control col-md-7 col-xs-12">
				@if ($errors->has('harga'))
				<span class="help-block">{{ $errors->first('harga') }}</span>
				@endif
			</div>
		</div>

		<div class="col-md-2">
			<div class="form-group">
				<button type="button" class="btn btn-danger btnRemove"><i class="fa fa-trash"></i></button>
			</div>
		</div>
	</div>
</div>