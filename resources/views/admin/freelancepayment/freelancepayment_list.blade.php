@extends('templates.admin.layout')

@section('content')

    <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Freelance Payment List</h2>
                    <div class="clearfix"></div>
                </div>
                <div>
                    <table id="datatable-buttons" class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Freelance Name</th>
                                <th>Nama Produk</th>
                                <th>Sub Category</th>
                                <th>Harga Produk</th>
                                <th>Pendapatan</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Freelance Name</th>
                                <th>Nama Produk</th>
                                <th>Sub Category</th>
                                <th>Harga Produk</th>
                                <th>Pendapatan</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($pay as $p)
                              @if($p->status == 4)
                              <tr>
                                <td>{{$p->username}}</td>
                                <td>{{$p->jdl_Pdk}}</td>
                                <td>{{$p->name}}</td>
                                <td>{{$p->total}}</td>
                                <td>{{$p->total * 30 /100}}</td>
                                <td>{{ date('F d, Y', strtotime($p->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($p->updated_at))}}</td>
                              </tr>
                              @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
