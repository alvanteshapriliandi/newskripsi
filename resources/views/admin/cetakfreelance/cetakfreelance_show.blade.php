@extends('templates.admin.layout')

@section('content')

    <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Status Prtuct <a href="{{route('cetakpesanan.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col col-md-8">                                
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <th colspan="2" style="background: #ccc; color: white; text-align: center;">Data User</th>
                                    </tr>
                                    @foreach($user as $u)
                                    <form method="post" action="{{ route('cetakpesanan.update', ['id' => $u->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                        <input name="_method" type="hidden" value="PATCH">
                                        {{ csrf_field() }}
                                    <tr>
                                        <th>UserName</th>
                                        <td>{{$u->username}}</td>
                                    </tr>
                                    <tr>
                                        <th>Date</th>
                                        <td>{{ date('F d, Y', strtotime($u->created_at))}}</td>
                                    </tr>
                                    <tr>
                                        <th>Ubah Status</th>
                                        <td><input type="checkbox" name="status" value="1"> Sudah dikonfimasi</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="text-align: center;">
                                            <input type="submit" name="btnupdate" value="Update Status" class="btn btn-success">
                                        </td>
                                    </tr>
                                    </form>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="col col-md-12">                                
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                @foreach($print as $p)
                                    <tbody>
                                        <tr>
                                            <td colspan="2" align="center" style="background: #ccc; color: white;">Order List {{$p->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Prtuct Name</td>
                                            <td>{{$p->jdl_Pdk}}</td>
                                        </tr>
                                        <tr>
                                            @if($p->jenis_kertas)
                                                <td>Jenis Kertas</td>
                                                <td>{{$p->jenis_kertas}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->kuantitas)
                                                <td>kuantitas</td>
                                                <td>{{$p->kuantitas}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->model)
                                                <td>model</td>
                                                <td>{{$p->model}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->kain)
                                                <td>kain</td>
                                                <td>{{$p->kain}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->ukuran)
                                                <td>ukuran</td>
                                                <td>{{$p->ukuran}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->warna)
                                                <td>warna</td>
                                                <td>{{$p->warna}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->jenis_cetak)
                                                <td>jenis cetak</td>
                                                <td>{{$p->jenis_cetak}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->bahan)
                                                <td>bahan</td>
                                                <td>{{$p->bahan}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->sisi)
                                                <td>sisi</td>
                                                <td>{{$p->sisi}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->jilid)
                                                <td>jilid</td>
                                                <td>{{$p->jilid}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->lembar)
                                                <td>lembar</td>
                                                <td>{{$p->lembar}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->cetak_depan)
                                                <td>cetak depan</td>
                                                <td>{{$p->cetak_depan}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->cetak_belakang)
                                                <td>cetak belakang</td>
                                                <td>{{$p->cetak_belakang}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->cetak_lengan_kanan)
                                                <td>cetak lengan kanan</td>
                                                <td>{{$p->cetak_lengan_kanan}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->cetak_lengan_kiri)
                                                <td>cetak lengan kiri</td>
                                                <td>{{$p->cetak_lengan_kiri}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->kaos_metode)
                                                <td>Kaos Mette</td>
                                                <td>{{$p->kaos_metode}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($p->images)
                                                <td>Gambar</td>
                                                <td>
                                                    <img src="{{asset('orders/'.$p->images)}}" width="200"><br>
                                                    <a href="{{asset('orders/'.$p->images)}}" download="{{$p->images}}" class="btn btn-success"><i class="fa fa-download"></i> download</a>
                                                </td>
                                            @endif
                                        </tr>
                                    </tbody>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop