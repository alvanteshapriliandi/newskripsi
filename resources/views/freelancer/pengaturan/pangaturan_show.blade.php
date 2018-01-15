@extends('templates.freelancer.layout')

@section('content')

	<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Pengaturan</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content col-md-12">
                    <form data-parsley-validate class="form-horizontal form-label-left">
                        {{ csrf_field() }}
                    	
                        <div class="row">
                            <div class="col col-md-12">                                
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th colspan="3" style="text-align: center;">Data Freelancer</th>
                                        </tr>
                                        @foreach($pengaturan as $p)
                                        <tr>
                                            <th>Name</th>
                                            <td>{{$p->username}}</td>
                                            <td rowspan="3" style="text-align: center">
                                                <img src="{{asset('member/'.$p->photo)}}" width="150">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>E-mail</th>
                                            <td>{{$p->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>{{$p->address}}</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            @if($p->gender == 1)
                                            	<td colspan="2">Laki-Laki</td>
                                            	@else
                                            		<td colspan="2">Perempuan</td>
                                           	@endif
                                        </tr>
                                        <tr>
                                        	<th>No. Rekening</th>
                                        	<td colspan="2">{{$p->no_rekening}}</td>
                                        </tr>
                                        <tr>
                                        	<td colspan="3" style="text-align: center;">
                                        		<a href="{{route('pengaturan.edit', ['id' => $p->id])}}" class="btn btn-success"><i class="fa fa-pencil"></i> Edit Profil</a>
                                        	</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop