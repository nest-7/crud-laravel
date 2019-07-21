<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="http://codesmx.com/">
    <meta name="author" content="github.com/nest-7">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} | @yield('title')</title>
    {{-- icons --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    {{-- styles --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    {{-- javascript --}}
    <script src="{{ asset('js/app.js') }}"></script>
  </head>
  <body>
    <div id="app">
      @include('main.sections.nav')
      <main class="py-4">
        @yield('content')
      </main>
    </div>
  </body>
</html>
