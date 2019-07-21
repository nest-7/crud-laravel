<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="http://codesmx.com/">
    <meta name="author" content="github.com/nest-7">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Created By codesmx.com</title>
    {{-- icons --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    {{-- styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    {{-- javascript --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  </head>
  <body>
    @include('main.sections.nav')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Creado por codesmx.com</h1>
        <p class="lead font-weight-normal">Este es un proyecto gratis creado con el framework laravel, por el canal de youtube <a href="https://www.youtube.com/channel/UCd26IzVnJSUtIlrtVdYrSPw/featured" target="_blank">CodesMx</a>, pueden descargar el código desde el siguiente repositorio, <a href="https://github.com/nest-7/crud-laravel" target="_blank">Código</a>.</p>
        <a class="btn btn-outline-secondary" href="#">Pronto</a>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    @yield('content')
    @include('main.sections.footer')
    @stack('js')
  </body>
</html>
