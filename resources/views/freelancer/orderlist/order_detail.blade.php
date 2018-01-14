@extends('templates.freelancer.layout')

@section('content')

    <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Status Product <a href="{{route('order-list.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                
                    <form method="post" action="" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}
                        <div class="row">
                            <div class="col col-md-8">
                                @foreach($transaction as $t)
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Data User</th>
                                        </tr>
                                        <tr>
                                            <th>Name User</th>
                                            <td>{{$t->username}}</td>
                                            <td rowspan="3">
                                                <img src="{{asset('images/flat-faces-icons-circle-3.png')}}" width="100">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{$t->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Status Order</th>
                                            @if($t->status == 1)
                                                <td>Menunggu Konfimasi</td>
                                                @elseif($t->status == 2)
                                                <td>Dalam Proses Pengerjaan</td>
                                            @endif
                                        </tr>
                                    </tbody>
                                </table>
                                @endforeach
                            </div>
                            <div class="col col-md-12">
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <tbody>
                                        @foreach($order_detail as $od)
                                            <br>
                                            <tr>
                                                <td colspan="2" align="center" style="background: #ccc; color: white;">Order List {{$od->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Product Name</td>
                                                <td>{{$od->jdl_Pdk}}</td>
                                            </tr>
                                            <tr>
                                                @if($od->nama)
                                                    <td>Nama</td>
                                                    <td>{{$od->nama}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->jabatan)
                                                    <td>jabatan</td>
                                                    <td>{{$od->jabatan}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->nama_perushaan)
                                                    <td>Nama Prusahaan</td>
                                                    <td>{{$od->nama_perushaan}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->alamat)
                                                    <td>Alamat</td>
                                                    <td>{{$od->alamat}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->no_telepon)
                                                    <td>Nomor Telepon</td>
                                                    <td>{{$od->no_telepon}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->email)
                                                    <td>E-mail</td>
                                                    <td>{{$od->email}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->jenis_kertas)
                                                    <td>Jenis Kertas</td>
                                                    <td>{{$od->jenis_kertas}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->model)
                                                    <td>Model</td>
                                                    <td>{{$od->model}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->kain)
                                                    <td>Jenis Kain</td>
                                                    <td>{{$od->kain}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->ukuran)
                                                    <td>Ukuran</td>
                                                    <td>{{$od->ukuran}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->warna)
                                                    <td>Warna</td>
                                                    <td>{{$od->warna}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->jenis_cetak)
                                                    <td>Jenis Cetak</td>
                                                    <td>{{$od->jenis_cetak}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->bahan)
                                                    <td>Jenis Bahan</td>
                                                    <td>{{$od->bahan}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->sisi)
                                                    <td>Sisi</td>
                                                    <td>{{$od->sisi}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->jilid)
                                                    <td>Jilid</td>
                                                    <td>{{$od->jilid}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->lembar)
                                                    <td>Cetak Depan</td>
                                                    <td>{{$od->lembar}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->cetak_belakang)
                                                    <td>Cetak Belakang</td>
                                                    <td>{{$od->cetak_belakang}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->cetak_lengan_kanan)
                                                    <td>Cetak Lengan Kanan</td>
                                                    <td>{{$od->cetak_lengan_kanan}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->cetak_lengan_kiri)
                                                    <td>Cetak Lengan Kiri</td>
                                                    <td>{{$od->cetak_lengan_kiri}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->kaos_metode)
                                                    <td>Kaos Metode</td>
                                                    <td>{{$od->kaos_metode}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->images)
                                                    <td>Gambar</td>
                                                    <td><img src="{{asset('orders/'.$od->images)}}" width="150"></td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($od->description)
                                                    <td>Description</td>
                                                    <td>{{$od->description}}</td>
                                                @endif
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
</div>

@stop
