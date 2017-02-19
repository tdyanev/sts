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
    @section('header')
    <header>
        <div class="wide-header container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 logo">
                        <img src="/images/logo.png" alt="logo" />
                    </div>
                    <div class="col-sm-6 contanct">
                        <div class="pull-right">Contact us on<br />+359 883 472 597</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu container">
            <nav>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Contacts</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header-image container-fluid">
            <h1>Header Content</h1>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon class="svg--sm" fill="#efefef" points="0,0 30,100 65,21 90,100 100,75 100,100 0,100"/>
                <polygon class="svg--lg" fill="#efefef" points="0,0 15,100 33,21 45,100 50,75 55,100 72,20 85,100 95,50 100,80 100,100 0,100" />
            </svg>
        </div>
    </header>
    @show

    <div class="container">
        @yield('content')
    </div>

    <div class="container">
        @section('sidebar')
            This is the master sidebar.
        @show
    </div>
    
        @section('footer')
          <footer>
  
          </footer>
        @show
  
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
