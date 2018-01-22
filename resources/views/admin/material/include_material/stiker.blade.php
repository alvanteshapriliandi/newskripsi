<div class="form-content">
	<div class="row">
		<div class="col-md-12">
			<p><button type="button" id="btnAdd" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Field</button></p>
		</div>
	</div>

	<div class="row group">
		<div class="form-group{{ $errors->has('harga_awal') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="harga_awal">Ukuran <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="category" id="category" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih Ukuran-</option>
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

		<div class="form-group{{ $errors->has('harga_awal') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="harga_awal">Jenis Material<span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="category" id="category" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih Jenis Material-</option>
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

		<div class="form-group{{ $errors->has('harga_awal') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="harga_awal">Jenis Finising <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="category" id="category" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih Jenis Finising-</option>
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

		<div class="form-group{{ $errors->has('harga_awal') ? ' has-error' : '' }} col-md-3">
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