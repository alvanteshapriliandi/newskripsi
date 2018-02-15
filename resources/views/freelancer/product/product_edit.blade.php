@extends('templates.freelancer.layout')

@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Product <a href="{{route('product.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    @foreach($products as $product)
                    <form method="post" action="{{ route('product.update', ['id' => $product->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}

                        <div class="col-md-6" style="border: 1px solid #ccc; padding: 10px; margin-right: 10px;">
                            <div class="form-group{{ $errors->has('jdl_Pdk') ? ' has-error' : '' }}">
                                <label class="col-xs-12" for="jdl_Pdk">Judul Produk <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                    <input type="text" value="{{ $product->jdl_Pdk }}" id="product" name="jdl_Pdk" class="form-control col-md-7 col-xs-12">
                                    @if ($errors->has('jdl_Pdk'))
                                    <span class="help-block">{{ $errors->first('jdl_Pdk') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label class="col-xs-12" for="description">Description <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                    <textarea value="{{ Request::old('description') ?: '' }}" id="description" name="description" class="form-control col-md-7 col-xs-12" style="width: 484px; height: 103px;">{{ $product->description }}</textarea>
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
                                    <input type="text" value="{{ $product->harga_awal }}" id="harga_awal" name="harga_awal" class="form-control col-md-7 col-xs-12">
                                    @if ($errors->has('harga_awal'))
                                    <span class="help-block">{{ $errors->first('harga_awal') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('product') ? ' has-error' : '' }} col-md-6">
                                <label class="col-xs-12" for="product">Category <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                     <input type="text" value="{{ $product->cat_name }}" id="harga_awal" readonly="true" disabled="true" name="harga_awal" class="form-control col-md-7 col-xs-12">
                                    @if ($errors->has('category'))
                                    <span class="help-block">{{ $errors->first('category') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('subcategory_id') ? ' has-error' : '' }} col-md-6">
                                <label class="col-xs-12" for="subcategory_id">Sub Category <span class="required">*</span>
                                </label>
                                <div class="col-xs-12">
                                     <input type="text" value="{{ $product->name }}" id="subcategory_id" readonly="true" disabled="true" name="" class="form-control col-md-7 col-xs-12">
                                     <input type="hidden" name="subcategory_id" value="{{$product->subcategory_id}}">
                                    @if ($errors->has('subcategory_id'))
                                    <span class="help-block">{{ $errors->first('subcategory_id') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label class="col-xs-12" for="harga_awal">Images <span class="required">*</span>
                                </label>
                                @foreach($images as $i)
                                <div class="col-xs-4">
                                    <img src="{{asset('uploads/'.$i->images)}}" width="130"><br>
                                    <form method="DELETE" action="{{url('deleteimages/'.$i->id)}}">
                                        
                                        <button class="btn btn-danger btn-block"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                                @endforeach
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
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop
