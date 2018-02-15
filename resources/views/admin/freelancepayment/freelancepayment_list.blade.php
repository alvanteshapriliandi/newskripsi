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
                        <table id="datatable-buttons" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Freelance Name</th>
                                    <th>Nama Produk</th>
                                    <th>Sub Category</th>
                                    <th>Harga Produk</th>
                                    <th>Date Time</th>
                                    <th>Action</th> 
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Freelance Name</th>
                                    <th>Nama Produk</th>
                                    <th>Sub Category</th>
                                    <th>Harga Produk</th>
                                    <th>Date Time</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($pay as $p)
                                  @if($p->status == 3)
                                    @if($p->status_frpay == 0)
                                    <tr>
                                        <form method="post" action="{{ route('freelance-payment.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <td>{{$p->username}}</td>
                                        <td>{{$p->jdl_Pdk}}</td>
                                        <td>{{$p->name}}</td>
                                        <?php $p->harga_awal = number_format($p->harga_awal, 1, ",","."); ?>
                                        <td>{{$p->harga_awal}}</td>
                                        <td>{{ date('F d, Y', strtotime($p->updated_at))}} {{ date('H:m:s', strtotime($p->updated_at))}}</td>
                                        <td>
                                            <input type="hidden" name="order_id" value="{{$p->id}}">
                                            <input type="hidden" name="total" value="{{$p->harga_awal}}">
                                            <input type="submit" name="btnpay" value="bayar" class="btn btn-info">
                                        </td>
                                        </form>
                                    </tr>
                                    @endif
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
