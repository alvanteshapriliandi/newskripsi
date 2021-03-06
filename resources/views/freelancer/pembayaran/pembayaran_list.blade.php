@extends('templates.freelancer.layout')

@section('content')

	<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Order List</h2>
                    <div class="clearfix"></div>
                </div>
                <div>
                    <table id="datatable-buttons" class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Sub Category</th>
                                <th>Harga Desain <i>(Rp)</i></th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Sub Category</th>
                                <th>Harga Desain <i>(Rp)</i></th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $saldo = 0; ?>
                            @foreach($pembayaran as $bayar)
                              <tr>
                                <td>{{$bayar->jdl_Pdk}}</td>
                                <td>{{$bayar->name}}</td>
                                <?php 
                                    $saldo += $bayar->harga_awal;
                                ?>
                                <td>{{$bayar->harga_awal = number_format($bayar->harga_awal, 0, ",",".")}}</td>
                                <td>{{ date('F d, Y', strtotime($bayar->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($bayar->updated_at))}}</td>
                              </tr>
                            @endforeach
                            <tr>
                                <th colspan="2" style="font-size: 20px; background: #ccc;">Saldo Anda <i>(Rp)</i>: </th>
                                <th colspan="3" style="font-size: 20px; background: #ccc;">{{$saldo = number_format($saldo, 0, ",",".")}}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
