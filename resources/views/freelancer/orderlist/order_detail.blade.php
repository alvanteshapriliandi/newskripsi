@extends('templates.freelancer.layout')

@section('content')

    <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Status Prtuct <a href="{{route('order.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                
                    <form metht="post" action="" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        <input name="_metht" type="hidden" value="PATCH">
                            {{ csrf_field() }}
                        <div class="row">
                            <div class="col col-md-8">                                
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Data User</th>
                                        </tr>
                                        @foreach($order_user as $os)
                                        <tr>
                                            <th>Name User</th>
                                            <td>{{$os->username}}</td>
                                            <td rowspan="3">
                                                <img src="{{asset('images/flat-faces-icons-circle-3.png')}}" width="100">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{$os->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Status Order</th>
                                            @if($os->status == 1)
                                                <td>Menunggu Konfimasi</td>
                                                @elseif($os->status == 2)
                                                <td>Dalam Proses Pengerjaan</td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
                            <div class="col col-md-12">
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    @foreach($transaction as $t)
                                    <tbody>
                                        <tr>
                                            <td colspan="2" align="center" style="background: #ccc; color: white;">Order List {{$t->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Prtuct Name</td>
                                            <td>{{$t->jdl_Pdk}}</td>
                                        </tr>
                                        <tr>
                                            @if($t->nama)
                                                <td>Nama</td>
                                                <td>{{$t->name}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->jabatan)
                                                <td>jabatan</td>
                                                <td>{{$t->jabatan}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->nama_perusahaan)
                                                <td>Nama Prusahaan</td>
                                                <td>{{$t->nama_perusahaan}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->alamat)
                                                <td>Alamat</td>
                                                <td>{{$t->alamat}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->no_telpon)
                                                <td>Nomor Telepon</td>
                                                <td>{{$t->no_telpon}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->email)
                                                <td>E-mail</td>
                                                <td>{{$t->email}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->jenis_kertas)
                                                <td>Jenis Kertas</td>
                                                <td>{{$t->jenis_kertas}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->model)
                                                <td>Mtel</td>
                                                <td>{{$t->mtel}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->kain)
                                                <td>Jenis Kain</td>
                                                <td>{{$t->kain}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->ukuran)
                                                <td>Ukuran</td>
                                                <td>{{$t->ukuran}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->warna)
                                                <td>Warna</td>
                                                <td>{{$t->warna}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->jenis_cetak)
                                                <td>Jenis Finishing</td>
                                                <td>{{$t->jenis_cetak}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->bahan)
                                                <td>Jenis Bahan</td>
                                                <td>{{$t->bahan}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->sisi)
                                                <td>Sisi</td>
                                                <td>{{$t->sisi}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->jilid)
                                                <td>Jilid</td>
                                                <td>{{$t->jilid}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->lembar)
                                                <td>Cetak Depan</td>
                                                <td>{{$t->lembar}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->cetak_belakang)
                                                <td>Cetak Belakang</td>
                                                <td>{{$t->cetak_belakang}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->cetak_lengan_kanan)
                                                <td>Cetak Lengan Kanan</td>
                                                <td>{{$t->cetak_lengan_kanan}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->cetak_lengan_kiri)
                                                <td>Cetak Lengan Kiri</td>
                                                <td>{{$t->cetak_lengan_kiri}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->kaos_metode)
                                                <td>Kaos Mette</td>
                                                <td>{{$t->kaos_mette}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->images)
                                                <td>Gambar</td>
                                                <td><img src="{{asset('orders/'.$t->images)}}" width="150"></td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($t->description)
                                                <td>Description</td>
                                                <td>{{$t->description}}</td>
                                            @endif
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
