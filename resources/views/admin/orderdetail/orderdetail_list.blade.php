@extends('templates.admin.layout')

@section('content')

    <div class="">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Status Order</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Name Product</th>
                                    <th>Subcategory</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Username</th>
                                    <th>Name Product</th>
                                    <th>Subcategory</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($banner as $ban)
                                <tr>
                                    <td>{{$ban->username}}</td>
                                    <td>{{$ban->jdl_Pdk}}</td>
                                    <td>{{$ban->name}}</td>
                                    @if($ban->BN_status == 0)
                                        <td>Belum ada Transaksi</td>
                                        @else
                                        <td>Sudah ada Transaksi</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($ban->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($ban->created_at))}}</td>
                                </tr>
                                @endforeach

                                @foreach($bantalfoto as $btl)
                                <tr>
                                    <td>{{$btl->username}}</td>
                                    <td>{{$btl->jdl_Pdk}}</td>
                                    <td>{{$btl->name}}</td>
                                    @if($btl->BT_status == 0)
                                        <td>Belum ada Transaksi</td>
                                        @else
                                        <td>Sudah ada Transaksi</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($btl->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($btl->created_at))}}</td>
                                </tr>
                                @endforeach

                                @foreach($brosur as $br)
                                <tr>
                                    <td>{{$br->username}}</td>
                                    <td>{{$br->jdl_Pdk}}</td>
                                    <td>{{$br->name}}</td>
                                    @if($br->BR_status == 0)
                                        <td>Belum ada Transaksi</td>
                                        @else
                                        <td>Sudah ada Transaksi</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($br->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($br->created_at))}}</td>
                                </tr>
                                @endforeach

                                @foreach($goodlebag as $gd)
                                <tr>
                                    <td>{{$gd->username}}</td>
                                    <td>{{$gd->jdl_Pdk}}</td>
                                    <td>{{$gd->name}}</td>
                                    @if($gd->GD_status == 0)
                                        <td>Belum ada Transaksi</td>
                                        @else
                                        <td>Sudah ada Transaksi</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($gd->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($gd->created_at))}}</td>
                                </tr>
                                @endforeach

                                @foreach($kalender as $KL)
                                <tr>
                                    <td>{{$KL->username}}</td>
                                    <td>{{$KL->jdl_Pdk}}</td>
                                    <td>{{$KL->name}}</td>
                                    @if($KL->KL_status == 0)
                                        <td>Belum ada Transaksi</td>
                                        @else
                                        <td>Sudah ada Transaksi</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($KL->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($KL->created_at))}}</td>
                                </tr>
                                @endforeach

                                @foreach($kaos as $KS)
                                <tr>
                                    <td>{{$KS->username}}</td>
                                    <td>{{$KS->jdl_Pdk}}</td>
                                    <td>{{$KS->name}}</td>
                                    @if($KS->KS_status == 0)
                                        <td>Belum ada Transaksi</td>
                                        @else
                                        <td>Sudah ada Transaksi</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($KS->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($KS->created_at))}}</td>
                                </tr>
                                @endforeach

                                @foreach($kartu as $KR)
                                <tr>
                                    <td>{{$KR->username}}</td>
                                    <td>{{$KR->jdl_Pdk}}</td>
                                    <td>{{$KR->name}}</td>
                                    @if($KR->KR_status == 0)
                                        <td>Belum ada Transaksi</td>
                                        @else
                                        <td>Sudah ada Transaksi</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($KR->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($KR->created_at))}}</td>
                                </tr>
                                @endforeach

                                @foreach($mug as $mg)
                                <tr>
                                    <td>{{$mg->username}}</td>
                                    <td>{{$mg->jdl_Pdk}}</td>
                                    <td>{{$mg->name}}</td>
                                    @if($mg->MG_status == 0)
                                        <td>Belum ada Transaksi</td>
                                        @else
                                        <td>Sudah ada Transaksi</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($mg->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($mg->created_at))}}</td>
                                </tr>
                                @endforeach

                                @foreach($office as $of)
                                <tr>
                                    <td>{{$of->username}}</td>
                                    <td>{{$of->jdl_Pdk}}</td>
                                    <td>{{$of->name}}</td>
                                    @if($of->OF_status == 0)
                                        <td>Belum ada Transaksi</td>
                                        @else
                                        <td>Sudah ada Transaksi</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($of->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($of->created_at))}}</td>
                                </tr>
                                @endforeach

                                @foreach($polo as $pl)
                                <tr>
                                    <td>{{$pl->username}}</td>
                                    <td>{{$pl->jdl_Pdk}}</td>
                                    <td>{{$pl->name}}</td>
                                    @if($pl->PL_status == 0)
                                        <td>Belum ada Transaksi</td>
                                        @else
                                        <td>Sudah ada Transaksi</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($pl->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($pl->created_at))}}</td>
                                </tr>
                                @endforeach

                                @foreach($poster as $pt)
                                <tr>
                                    <td>{{$pt->username}}</td>
                                    <td>{{$pt->jdl_Pdk}}</td>
                                    <td>{{$pt->name}}</td>
                                    @if($pt->PT_status == 0)
                                        <td>Belum ada Transaksi</td>
                                        @else
                                        <td>Sudah ada Transaksi</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($pt->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($pt->created_at))}}</td>
                                </tr>
                                @endforeach

                                @foreach($stempel as $sm)
                                <tr>
                                    <td>{{$sm->username}}</td>
                                    <td>{{$sm->jdl_Pdk}}</td>
                                    <td>{{$sm->name}}</td>
                                    @if($sm->SM_status == 0)
                                        <td>Belum ada Transaksi</td>
                                        @else
                                        <td>Sudah ada Transaksi</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($sm->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($sm->created_at))}}</td>
                                </tr>
                                @endforeach

                                @foreach($stiker as $st)
                                <tr>
                                    <td>{{$st->username}}</td>
                                    <td>{{$st->jdl_Pdk}}</td>
                                    <td>{{$st->name}}</td>
                                    @if($st->ST_status == 0)
                                        <td>Belum ada Transaksi</td>
                                        @else
                                        <td>Sudah ada Transaksi</td>
                                    @endif
                                    <td>{{ date('F d, Y', strtotime($st->created_at))}}</td>
                                    <td>{{ date('H:m:s', strtotime($st->created_at))}}</td>
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
