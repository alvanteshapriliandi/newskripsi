@extends('templates.freelancer.layout')

@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit Profile <a href="{{route('pengaturan.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    @foreach($pengaturan as $p)
                    <form method="post" action="{{ route('pengaturan.update', ['id' => $p->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$p->username}}" id="username" name="username" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('username'))
                                <span class="help-block">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">E-mail <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" value="{{$p->email}}" id="email" name="email" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea value="" id="address" name="address" class="form-control col-md-7 col-xs-12">{{$p->address}}</textarea>
                                @if ($errors->has('address'))
                                <span class="help-block">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gender">Gender <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select type="radio" value="" id="gender" name="gender" class="form-control col-md-7 col-xs-12">
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                                @if ($errors->has('gender'))
                                <span class="help-block">{{ $errors->first('gender') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('no_rekening') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_rekening">No. Rekening <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$p->no_rekening}}" id="no_rekening" name="no_rekening" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('no_rekening'))
                                <span class="help-block">{{ $errors->first('no_rekening') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo">Image <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" value="{{ $p->photo }}" id="photo" name="photo" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('photo'))
                                <span class="help-block">{{ $errors->first('photo') }}</span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <input type="hidden" name="freelancer_id" value="{{$p->id}}">
                                <button type="submit" class="btn btn-success">Update Profile</button>
                            </div>
                        </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
