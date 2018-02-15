@extends('templates.freelancer.layout')

@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Entry Product <a href="{{route('product.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content col-md-12">
                    <form method="post" action="{{ route('product.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-6" style="border: 1px solid #ccc; padding: 10px; margin-right: 10px;">
                            <div class="form-group{{ $errors->has('jdl_Pdk') ? ' has-error' : '' }}">
                                <label class="col-xs-12" for="jdl_Pdk">Judul Produk <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                    <input type="text" value="{{ Request::old('jdl_Pdk') ?: '' }}" id="product" name="jdl_Pdk" class="form-control col-md-7 col-xs-12">
                                    @if ($errors->has('jdl_Pdk'))
                                    <span class="help-block">{{ $errors->first('jdl_Pdk') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label class="col-xs-12" for="description">Description <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                    <textarea value="{{ Request::old('description') ?: '' }}" id="description" name="description" class="form-control col-md-7 col-xs-12" style="width: 484px; height: 103px;"></textarea>
                                    @if ($errors->has('description'))
                                    <span class="help-block">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 form-row" style="border: 1px solid #ccc; padding: 10px;">
                            <div class="form-group{{ $errors->has('harga_awal') ? ' has-error' : '' }} col-md-12">
                                <label class="col-xs-12" for="harga_awal">Harga Desain <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                    <input type="text" value="{{ Request::old('harga_awal') ?: '' }}" id="harga_awal" name="harga_awal" class="form-control col-md-7 col-xs-12">
                                    @if ($errors->has('harga_awal'))
                                    <span class="help-block">{{ $errors->first('harga_awal') }}</span>
                                    @endif
                                </div>
                            </div>
                            

                            <div class="form-group{{ $errors->has('product') ? ' has-error' : '' }} col-md-6">
                                <label class="col-xs-12" for="product">Category <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                    <select name="category" id="category" class="category form-control col-md-7 col-xs-12" data-token="{{ csrf_token()}}">
                                        <option value="0" disabled="true" selected="true">-Select Category-</option>
                                        @foreach($cat as $c)
                                            <option value="{{$c->id}}">{{$c->cat_name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category'))
                                    <span class="help-block">{{ $errors->first('category') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('subcategory_id') ? ' has-error' : '' }} col-md-6">
                                <label class="col-xs-12" for="subcategory_id">Sub Category <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                    <select name="subcategory_id" id="subcategory" class="subcategory form-control col-md-7 col-xs-12">
                                        <option value="0" disabled="true" selected="true">-Select Sub Category-</option>
                                    </select>
                                    @if ($errors->has('subcategory_id'))
                                    <span class="help-block">{{ $errors->first('subcategory_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><button type="button" id="btnAdd" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Field</button></p>
                                    </div>
                                </div>
                                <div class="row group">
                                    <div class="form-group{{ $errors->has('images') ? ' has-error' : '' }} col-md-12">
                                        <label class="col-xs-12" for="images">Image <span class="required">*</span>
                                        </label>
                                        <div class="col-xs-12">
                                            <input type="file" value="{{ Request::old('images') ?: '' }}" id="images" name="images[]" class="form-control col-md-7 col-xs-12">
                                            @if ($errors->has('images'))
                                            <span class="help-block">{{ $errors->first('images') }}</span>
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
                        
                        
                        <div class="col-md-5 form-row" style="padding: 10px;">
                            <div style="float: right; padding: 10px;">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@stop
