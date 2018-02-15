@extends('templates.admin.layout')

@section('content')

    <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Status Product <a href="{{route('orderlist.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col col-md-8">                                
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Data User</th>
                                    </tr>
                                    @foreach($data_order as $do)
                                    <form method="post" action="{{ route('orderlist.update', ['id' => $do->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                        <input name="_method" type="hidden" value="PATCH">
                                        {{ csrf_field() }}
                                    <tr>
                                        <th>Kode Invoice</th>
                                        <td>{{$do->kode_invoice}}</td>
                                        <td rowspan="3" style="text-align: center;">
                                            <img src="{{asset('pembayaran/'.$do->images)}}" width="200">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>User Name</th>
                                        <td>{{$do->username}}</td>
                                    </tr>
                                    <tr>
                                        <th>Bank Name</th>
                                        <td>{{$do->name_bank}}</td>
                                    </tr>
                                    <tr>

                                        <th>Ubah Status</th>
                                        <td>
                                            @if($do->status_transaksi == 0)
                                                <input type="checkbox" name="status" value="1"> Sudah dikonfimasi
                                                @elseif($do->status_transaksi == 1)
                                                    Disetujui
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="text-align: center;">
                                            @if($do->status_transaksi == 0)
                                                <input type="submit" name="btnupdate" value="Update Status" class="btn btn-success">
                                            @endif
                                        </td>
                                    </tr>
                                    </form>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="col col-md-12">                                
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <th colspan="2" style="text-align: center;">Data Order List</th>
                                    </tr>
                                    <?php $total = 0; ?>
                                    @foreach($order_list as $dl)
                                    <?php 
                                        $subtotal = $dl->harga * $dl->kuantitas;
                                        $total = ($dl->harga * $dl->kuantitas) + $dl->harga_awal;
                                    ?>
                                    <tr>
                                        <th>Freelance Name</th>
                                        <td>{{$dl->username}}</td>
                                    </tr>
                                    <tr>
                                        <th>Product Name</th>
                                        <td>{{$dl->jdl_Pdk}}</td>
                                    </tr>
                                    <tr>
                                        <th>Subcategory</th>
                                        <td>{{$dl->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Kuantitas</th>
                                        <td>{{$dl->kuantitas}}</td>
                                    </tr>
                                    <?php 
                                        $dl->harga_awal = number_format($dl->harga_awal, 0, ",",".");
                                        $subtotal = number_format($subtotal, 0, ",",".");
                                        $total = number_format($total, 0, ",","."); 
                                    ?>
                                    <tr>
                                        <th>Harga Desain <i>(Rp)</i> </th>
                                        <td>{{$dl->harga_awal}}</td>
                                    </tr>
                                    <tr>
                                        <th>Sub Total Material <i>(Rp)</i> </th>
                                        <td>{{$subtotal}}</td>
                                    </tr>              
                                    <tr>
                                        @if($dl->status_transaksi == 1)
                                            <th>Status</th>
                                            @if($dl->status == 0)
                                                <td>Menunggu Konfirmasi</td>
                                                @elseif($dl->status == 1)
                                                <td>Dalam Proses Pengerjaan</td>
                                                @elseif($dl->status == 2)
                                                <td>Dalam Proses Pengiriman</td>
                                                @elseif($dl->status == 3)
                                                <td>Barang Sudah Di terima</td>
                                                @else
                                                <td>Pembayaran selesai</td>
                                            @endif
                                        @endif
                                    </tr>                      
                                    @endforeach
                                    <tr>
                                        <td colspan="2" style="text-align: center; font-size: 20px;">Total <i>(Rp)</i> = {{$total}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop