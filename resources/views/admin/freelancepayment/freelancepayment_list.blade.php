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
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($pay as $p)
                              @if($p->status == 4)
                                @if($p->status_frpay == 0)
                                  <tr>
                                    <form method="post" action="{{ route('freelance-payment.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <td>{{$p->username}}</td>
                                    <td>{{$p->jdl_Pdk}}</td>
                                    <td>{{$p->name}}</td>
                                    <td>{{$p->harga_awal}}</td>
                                    <td>{{ date('F d, Y', strtotime($p->updated_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($p->updated_at))}}</td>
                                    <td>
                                        <input type="hidden" name="order_id" value="{{$p->id}}">
                                        <input type="hidden" name="total" value="{{$total}}">
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
