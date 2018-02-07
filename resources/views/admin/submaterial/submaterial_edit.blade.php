@extends('templates.admin.layout')

@section('content')

    <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Edit Material <a href="{{route('material.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col col-md-12">  
                            @foreach($submaterial as $sm)
                            <form method="POST" action="{{ route('submaterial.update', ['id' => $sm->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }} 
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td colspan="2" style="text-align: center;">Data Order List</td>
                                    </tr>
                                    <?php $smotal = 0;?>
                                    <tr>
                                        <td>Subcategory Name</td>
                                        <td>{{$sm->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pesanan</td>
                                        <td>{{$sm->jlh_pesanan}}</td>
                                    </tr>
                                    <tr>
                                        <td>Satuan</td>
                                        <td>{{$sm->satuan}}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Finishing</td>
                                        <td>{{$sm->jns_finishing}}</td>
                                    </tr>
                                    <tr>
                                        @if($sm->jns_kertas)
                                            <td>Jenis Kertas</td>
                                            <td>{{$sm->jns_kertas}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->bentuk)
                                            <td>bentuk</td>
                                            <td>{{$sm->bentuk}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->ukuran)
                                            <td>Ukuran</td>
                                            <td>{{$sm->ukuran}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->tipe_jilid)
                                            <td>Tipe Jilid</td>
                                            <td>{{$sm->tipe_jilid}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->jlh_lembar)
                                            <td>Jumlah Lembar</td>
                                            <td>{{$sm->jlh_lembar}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->jns_material)
                                            <td>Jenis Material</td>
                                            <td>{{$sm->jns_material}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->model_pegangan)
                                            <td>Model Pegangan</td>
                                            <td>{{$sm->model_pegangan}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->bahan)
                                            <td>Jenis Bahan</td>
                                            <td>{{$sm->bahan}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->sisi)
                                            <td>Sisi</td>
                                            <td>{{$sm->sisi}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->sisi)
                                            <td>Sisi</td>
                                            <td>{{$sm->sisi}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->jns_mug)
                                            <td>Jenis Mug</td>
                                            <td>{{$sm->jns_mug}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->model_bantal)
                                            <td>Model Bantal</td>
                                            <td>{{$sm->model_bantal}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->jenis_kain)
                                            <td>Jenis Kain</td>
                                            <td>{{$sm->jenis_kain}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->cetak_belakang)
                                            <td>Cetak Belakang</td>
                                            <td>{{$sm->cetak_belakang}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->cetak_lengan)
                                            <td>Cetak Lengan</td>
                                            <td>{{$sm->cetak_lengan}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->cetak_kiri)
                                            <td>Cetak Lengan Kiri</td>
                                            <td>{{$sm->cetak_kiri}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        @if($sm->berat)
                                            <td>Berat</td>
                                            <td>{{$sm->berat}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td>Harga Cetak</td>
                                        <td>
                                            <input type="text" value="{{$sm->harga}}" name="harga" class="form-control">
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <input type="submit" name="" value="Update" class="btn btn-success">
                        </form>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop