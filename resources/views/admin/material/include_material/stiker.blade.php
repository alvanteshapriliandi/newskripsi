<div class="form-content">
	<div class="row">
		<div class="col-md-12">
			<p><button type="button" id="btnAdd" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Field</button></p>
		</div>
	</div>

	<div class="row group">

		<div class="form-group{{ $errors->has('jlh_pesanan') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jlh_pesanan">Pesanan (buah) <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jlh_pesanan[]" id="jlh_pesanan" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Pesanan-</option>
					<option value="50">50</option>
					<option value="100">100</option>
					<option value="200">200</option>
					<option value="300">300</option>
					<option value="400">400</option>
				</select>
				@if ($errors->has('jlh_pesanan'))
				<span class="help-block">{{ $errors->first('jlh_pesanan') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('ukuran') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="ukuran">Ukuran <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="ukuran[]" id="ukuran" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Ukuran-</option>
					<option value="Bulat (Diameter 5 cm)">Bulat (Diameter 5 cm)</option>
					<option value="Bulat (Diameter 7 cm)">Bulat (Diameter 7 cm)</option>
					<option value="Bulat (Diameter 8 cm)">Bulat (Diameter 8 cm)</option>
					<option value="Persegi (5 x 5 cm)">Persegi (5 x 5 cm)</option>
					<option value="Persegi (7 x 7 cm)">Persegi (7 x 7 cm)</option>
					<option value="Persegi (10 x 10 cm)">Persegi (10 x 10 cm)</option>
					<option value="Persegi Panjang (6 x 4 cm)">Persegi Panjang (6 x 4 cm)</option>
					<option value="Persegi Panjang (9 x 6 cm)">Persegi Panjang (9 x 6 cm)</option>
					<option value="Persegi Panjang (12 x 8 cm)">Persegi Panjang (12 x 8 cm)</option>
				</select>
				@if ($errors->has('ukuran'))
				<span class="help-block">{{ $errors->first('ukuran') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jns_material') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jns_material">Jenis Material<span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jns_material[]" id="jns_material" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih Jenis Material-</option>
					<option value="50">Vinyl</option>
					<option value="50">HVS</option>
					<option value="50">Bontaks</option>
					<option value="50">Transparan</option>
					<option value="50">Cromo</option>
				</select>
				@if ($errors->has('jns_material'))
				<span class="help-block">{{ $errors->first('jns_material') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jns_finishing') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jns_finishing">Jenis Finising <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jns_finishing[]" id="jns_finishing" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih Jenis Finising-</option>
					<option value="Laminasi Dove">Laminasi Dove</option>
					<option value="Laminasi Glossy">Laminasi Glossy</option>
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