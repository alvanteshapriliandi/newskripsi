@extends('templates.admin.layout')

@section('content')
<div class="">
    <div class="clearfix"></div>
    @foreach($submaterial as $sub)
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Confirm Delete Record <a href="{{route('material.edit', ['id'=> $sub->subcategory_id])}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p>Are you sure you want to delete material <strong>{{$sub->name}}</strong></p>

                    <form method="POST" action="{{ route('submaterial.destroy', ['id' => $sub->id]) }}">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger">Yes I'm sure. Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop