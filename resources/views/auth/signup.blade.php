@extends('templates.default')

@section('content')

<div class="container">
<h1>Sign up</h1>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <form action="{{ route('auth.signup') }}" method="post" autocomplete="off">
      {{ csrf_field() }}
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="Email">Email address</label>
          <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
          @if ($errors->has('email'))
              <span class="help-block">{{  $errors->first('email') }}</span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
          <label for="Username">Username</label>
          <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}">
          @if ($errors->has('username'))
              <span class="help-block">{{  $errors->first('username') }}</span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="Password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
          @if ($errors->has('password'))
              <span class="help-block">{{  $errors->first('password') }}</span>
          @endif
        </div>
        <input type="submit" class="btn btn-default" value="Sign up">
    </form>
  </div>
  <div class="col-md-4"></div>
</div>
</div>
@stop
