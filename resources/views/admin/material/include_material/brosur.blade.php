<div class="form-content">
	<div class="row">
		<div class="col-md-12">
			<p><button type="button" id="btnAdd" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Field</button></p>
		</div>
	</div>

	<div class="row group">
		<div class="form-group{{ $errors->has('jlh_pesanan') ? ' has-error' : '' }} col-md-2">
			<label class="col-xs-12" for="jlh_pesanan">Pemesanan (Rim) <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jlh_pesanan[]" id="jlh_pesanan" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Jumlah Pesanan-</option>
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

		<div class="form-group{{ $errors->has('ukuran') ? ' has-error' : '' }} col-md-2">
			<label class="col-xs-12" for="ukuran">Ukuran <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="ukuran[]" id="ukuran" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Ukuran-</option>
					<option value="A3 (29.7 cm x 42 cm)">A3 (29.7 cm x 42 cm)</option>
					<option value="A4 (29.7 cm x 21 cm)">A4 (29.7 cm x 21 cm)</option>
					<option value="A5 (14.8 cm x 21 cm)">A5 (14.8 cm x 21 cm)</option>
					<option value="A6 (10.5 cm x 14.8 cm)">A6 (10.5 cm x 14.8 cm)</option>
				</select>
				@if ($errors->has('ukuran'))
				<span class="help-block">{{ $errors->first('ukuran') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jns_kertas') ? ' has-error' : '' }} col-md-2">
			<label class="col-xs-12" for="jns_kertas">Jenis Kertas <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jns_kertas" id="jns_kertas" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Jenis Kertas-</option>
					<option value="HVS 80 Gsm - HVS 100 Gsm">HVS 80 Gsm - HVS 100 Gsm</option>
					<option value="Art Paper 100 Gsm - Art Paper 150 Gsm">Art Paper 100 Gsm - Art Paper 150 Gsm</option>
					<option value="Matt Paper 100 Gsm - Matt Paper 150 Gsm">Matt Paper 100 Gsm - Matt Paper 150 Gsm</option>
				</select>
				@if ($errors->has('jns_kertas'))
				<span class="help-block">{{ $errors->first('jns_kertas') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jns_finishing') ? ' has-error' : '' }} col-md-2">
			<label class="col-xs-12" for="jns_finishing">Jenis Finishing <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jns_finishing[]" id="jns_finishing" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Finishing-</option>
					<option value="Lipat 1">Lipat 1</option>
					<option value="Lipat 2">Lipat 2</option>
					<option value="Lipat Zig Zag">Lipat Zig Zag</option>
					<option value="UV Vernish">UV Vernish</option>
				</select>
				@if ($errors->has('jns_finishing'))
				<span class="help-block">{{ $errors->first('jns_finishing') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('berat') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="berat">Berat <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<input type="number" value="{{ Request::old('berat') ?: '' }}" id="berat" name="berat[]" class="form-control col-md-7 col-xs-12">
				@if ($errors->has('berat'))
				<span class="help-block">{{ $errors->first('berat') }}</span>
				@endif
			</div>
		</div>



		<div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }} col-md-2">
			<label class="col-xs-12" for="harga">Harga <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<input type="text" value="{{ Request::old('harga') ?: '' }}" id="harga" name="harga" class="form-control col-md-7 col-xs-12">
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