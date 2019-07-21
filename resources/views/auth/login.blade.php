@extends('layouts.app')
@section('title', 'Iniciar sesión')
@section('content')
<div class="container">
  <form class="form-signin" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="text-center mb-4">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.2/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
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
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
    <p class="mt-5 mb-3 text-muted text-center">© 2017-2018</p>
  </form>
</div>
@endsection
