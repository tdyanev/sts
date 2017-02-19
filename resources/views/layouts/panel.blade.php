<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet" />

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
    <div class="container">
        @section('header')
            This is the master header.
        @show
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="container">
        @section('sidebar')
            This is the master sidebar.
        @show
    </div>
    
        @section('footer')
          <footer>foooooot</footer>
        @show
  
    <!-- Scripts -->
    <script src="/js/panel.app.js"></script>
</body>
</html>
