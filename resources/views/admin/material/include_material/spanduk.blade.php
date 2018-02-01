<div class="form-content">
	<div class="row">
		<div class="col-md-22">
			<p><button type="button" id="btnAdd" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Field</button></p>
		</div>
	</div>

	<div class="row group">
		<div class="form-group{{ $errors->has('ukuran') ? ' has-error' : '' }} col-md-2">
			<label class="col-xs-12" for="ukuran">Ukuran <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<input type="text" value="{{ Request::old('ukuran') ?: '' }}" id="ukuran" name="ukuran[]" class="form-control col-md-7 col-xs-12">
				@if ($errors->has('ukuran'))
				<span class="help-block">{{ $errors->first('ukuran') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('bahan') ? ' has-error' : '' }} col-md-2">
			<label class="col-xs-12" for="bahan">Bahan <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="bahan[]" id="bahan" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Bahan-</option>
					<option value="FF Korea 440 GR">FF Korea 440 GR</option>
                    <option value="FF China 340GR">FF China 340GR</option>
				</select>
				@if ($errors->has('bahan'))
				<span class="help-block">{{ $errors->first('bahan') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jlh_pesanan') ? ' has-error' : '' }} col-md-2">
			<label class="col-xs-12" for="jlh_pesanan">Pemesanan (buah)<span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<input type="text" value="{{ Request::old('jlh_pesanan') ?: '' }}" id="jlh_pesanan" name="jlh_pesanan[]" class="form-control col-md-7 col-xs-12">
				@if ($errors->has('jlh_pesanan'))
				<span class="help-block">{{ $errors->first('jlh_pesanan') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jns_finishing') ? ' has-error' : '' }} col-md-2">
			<label class="col-xs-12" for="jns_finishing">Jenis Finising <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jns_finishing[]" id="jns_finishing" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih Jenis Finising-</option>
					<option value="Lipat">Lipat</option>
					<option value="Potong Pas">Potong Pas</option>
					<option value="Beri Frame">Beri Frame</option>
					<option value="Mata Ayam">Mata Ayam</option>
					<option value="Selongsong">Selongsong</option>
					<option value="selongso dan Mata Ayam">selongso dan Mata Ayam</option>
					<option value="Beri Frame dan Mata Ayam">Beri Frame dan Mata Ayam</option>
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