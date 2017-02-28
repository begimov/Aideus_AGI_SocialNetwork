@extends('templates.default')

@section('content')

<div class="container">
<h1>Sign in</h1>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <form action="{{ route('auth.signin') }}" method="post" autocomplete="off">
      {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="Email">Email address</label>
          <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
          @if ($errors->has('email'))
              <span class="help-block">{{  $errors->first('email') }}</span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="Password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
          @if ($errors->has('password'))
              <span class="help-block">{{  $errors->first('password') }}</span>
          @endif
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="rememberme"> Remember me
          </label>
        </div>
        <input type="submit" class="btn btn-default" value="Sign in">
    </form>
  </div>
  <div class="col-md-4"></div>
</div>
</div>
@stop
