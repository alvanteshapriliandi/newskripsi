<div class="form-content">
	<div class="row">
		<div class="col-md-12">
			<p><button type="button" id="btnAdd" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Field</button></p>
		</div>
	</div>

	<div class="row group">
		<div class="form-group{{ $errors->has('jns_mug') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jns_mug">Jenis Mug <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jns_mug[]" id="category" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Jenis Mug-</option>
					<option value="Mug Premium">Mug Premium</option>
                    <option value="Mug Gagang Warna Premium">Mug Gagang Warna Premium</option>
                    <option value="Mug Kerucut Import">Mug Kerucut Import</option>
                    <option value="Mug Jumbo">Mug Jumbo</option>
                    <option value="Mug Warna Dalam (Two Tone)">Mug Warna Dalam (Two Tone)</option>
                    <option value="Travel Mug Stainless (Putih)">Travel Mug Stainless (Putih)</option>
				</select>
				@if ($errors->has('jns_mug'))
				<span class="help-block">{{ $errors->first('jns_mug') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jlh_pesanan') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jlh_pesanan">Pemesanan (buah) <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<input type="text" value="{{ Request::old('jlh_pesanan') ?: '' }}" id="jlh_pesanan" name="jlh_pesanan[]" class="form-control col-md-7 col-xs-12">
				@if ($errors->has('jlh_pesanan'))
				<span class="help-block">{{ $errors->first('jlh_pesanan') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jns_finishing') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="harga_awal">Jenis Finising <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<input type="text" value="Print Heat Press" id="jlh_pesanan" name="jlh_pesanan[]" class="form-control col-md-7 col-xs-12">
				@if ($errors->has('harga_awal'))
				<span class="help-block">{{ $errors->first('harga_awal') }}</span>
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