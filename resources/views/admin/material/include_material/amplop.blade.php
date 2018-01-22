<div class="form-content">
	<div class="row">
		<div class="col-md-12">
			<p><button type="button" id="btnAdd" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Field</button></p>
		</div>
	</div>

	<div class="row group">
		<div class="form-group{{ $errors->has('jlh_pesanan') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jlh_pesanan">Jumlah Pesanan <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jlh_pesanan[]" id="jlh_pesanan" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
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

		<div class="form-group{{ $errors->has('jns_kertas') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jns_kertas">Jenis Kertas <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jns_kertas[]" id="jns_kertas" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih Total Pesanan-</option>
					<option value="50">50</option>
					<option value="50">100</option>
					<option value="50">200</option>
					<option value="50">300</option>
					<option value="50">400</option>
				</select>
				@if ($errors->has('jns_kertas'))
				<span class="help-block">{{ $errors->first('jns_kertas') }}</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('jns_finishing') ? ' has-error' : '' }} col-md-3">
			<label class="col-xs-12" for="jns_finishing">Jenis Finishing <span class="required">*</span>
			</label>
			<div class="col-xs-12">
				<select name="jns_finishing[]" id="jns_finishing" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
					<option value="0" disabled="true" selected="true">-Pilih Jenis Kertas-</option>
					<option value="50">50</option>
					<option value="50">100</option>
					<option value="50">200</option>
					<option value="50">300</option>
					<option value="50">400</option>
				</select>
				@if ($errors->has('jns_finishing'))
				<span class="help-block">{{ $errors->first('jns_finishing') }}</span>
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