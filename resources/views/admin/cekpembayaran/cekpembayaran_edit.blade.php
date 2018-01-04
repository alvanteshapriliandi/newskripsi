@extends('templates.admin.layout')

@section('content')


	<div class="">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Cek Pembayaran</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                    	@foreach($pay as $p)
                    	<form method="post" action="{{ route('cekpembayaran.update', ['id' => $p->id]) }}" data-parsley-validate enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}>
	                        <table id="datatable-buttons" class="table table-striped table-bordered">
	                        	
	                        	<tr>
	                        		<th>Kode Invoice</th>
	                        		<td>{{$p->kd_invoice}}</td>
	                        	</tr>
	                            <tr>
	                            	<th>Username</th>
	                            	<td>{{$p->username}}</td>
	                            </tr>
	                            <tr>
	                            	<th>Image</th>
	                            	<td><img src="{{asset('pembayaran/'.$p->images)}}" width="300"></td>
	                            </tr>
	                            <tr>
	                            	<th>Status</th>
	                            	<td>
	                            		<input type="radio" name="status" value="1"> Sudah Di Konfirmasi
	                            	</td>
	                            </tr>
	                            <tr>
	                            	<td colspan="2">
	                            		<input type="submit" name="btninput" value="update" class="btn btn-success">
	                            	</td>
	                            </tr>
	                            
	                        </table>
                    	</form>
                    	@endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop