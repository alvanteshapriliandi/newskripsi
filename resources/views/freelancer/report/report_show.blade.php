@extends('templates.freelancer.layout')

@section('content')


	<div class="">
	    <div class="clearfix"></div>
	    <div class="row">
	        <div class="col-md-12 col-sm-12 col-xs-12">
	            <div class="x_panel">
	                <div class="x_title">
	                    <h2>Form Entry Product <a href="{{route('report.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
	                    <div class="clearfix"></div>
	                </div>
	                <div class="x_content col-md-12">
	                    <form method="post" action="{{ route('report.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
	                        {{ csrf_field() }}
	                        <div class="col-md-12" style="border: 1px solid #ccc; padding: 10px; margin-right: 10px;">
	                        	@foreach($report as $r)
	                            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
	                                <label class="col-xs-12" for="comment">Ketikan Komentar anda terhadap pembayaran product {{$r->jdl_Pdk}}<span class="required">*</span>
	                                </label>
	                                <div class="col-xs-12">
	                                    <textarea type="text" value="{{ Request::old('comment') ?: '' }}" id="comment" name="comment" class="form-control col-md-7 col-xs-12" style="margin: 0px; width: 1174px; height: 203px;"></textarea>
	                                    @if ($errors->has('comment'))
	                                    <span class="help-block">{{ $errors->first('comment') }}</span>
	                                    @endif
	                                </div>
	                            </div>
	                            <input type="hidden" name="order_id" value="{{$r->id}}">
	                        	<input type="submit" name="btnsubmit" value="submit" class="btn btn-success" style="float: right;">
	                        	@endforeach
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

@stop