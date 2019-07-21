@extends('layouts.app')
@section('title', 'Registrarse')
@section('content')
<div class="container">
  <form class="form-signin" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="text-center mb-4">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.2/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Registrarse</h1>
    </div>
    <div class="form-label-group">
      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">
      @if ($errors->has('name'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('name') }}</strong>
      </span>
      @endif
      <label for="name">Nombre</label>
    </div>
    <div class="form-label-group">
      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Correo Electronico">
      @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif
      <label for="email">Correo Electronico</label>
    </div>
    <div class="form-label-group">
      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Contraseña">
      @if ($errors->has('password'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif
      <label for="password">Contraseña</label>
    </div>
    <div class="form-label-group">
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Repite la contraseña">
      <label for="password-confirm">Contraseña</label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Registrase</button>
    <p class="mt-5 mb-3 text-muted text-center">© 2017-2018</p>
  </form>
</div>
@endsection
