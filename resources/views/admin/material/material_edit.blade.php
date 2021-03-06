@extends('templates.admin.layout')

@section('content')

    <div class="">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List Material</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Subcategory</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Satuan</th>
                                    <th>Jenis Finishing</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Subcategory</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Satuan</th>
                                    <th>Jenis Finishing</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($material as $m)
                                <tr>
                                    <td>{{$m->name}}</td>
                                    <td>{{$m->jlh_pesanan}}</td>
                                    <td>{{$m->satuan}}</td>
                                    <td>{{$m->jns_finishing}}</td>
                                    <?php $m->harga = number_format($m->harga, 0, ",","."); ?>
                                    <td>{{$m->harga}}</td>
                                    <td align="center">
                                        <a href="{{route('submaterial.edit', ['id' => $m->id])}}" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('submaterial.show', ['id' => $m->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
