@extends('templates.admin.layout')

@section('content')

    <div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Status Product <a href="{{route('products.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <tbody>
                                @foreach($products as $p)
                                    <form method="post" action="{{ route('products.update', ['id' => $p->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                    <input name="_method" type="hidden" value="PATCH">
                                        {{ csrf_field() }}
                                    <tr>
                                        <th>Name freelancer</th>
                                        <td>{{$p->username}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name Product</th>
                                        <td>{{ $p->jdl_Pdk }}</td>
                                    </tr>
                                    <tr>
                                        <th>Subcategory</th>
                                        <td>{{ $p->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>{{ $p->description}}</td>
                                    </tr>
                                    <tr>
                                        <th>Date</th>
                                        <td>{{ date('F d, Y', strtotime($p->created_at))}}</td>
                                    </tr>
                                    <tr>
                                        <th>Time</th>
                                        <td>{{ date('H:m:s', strtotime($p->updated_at))}}</td>
                                    </tr>
                                    <tr>
                                        <th>status</th>
                                        <td>
                                            <select name="status" class="form-control">
                                                <option value="0">Pending</option>
                                                <option value="1">Accept</option>
                                            </select>
                                        </td>
                                    </tr>
                                    
                                @endforeach
                                @foreach($images as $i)
                                    <tr>
                                        <th>Images</th>
                                        <td>
                                            <img src="{{ asset('/uploads/'.$i->images)}}" width="200">
                                        </td>
                                    </tr>
                                @endforeach
                                
                                <tr>
                                    <td><input type="submit" name="" value="Update Status"></td>
                                </tr>
                                </form>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
