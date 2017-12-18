@extends('templates.admin.layout')

@section('content')

    <div class="">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Status Product</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Name Product</th>
                                    <th>Name Freelance</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Username</th>
                                    <th>Name Product</th>
                                    <th>Name Freelance</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($banner as $ban)
                                    <tr>
                                        <td>{{$ban->name}}</td>
                                        <td><img src="{{asset('uploads/'.$ban->images)}}" width="100"></td>
                                        <td>{{$ban->BN_pemesanan}}</td>
                                        <td>{{$ban->BN_total}}</td>
                                        <td>
                                            <form class="form-group" method="POST" action="{{ route('checkout.destroy', ['id' => $ban->id]) }}">
                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>

                                        </td>
                                        <?php $total += $ban->BN_total; ?>
                                    </tr>
                                    @endforeach
                                    <!-- end checkout Banner -->

                                    <!-- start checkout Bantal Photo -->
                                    @foreach($bantalfoto as $bafo)
                                    <tr>
                                        <td>{{$bafo->name}}</td>
                                        <td><img src="{{asset('uploads/'.$bafo->images)}}" width="100"></td>
                                        <td>{{$bafo->BT_pemesanan}}</td>
                                        <td>{{$bafo->BT_total}}</td>
                                        <td>
                                            <form class="form-group" method="POST" action="{{ route('checkout.destroy', ['id' => $bafo->id]) }}">
                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        <?php $total += $bafo->BT_total; ?>
                                    </tr>
                                    @endforeach
                                    <!-- end checkout Bantal Photo -->

                                    <!-- start checkout Brosur -->
                                    @foreach($brosur as $br)
                                    <tr>
                                        <td>{{$br->name}}</td>
                                        <td><img src="{{asset('uploads/'.$br->images)}}" width="100"></td>
                                        <td>{{$br->BR_pemesanan}}</td>
                                        <td>{{$br->BR_total}}</td>
                                        <td>
                                            <form class="form-group" method="POST" action="{{ route('checkout.destroy', ['id' => $br->id]) }}">
                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        <?php $total += $br->BR_total; ?>
                                    </tr>
                                    @endforeach
                                    <!-- end checkout Brosur -->

                                    <!-- start checkout Goodle Bag -->
                                    @foreach($goodlebag as $gd)
                                    <tr>
                                        <td>{{$gd->name}}</td>
                                        <td><img src="{{asset('uploads/'.$gd->images)}}" width="100"></td>
                                        <td>{{$gd->GD_pemesanan}}</td>
                                        <td>{{$gd->GD_total}}</td>
                                        <td>
                                            <form class="form-group" method="POST" action="{{ route('checkout.destroy', ['id' => $gd->id]) }}">
                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        <?php $total += $gd->GD_total; ?>
                                    </tr>
                                    @endforeach
                                    <!-- end checkout Goodle Bag -->

                                    <!-- start checkout Kalender -->
                                    @foreach($kalender as $kl)
                                    <tr>
                                        <td>{{$kl->name}}</td>
                                        <td><img src="{{asset('uploads/'.$kl->images)}}" width="100"></td>
                                        <td>{{$kl->KL_pemesanan}}</td>
                                        <td>{{$kl->KL_total}}</td>
                                        <td>
                                            <form class="form-group" method="POST" action="{{ route('checkout.destroy', ['id' => $kl->id]) }}">
                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        <?php $total += $kl->KL_total; ?>
                                    </tr>
                                    @endforeach
                                    <!-- end checkout Kelender -->

                                    <!-- start checkout Kaos -->
                                    @foreach($kaos as $ks)
                                    <tr>
                                        <td>{{$ks->name}}</td>
                                        <td><img src="{{asset('uploads/'.$ks->images)}}" width="100"></td>
                                        <td>{{$ks->KS_pemesanan}}</td>
                                        <td>{{$ks->id}}</td>
                                        <td>
                                            <form class="form-group" method="POST" action="{{ route('checkout.destroy', ['id' => $ks->id]) }}">
                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        <?php $total += $ks->KS_total; ?>
                                    </tr>
                                    @endforeach
                                    <!-- end checkout Kaos -->

                                    <!-- start checkout Kartu -->
                                    @foreach($kartu as $kr)
                                    <tr>
                                        <td>{{$kr->name}}</td>
                                        <td><img src="{{asset('uploads/'.$kr->images)}}" width="100"></td>
                                        <td>{{$kr->KR_pemesanan}}</td>
                                        <td>{{$kr->KR_total}}</td>
                                        <td>
                                            <form class="form-group" method="POST" action="{{ route('checkout.destroy', ['id' => $kr->id]) }}">
                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        <?php $total += $kr->KR_total; ?>
                                    </tr>
                                    @endforeach
                                    <!-- end checkout Kartu -->

                                    <!-- start checkout Mug -->
                                    @foreach($mug as $mg)
                                    <tr>
                                        <td>{{$mug->name}}</td>
                                        <td><img src="{{asset('uploads/'.$mg->images)}}" width="100"></td>
                                        <td>{{$mg->MG_pemesanan}}</td>
                                        <td>{{$mg->MG_total}}</td>
                                        <td>
                                            <form class="form-group" method="POST" action="{{ route('checkout.destroy', ['id' => $mg->id]) }}">
                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        <?php $total += $mg->MG_total; ?>
                                    </tr>
                                    @endforeach
                                    <!-- end checkout Mug -->

                                    <!-- start checkout Office -->
                                    @foreach($office as $of)
                                    <tr>
                                        <td>{{$of->name}}</td>
                                        <td><img src="{{asset('uploads/'.$of->images)}}" width="100"></td>
                                        <td>{{$of->OF_pemesanan}}</td>
                                        <td>{{$of->OF_total}}</td>
                                        <td>
                                            <form class="form-group" method="POST" action="{{ route('checkout.destroy', ['id' => $of->id]) }}">
                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        <?php $total += $of->OF_total; ?>
                                    </tr>
                                    @endforeach
                                    <!-- end checkout Office -->

                                    <!-- start checkout Polo -->
                                    @foreach($polo as $pl)
                                    <tr>
                                        <td>{{$pl->name}}</td>
                                        <td><img src="{{asset('uploads/'.$pl->images)}}" width="100"></td>
                                        <td>{{$pl->PL_pemesanan}}</td>
                                        <td>{{$pl->PL_total}}</td>
                                        <td>
                                            <form class="form-group" method="POST" action="{{ route('checkout.destroy', ['id' => $pl->id]) }}">
                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        <?php $total += $pl->PL_total; ?>
                                    </tr>
                                    @endforeach
                                    <!-- end checkout Polo -->

                                    <!-- start checkout Poster -->
                                    @foreach($poster as $pt)
                                    <tr>
                                        <td>{{$pt->name}}</td>
                                        <td><img src="{{asset('uploads/'.$pt->images)}}" width="100"></td>
                                        <td>{{$pt->PT_pemesanan}}</td>
                                        <td>{{$pt->PT_total}}</td>
                                        <td>
                                            <form class="form-group" method="POST" action="{{ route('checkout.destroy', ['id' => $pt->id]) }}">
                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        <?php $total += $pt->PT_total; ?>
                                    </tr>
                                    @endforeach
                                    <!-- end checkout Poster -->

                                    <!-- start checkout Stempel -->
                                    @foreach($stempel as $sm)
                                    <tr>
                                        <td>{{$sm->name}}</td>
                                        <td><img src="{{asset('uploads/'.$sm->images)}}" width="100"></td>
                                        <td>{{$sm->SM_pemesanan}}</td>
                                        <td>{{$sm->SM_total}}</td>
                                        <td>
                                            <form class="form-group" method="POST" action="{{ route('checkout.destroy', ['id' => $sm->id]) }}">
                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        <?php $total += $sm->SM_total; ?>
                                    </tr>
                                    @endforeach
                                    <!-- end checkout Stempel -->

                                    <!-- start checkout Stiker -->
                                    @foreach($stiker as $st)
                                    <tr>
                                        <td>{{$st->name}}</td>
                                        <td><img src="{{asset('uploads/'.$st->images)}}" width="100"></td>
                                        <td>{{$st->ST_pemesanan}}</td>
                                        <td>{{$st->ST_total}}</td>
                                        <td>
                                            <form class="form-group" method="POST" action="{{ route('checkout.destroy', ['id' => $st->id]) }}">
                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        <?php $total += $st->ST_total; ?>
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
