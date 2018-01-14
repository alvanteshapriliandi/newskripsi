@extends('templates.freelancer.layout')

@section('content')

    <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Status Product <a href="{{route('order-list.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                @foreach($cetak as $c)
                <div class="x_content">
                    <form method="post" action="{{ route('cetak-pesanan.store', ['id' => $c->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <td colspan="2"> Cetak Pesanan</td>
                                </tr>
                                <tr>
                                    <th>User Name</th>
                                    <td>{{$c->username}}</td>
                                </tr>
                                <tr>
                                    <th>Input Desain</th>
                                    <td>
                                        <input type="file" name="images">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Catatan Desain</td>
                                    <td>
                                        <textarea name="deskripsi_cetak" style="width: 480px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <input type="hidden" name="trasaction_id" value="{{$c->id}}">
                                    <td><input type="submit" name="" value="Cetak Pesanan"></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@stop
