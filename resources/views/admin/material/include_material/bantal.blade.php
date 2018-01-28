<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<div class="form-content">
	<div class="row">
		<div class="col-md-22">
			<p><button type="button" id="btnAdd" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Field</button></p>
		</div>
	</div>

	<div class="row group">
		<div class="form-group{{ $errors->has('model_bantal') ? ' has-error' : '' }} col-md-2">
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

		<div class="form-group{{ $errors->has('ukuran') ? ' has-error' : '' }} col-md-2">
			<label class="col-xs-12" for="ukuran">Ukuran <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="ukuran[]" id="ukuran" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Ukuran-</option>
				</select>
				@if ($errors->has('ukuran'))
				<span class="help-block">{{ $errors->first('ukuran') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jenis_kain') ? ' has-error' : '' }} col-md-2">
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

		<div class="form-group{{ $errors->has('harga_awal') ? ' has-error' : '' }} col-md-2">
			<label class="col-xs-12" for="harga_awal">Pemesanan (buah)<span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<input type="text" value="{{ Request::old('harga_awal') ?: '' }}" id="harga_awal" name="harga_awal" class="form-control col-md-7 col-xs-12">
				@if ($errors->has('harga_awal'))
				<span class="help-block">{{ $errors->first('harga_awal') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('harga_awal') ? ' has-error' : '' }} col-md-2">
			<label class="col-xs-12" for="harga_awal">Jenis Finising <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="category" id="category" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih Total Pesanan-</option>
					<option value="50">50</option>
					<option value="50">100</option>
					<option value="50">200</option>
					<option value="50">300</option>
					<option value="50">400</option>
				</select>
				@if ($errors->has('harga_awal'))
				<span class="help-block">{{ $errors->first('harga_awal') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('harga_awal') ? ' has-error' : '' }} col-md-2">
			<label class="col-xs-12" for="harga_awal">Harga <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<input type="text" value="{{ Request::old('harga_awal') ?: '' }}" id="harga_awal" name="harga_awal" class="form-control col-md-7 col-xs-12">
				@if ($errors->has('harga_awal'))
				<span class="help-block">{{ $errors->first('harga_awal') }}</span>
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
<!-- <script src="{{asset('freelancer/js/jquery.min.js')}}"></script> -->
