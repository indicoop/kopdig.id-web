<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-topbar="light">

    <head>
    <meta charset="utf-8" />
    <title>Kopdig.id | platform untuk membantu koperasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Platform untuk koperasi" name="description" />
    <meta content="kopdig" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-utama.png')}}">
        @include('main.landing.head-css')
  </head>
  @include('main.landing.topbar')
    @yield('body')

    @yield('content')
    @include('main.landing.footer')

    @include('main.landing.vendor-scripts')
    </body>
</html>
