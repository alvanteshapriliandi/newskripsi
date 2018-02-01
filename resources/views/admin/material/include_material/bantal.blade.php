<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<div class="form-content">
	<div class="row">
		<div class="col-md-32">
			<p><button type="button" id="btnAdd" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Field</button></p>
		</div>
	</div>

	<div class="row group">
		<!-- <div class="form-group{{ $errors->has('model_bantal') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="model_bantal">Model Bantal <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="model_bantal[]" id="model" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Model Bantal-</option>
					<option value="Persegi">Persegi</option>
					<option value="Persegi Panjang">Persegi Panjang</option>
					<option value="Guling">Guling</option>
				</select>
				@if ($errors->has('model_bantal'))
				<span class="help-block">{{ $errors->first('model_bantal') }}</span>
				@endif
			</div>
		</div>
 -->
		<div class="form-group{{ $errors->has('ukuran') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="ukuran">Ukuran <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="ukuran[]" id="ukuran" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Ukuran Bantal-</option>
					<option value="25 X 25 CM (Persegi)">25 X 25 CM (Persegi)</option>
					<option value="40 X 40 CM (Persegi)">40 X 40 CM (Persegi)</option>
					<option value="80 X 80 CM (Persegi)">80 X 80 CM (Persegi)</option>
					<option value="20 X 25 CM (Persegi Panjang)">20 X 25 CM (Persegi Panjang)</option>
					<option value="40 X 60 CM (Persegi Panjang)">40 X 60 CM (Persegi Panjang)</option>
					<option value="40 X 80 CM (Persegi Panjang)">40 X 80 CM (Persegi Panjang)</option>
					<option value="Panjang 40 CM (Guling)">Panjang 40 CM (Guling)</option>
					<option value="Panjang 65 CM (Guling)">Panjang 65 CM (Guling)</option>
				</select>
				@if ($errors->has('ukuran'))
				<span class="help-block">{{ $errors->first('ukuran') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jenis_kain') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jenis_kain">Jenis Kain <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jenis_kain[]" id="jenis_kain" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Jenis-</option>
					<option value="Rasfur">Rasfur</option>
					<option value="Snail">Snail</option>
				</select>
				@if ($errors->has('jenis_kain'))
				<span class="help-block">{{ $errors->first('jenis_kain') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jlh_pesanan') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jlh_pesanan">Pemesanan (buah)<span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<input type="text" value="{{ Request::old('jlh_pesanan') ?: '' }}" id="jlh_pesanan" name="jlh_pesanan[]" class="form-control col-md-7 col-xs-12">
				@if ($errors->has('jlh_pesanan'))
				<span class="help-block">{{ $errors->first('jlh_pesanan') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jns_finishing') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jns_finishing">Jenis Finising <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<input type="text" value="Digital printing dan Offset" id="jns_finishing" name="jns_finishing[]" class="form-control col-md-7 col-xs-12">
				@if ($errors->has('jns_finishing'))
				<span class="help-block">{{ $errors->first('jns_finishing') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('berat') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="berat">Berat (Gram)  <span class="required">*</span>
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
<!-- <script src="{{asset('freelancer/js/jquery.min.js')}}"></script> -->
