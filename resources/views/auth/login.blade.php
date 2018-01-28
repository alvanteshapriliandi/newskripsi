@extends('layouts.app')

@section('content')

<form class="form-group" method="POST" action="{{ route('login') }}">
    <h1 style="margin: 0; margin-bottom: 20px; text-align: center;">LOGIN</h1>
    {{ csrf_field() }}
    <input type="hidden" name="role" value="1"/>
    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-bottom: 20px;">
      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus aria-describedby="basic-addon1" placeholder="Input Your Email Here...">
    </div>
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
    <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}"  style="margin-bottom: 20px;">
      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" required aria-describedby="basic-addon1"  placeholder="Input Your Password Here...">
    </div>
    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
    <button type="submit" class="btn btn-primary btn-block">
        Login
    </button>
</form>
@stop
