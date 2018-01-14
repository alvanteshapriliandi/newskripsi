@extends('templates.admin.layout')

@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Create Bank <a href="{{route('bank.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="post" action="{{ route('bank.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('atas_nama') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="atas_nama">Kepemilikan <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('atas_nama') ?: '' }}" id="bank" name="atas_nama" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('atas_nama'))
                                <span class="help-block">{{ $errors->first('atas_nama') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name_bank') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name_bank">Nama Bank <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('name_bank') ?: '' }}" id="bank" name="name_bank" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('name_bank'))
                                <span class="help-block">{{ $errors->first('name_bank') }}</span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('no_rekening') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_rekening">Nomor Rekening <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('no_rekening') ?: '' }}" id="product" name="no_rekening" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('no_rekening'))
                                <span class="help-block">{{ $errors->first('no_rekening') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('images_bank') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="images_bank">Image <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" value="{{ Request::old('images_bank') ?: '' }}" id="images_bank" name="images_bank" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('images_bank'))
                                <span class="help-block">{{ $errors->first('images_bank') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <button type="submit" class="btn btn-success">Create bank</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@stop
