<div class="form-content">
	<div class="row">
		<div class="col-md-12">
			<p><button type="button" id="btnAdd" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Field</button></p>
		</div>
	</div>

	<div class="row group">
		<div class="form-group{{ $errors->has('bentuk') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="bentuk">Bentuk <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="bentuk[]" id="bentuk" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Bentuk-</option>
					<option value="persegi">Persegi</option>
					<option value="Persegi Panjang">Persegi Panjang</option>
				</select>
				@if ($errors->has('bentuk'))
				<span class="help-block">{{ $errors->first('bentuk') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('model_pegangan') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="model_pegangan">Model Pegangan <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="model_pegangan[]" id="model_pegangan" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Model Pegangan-</option>
					<option value="PP rope">PP rope</option>
					<option value="Cotton rope">Cotton rope</option>
					<option value="Nylon rope">Nylon rope</option>
					<option value="Ribbon ">Ribbon </option>
					<option value="Twisted Paper Handle">Twisted Paper Handle</option>
				</select>
				@if ($errors->has('model_pegangan'))
				<span class="help-block">{{ $errors->first('model_pegangan') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('ukuran') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="ukuran">Ukuran <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="ukuran[]" id="ukuran" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Ukuran-</option>
					<option value="190 X 90 X 320 MM">190 X 90 X 320 MM</option>
					<option value="300 x 130 x 415 MM">300 x 130 x 415 MM</option>
					<option value="435 X 130 X 540 MM">435 X 130 X 540 MM</option>
					<option value="110 X 50 X 190 MM">110 X 50 X 190 MM</option>
					<option value="190 X 90 X 320 MM">190 X 90 X 320 MM</option>
					<option value="300 x 130 x 415 MM">300 x 130 x 415 MM</option>
					<option value="435 X 130 X 540 MM">435 X 130 X 540 MM</option>
				</select>
				@if ($errors->has('ukuran'))
				<span class="help-block">{{ $errors->first('ukuran') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('bahan') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="bahan">Bahan <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="category" id="category" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih Jenis Finishing-</option>
					<option value="Art paper 128 – 300 gsm">Art paper 128 – 300 gsm</option>
					<option value="Ivory board 200 – 350 gsm">Ivory board 200 – 350 gsm</option>
					<option value="Kraft paper 100 – 300 gsm">Kraft paper 100 – 300 gsm</option>
					<option value="Special paper 120 – 300 gsm">Special paper 120 – 300 gsm</option>
					<option value="Material thickness from 0.1-0.4 mm">Material thickness from 0.1-0.4 mm</option>
				</select>
				@if ($errors->has('bahan'))
				<span class="help-block">{{ $errors->first('bahan') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('sisi') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="sisi">Sisi <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="sisi[]" id="sisi" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih sisi-</option>
					<option value="1 sisi">1 sisi</option>
					<option value="2 sisi">2 sisi</option>
				</select>
				@if ($errors->has('sisi'))
				<span class="help-block">{{ $errors->first('sisi') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jlh_pesanan') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jlh_pesanan">pesanan (lusin) <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jlh_pesanan[]" id="jlh_pesanan" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih Jumlah pesanan-</option>
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

		<div class="form-group{{ $errors->has('jns_finishing') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jns_finishing">Jenis Finishing <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jns_finishing[]" id="jns_finishing" class="category form-control col-md-7 col-xs-12">
					<option value="0" disabled="true" selected="true">-Pilih Jenis Finishing-</option>
					<option value="Standart">Standart</option>
					<option value="Laminasi">Laminasi</option>
					<option value="Laminasi dan Windows">Laminasi dan Windows</option>
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