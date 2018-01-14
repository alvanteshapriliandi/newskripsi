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
                                <th>Harga Produk</th>
                                <th>Pendapatan</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Sub Category</th>
                                <th>Harga Produk</th>
                                <th>Pendapatan</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($banner as $ban)
                              @if($ban->status == 4)
                              <tr>
                                <td>{{$ban->jdl_Pdk}}</td>
                                <td>{{$ban->name}}</td>
                                <td>{{$ban->BN_total}}</td>
                                <td>{{$ban->BN_total * 30 /100}}</td>
                                <td>{{ date('F d, Y', strtotime($ban->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($ban->updated_at))}}</td>
                              </tr>
                              @endif
                            @endforeach

                            @foreach($bantal as $btl)
                              @if($btl->status == 4)
                              <tr>
                                <td>{{$btl->jdl_Pdk}}</td>
                                <td>{{$btl->name}}</td>
                                <td>{{$btl->BT_total}}</td>
                                <td>{{$btl->BT_total * 30 /100}}</td>
                                <td>{{ date('F d, Y', strtotime($btl->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($btl->updated_at))}}</td>
                              </tr>
                              @endif
                            @endforeach

                            @foreach($brosur as $brs)
                              @if($brs->status == 4)
                              <tr>
                                <td>{{$brs->jdl_Pdk}}</td>
                                <td>{{$brs->name}}</td>
                                <td>{{$brs->BR_total}}</td>
                                <td>{{$brs->BR_total * 30 /100}}</td>
                                <td>{{ date('F d, Y', strtotime($brs->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($brs->updated_at))}}</td>
                              </tr>
                              @endif
                            @endforeach

                            @foreach($goodle as $gdl)
                              @if($brs->status == 4)
                              <tr>
                                <td>{{$gdl->jdl_Pdk}}</td>
                                <td>{{$gdl->name}}</td>
                                <td>{{$gdl->GD_total}}</td>
                                <td>{{$gdl->GD_total * 30 /100}}</td>
                                <td>{{ date('F d, Y', strtotime($gdl->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($gdl->updated_at))}}</td>
                              </tr>
                              @endif
                            @endforeach

                            @foreach($kalender as $klr)
                              @if($klr->status == 4)
                              <tr>
                                <td>{{$klr->jdl_Pdk}}</td>
                                <td>{{$klr->name}}</td>
                                <td>{{$klr->KL_total}}</td>
                                <td>{{$klr->KL_total * 30 /100}}</td>
                                <td>{{ date('F d, Y', strtotime($klr->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($klr->updated_at))}}</td>
                              </tr>
                              @endif
                            @endforeach

                            @foreach($kaos as $kas)
                              @if($kas->status == 4)
                              <tr>
                                <td>{{$kas->jdl_Pdk}}</td>
                                <td>{{$kas->name}}</td>
                                <td>{{$kas->KS_total}}</td>
                                <td>{{$kas->KS_total * 30 /100}}</td>
                                <td>{{ date('F d, Y', strtotime($kas->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($kas->updated_at))}}</td>
                              </tr>
                              @endif
                            @endforeach

                            @foreach($kartu as $krt)
                              @if($krt->status == 4)
                              <tr>
                                <td>{{$krt->jdl_Pdk}}</td>
                                <td>{{$krt->name}}</td>
                                <td>{{$krt->KR_total}}</td>
                                <td>{{$krt->KR_total * 30 /100}}</td>
                                <td>{{ date('F d, Y', strtotime($krt->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($krt->updated_at))}}</td>
                              </tr>
                              @endif
                            @endforeach

                            @foreach($mug as $mg)
                              @if($brs->status == 4)
                              <tr>
                                <td>{{$mg->jdl_Pdk}}</td>
                                <td>{{$mg->name}}</td>
                                <td>{{$mg->MG_total}}</td>
                                <td>{{$mg->MG_total * 30 /100}}</td>
                                <td>{{ date('F d, Y', strtotime($mg->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($mg->updated_at))}}</td>
                              </tr>
                              @endif
                            @endforeach

                            @foreach($office as $of)
                              @if($ban->status == 4)
                              <tr>
                                <td>{{$of->jdl_Pdk}}</td>
                                <td>{{$of->name}}</td>
                                <td>{{$of->OF_total}}</td>
                                <td>{{$of->OF_total * 30 /100}}</td>
                                <td>{{ date('F d, Y', strtotime($ban->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($ban->updated_at))}}</td>
                              </tr>
                              @endif
                            @endforeach

                            @foreach($polo as $pol)
                              @if($brs->status == 4)
                              <tr>
                                <td>{{$pol->jdl_Pdk}}</td>
                                <td>{{$pol->name}}</td>
                                <td>{{$pol-PL_total}}</td>
                                <td>{{$pol->PL_total * 30 /100}}</td>
                                <td>{{ date('F d, Y', strtotime($pol->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($pol->updated_at))}}</td>
                              </tr>
                              @endif
                            @endforeach

                            @foreach($poster as $pst)
                              @if($brs->status == 4)
                              <tr>
                                <td>{{$pst->jdl_Pdk}}</td>
                                <td>{{$pst->name}}</td>
                                <td>{{$pst->PT_total}}</td>
                                <td>{{$pst->PT_total * 30 /100}}</td>
                                <td>{{ date('F d, Y', strtotime($pst->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($pst->updated_at))}}</td>
                              </tr>
                              @endif
                            @endforeach

                            @foreach($stempel as $stp)
                              @if($brs->status == 4)
                              <tr>
                                <td>{{$stp->jdl_Pdk}}</td>
                                <td>{{$stp->name}}</td>
                                <td>{{$stp->SM_total}}</td>
                                <td>{{$stp->SM_total * 30 /100}}</td>
                                <td>{{ date('F d, Y', strtotime($stp->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($stp->updated_at))}}</td>
                              </tr>
                              @endif
                            @endforeach

                            @foreach($stiker as $stk)
                              @if($brs->status == 4)
                              <tr>
                                <td>{{$stk->jdl_Pdk}}</td>
                                <td>{{$stk->name}}</td>
                                <td>{{$stk->ST_total}}</td>
                                <td>{{$stk->ST_total * 30 /100}}</td>
                                <td>{{ date('F d, Y', strtotime($stk->updated_at))}}</td>
                                <td>{{ date('H:m:s', strtotime($stk->updated_at))}}</td>
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
