<div class="form-content">
	<div class="row">
		<div class="col-md-12">
			<p><button type="button" id="btnAdd" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Field</button></p>
		</div>
	</div>

	<div class="row group">
		<div class="form-group{{ $errors->has('ukuran') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="ukuran">Ukuran <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="ukuran[]" id="ukuran" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih Ukuran-</option>
					<option value="Bulat(45x45mm)">Bulat(45x45mm)</option>
					<option value="Bulat(40x40mm)">Bulat(40x40mm)</option>
					<option value="Bulat(30x30mm)">Bulat(30x30mm)</option>
					<option value="Oval (55x35mm)">Oval (55x35mm)</option>
					<option value="Oval (45x33mm)">Oval (45x33mm)</option>
					<option value="Persegi Panjang (75x15)">Persegi Panjang (75x15)</option>
					<option value="Persegi Panjang (70x25)">Persegi Panjang (75x25)</option>
					<option value="Persegi Panjang (58x22)">Persegi Panjang (58x22)</option>
				</select>
				@if ($errors->has('ukuran'))
				<span class="help-block">{{ $errors->first('ukuran') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jlh_pesanan') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jlh_pesanan">Pemesanan (Pics) <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<input type="text" value="{{ Request::old('jlh_pesanan') ?: '' }}" id="jlh_pesanan" name="jlh_pesanan[]" class="form-control col-md-7 col-xs-12">
				@if ($errors->has('jlh_pesanan'))
				<span class="help-block">{{ $errors->first('jlh_pesanan') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jns_finishing') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jns_finishing">Finishing <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jns_finishing[]" id="jns_finishing" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih Finishing-</option>
					<option value="Stempel Runaflek">Stempel Runaflek</option>
					<option value="Stempel Flash">Stempel Flash</option>
					<option value="Stempel Trodat">Stempel Trodat</option>
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

		<div class="col-md-3">
			<div class="form-group">
				<button type="button" class="btn btn-danger btnRemove"><i class="fa fa-trash"></i></button>
			</div>
		</div>
	</div>
</div>