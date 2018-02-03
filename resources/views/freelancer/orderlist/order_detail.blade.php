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
                                              @if($os->status == 0)
                                                <td>Menunggu Konfirmasi</td>
                                                @elseif($os->status == 1)
                                                    <td>Dalam Proses Pengerjaan</td>
                                                @elseif($os->status == 2)
                                                    <td>Dalam Proses Pengeriman</td>
                                                @elseif($os->status == 3)
                                                    <td>Barang Sudah Diterima</td>
                                                @elseif($os->status == 4)
                                                    <td>Barang Sudah Diterima</td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
                            <div class="col col-md-12">
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    @foreach($orderlist as $os)
                                    <tbody>
                                        <tr>
                                            <td colspan="2" align="center" style="background: #ccc; color: white;">Order List {{$os->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Prtuct Name</td>
                                            <td>{{$os->jdl_Pdk}}</td>
                                        </tr>
                                        <tr>
                                            @if($os->nama)
                                                <td>Nama</td>
                                                <td>{{$os->name}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->jabatan)
                                                <td>jabatan</td>
                                                <td>{{$os->jabatan}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->nama_perusahaan)
                                                <td>Nama Prusahaan</td>
                                                <td>{{$os->nama_perusahaan}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->alamat)
                                                <td>Alamat</td>
                                                <td>{{$os->alamat}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->no_telpon)
                                                <td>Nomor Telepon</td>
                                                <td>{{$os->no_telpon}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->email)
                                                <td>E-mail</td>
                                                <td>{{$os->email}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->jenis_kertas)
                                                <td>Jenis Kertas</td>
                                                <td>{{$os->jenis_kertas}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->model)
                                                <td>Mpdel</td>
                                                <td>{{$os->model}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->kain)
                                                <td>Jenis Kain</td>
                                                <td>{{$os->kain}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->ukuran)
                                                <td>Ukuran</td>
                                                <td>{{$os->ukuran}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->warna)
                                                <td>Warna</td>
                                                <td>{{$os->warna}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->jenis_cetak)
                                                <td>Jenis Finishing</td>
                                                <td>{{$os->jenis_cetak}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->bahan)
                                                <td>Jenis Bahan</td>
                                                <td>{{$os->bahan}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->sisi)
                                                <td>Sisi</td>
                                                <td>{{$os->sisi}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->jilid)
                                                <td>Jilid</td>
                                                <td>{{$os->jilid}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->lembar)
                                                <td>Cetak Depan</td>
                                                <td>{{$os->lembar}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->cetak_belakang)
                                                <td>Cetak Belakang</td>
                                                <td>{{$os->cetak_belakang}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->cetak_lengan_kanan)
                                                <td>Cetak Lengan Kanan</td>
                                                <td>{{$os->cetak_lengan_kanan}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->cetak_lengan_kiri)
                                                <td>Cetak Lengan Kiri</td>
                                                <td>{{$os->cetak_lengan_kiri}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->kaos_metode)
                                                <td>Kaos Mette</td>
                                                <td>{{$os->kaos_mette}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->images)
                                                <td>Gambar</td>
                                                <td><img src="{{asset('orders/'.$os->images)}}" width="150"></td>
                                            @endif
                                        </tr>
                                        <tr>
                                            @if($os->description)
                                                <td>Description</td>
                                                <td>{{$os->description}}</td>
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
