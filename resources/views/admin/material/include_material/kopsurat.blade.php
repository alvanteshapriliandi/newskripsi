<div class="form-content">
	<div class="row">
		<div class="col-md-12">
			<p><button type="button" id="btnAdd" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Field</button></p>
		</div>
	</div>

	<div class="row group">
		<div class="form-group{{ $errors->has('jlh_pesanan') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jlh_pesanan">Pesanan (Rim)<span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jlh_pesanan[]" id="jlh_pesanan" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Total Pesanan-</option>
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

		<div class="form-group{{ $errors->has('jns_kertas') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jns_kertas">Jenis Kertas <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jns_kertas[]" id="jns_kertas" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Jenis Kertas-</option>
					<option value="HVS 80 Gsm - HVS 100 Gsm">HVS 80 Gsm - HVS 100 Gsm</option>
					<option value="Concorde 90 Gsm Putih / Warna">Concorde 90 Gsm Putih / Warna</option>
					<option value="Conqueror 100 Gsm">Conqueror 100 Gsm</option>
					<option value="Custom">Custom</option>
					
				</select>
				@if ($errors->has('jns_kertas'))
				<span class="help-block">{{ $errors->first('jns_kertas') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('ukuran') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="ukuran">Ukuran<span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="ukuran[]" id="ukuran" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Ukuran-</option>
					<option value="Folio (21.5 cm x 33 cm)">Folio (21.5 cm x 33 cm)</option>
					<option value="A4 (21 cm x 29.7 cm)">A4 (21 cm x 29.7 cm)</option>
				</select>
				@if ($errors->has('ukuran'))
				<span class="help-block">{{ $errors->first('ukuran') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jns_finishing') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jns_finishing">Jenis Finishing <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jns_finishing[]" id="jns_finishing" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Jenis Finishing-</option>
					<option value="1 warna">1 warna</option>
					<option value="2 warna">2 warna</option>
					<option value="3 warna">3 warna</option>
					<option value="full colour">full colour</option>
				</select>
				@if ($errors->has('jns_finishing'))
				<span class="help-block">{{ $errors->first('jns_finishing') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('berat') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="berat">Berat (Gram) <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<input type="number" value="{{ Request::old('berat') ?: '' }}" id="berat" name="berat[]" class="form-control col-md-7 col-xs-12">
				@if ($errors->has('berat'))
				<span class="help-block">{{ $errors->first('berat') }}</span>
				@endif
			</div>
		</div>


		<div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }} col-md-3">
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