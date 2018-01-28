@extends('templates.admin.layout')

@section('content')

	<div class="">
	    <div class="clearfix"></div>
	    <div class="row">
	        <div class="col-md-12 col-sm-12 col-xs-12">
	            <div class="x_panel">
	                <div class="x_title">
	                    <h2>Create {{$subcategory->name}} Material <a href="{{route('material.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
	                    <div class="clearfix"></div>
	                </div>
	                <div class="x_content">
	                    <form method="POST" action="{{ route('material.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
	                        {{ csrf_field() }}

	                        <div class="x_content col-md-5 form-row">
	                        	<div class="x_content col-md-5 form-row" style="border: 1px solid #ccc; padding: 10px;">
		                        	@if($subcategory->id == 1)
			                        	@include('admin.material.include_material.kartunama')
		                        		@elseif($subcategory->id == 2)
		                        			@include('admin.material.include_material.squarecard')
		                        		@elseif($subcategory->id == 3)
		                        			@include('admin.material.include_material.amplop')
		                        		@elseif($subcategory->id == 4)
		                        			@include('admin.material.include_material.kopsurat')
		                        		@elseif($subcategory->id == 5)
		                        			@include('admin.material.include_material.stempel')
		                        		@elseif($subcategory->id == 6)
		                        			@include('admin.material.include_material.kalender')
		                        		@elseif($subcategory->id == 7)
		                        			@include('admin.material.include_material.brosur')
		                        		@elseif($subcategory->id == 8)
		                        			@include('admin.material.include_material.stiker')
		                        		@elseif($subcategory->id == 9)
		                        			@include('admin.material.include_material.poster')
		                        		@elseif($subcategory->id == 10)
		                        			@include('admin.material.include_material.goodlebag')
		                        		@elseif($subcategory->id == 11)
		                        			@include('admin.material.include_material.mug')
		                        		@elseif($subcategory->id == 12)
		                        			@include('admin.material.include_material.bantal')
		                        		@elseif($subcategory->id == 13)
		                        			@include('admin.material.include_material.spanduk')
		                        		@elseif($subcategory->id == 14)
		                        			@include('admin.material.include_material.xbanner')
		                        		@elseif($subcategory->id == 15)
		                        			@include('admin.material.include_material.roll')
		                        		@elseif($subcategory->id == 16)
		                        			@include('admin.material.include_material.kaos')
		                        		@elseif($subcategory->id == 17)
		                        			@include('admin.material.include_material.polo')
		                        	@endif

	                            

                        		</div>
	                        
	                        <div class="col-md-5 form-row" style="padding: 10px; float: right;">
	                            <div style="float: right; padding: 10px;">
	                                <input type="hidden" name="_token" value="{{ Session::token() }}">
	                                <input type="hidden" name="subcategory_id[]" value="{{$subcategory->id}}">
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