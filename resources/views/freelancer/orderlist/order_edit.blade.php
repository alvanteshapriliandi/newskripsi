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
                @foreach($transaction as $t)
                <div class="x_content">
                    <form method="post" action="{{ route('order-list.update', ['id' => $t->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <td colspan="2"> Ubah setatus order</td>
                                </tr>
                                <tr>
                                    <th>User Name</th>
                                    <td>{{$t->username}}</td>
                                </tr>
                                
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <input type="checkbox" name="status" value="2"> Dalam Proses Pengerjaan
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="" value="Update Status"></td>
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
