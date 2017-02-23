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
    <link href="/css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">  

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
                    <div class="col-xs-6 logo">
                        <img src="/images/logo.png" alt="logo" />
                    </div>
                    <div class="col-xs-6 contact">
                        <div class="pull-right">Contact us on<br />+359 883 472 597</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu container-fluid">
            <div class="container">
            <nav class="navbar">
                <ul>
                    <li>
                        <a href="#" title="Home">Home</a>
                    </li>
                    <li>
                        <a href="#" title="">Services</a>
                    </li>
                    <li>
                        <a href="#" title="">Blog</a>
                    </li>
                    <li>
                        <a href="#" title="">Contacts</a>
                    </li>
                </ul>
            </nav>
            </div>
        </div>
        <div class="header-image container-fluid">
            <div class="blurred">
                <h1>We are here for you!</h1>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon class="svg--sm" fill="#fff" points="0,0 30,100 65,21 90,100 100,75 100,100 0,100"/>
                    <polygon class="svg--lg" fill="#fff" points="0,0 15,100 33,21 45,100 50,75 55,100 72,20 85,100 95,50 100,80 100,100 0,100" />
                </svg>
            </div>
        </div>
    </header>
    
    @show
    <main>
        @yield('content')
    </main>
    @section('footer')
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12 services">
                    <h3>Services</h3>
                    <ul>
                        <li>
                            <a href="#" title="">Web Site Development</a>
                        </li>
                        <li>
                            <a href="#" title="">Search Engine Optimisation</a>
                        </li>
                        <li>
                            <a href="#" title="">Graphical Design</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <ul class="social-networks">
                        <li>
                            <a class="facebook" href="#" title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a class="google" href="#" title="Google+">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a class="twitter" href="#" title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                    <a href="#" title="Contact us" class="btn" type="button">Contact us</a>
                </div>
                <div class="col-sm-4 col-xs-12 contacts text-right h-card">
                    <h3>Contacts</h3>
                    <ul>
                        <li><span class="p-locality">Sofia</span>, <span class="p-country-name">Bulgaria</span></li>
                        <li><span class="p-street-address">zh.k. Strelbishte, bl. 88</span></li>
                        <li><span class="p-tel">+359 883 472 597</span></li>
                        <li><span class="u-email">office@sts2017.com</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>&#169; STS 2017. All rights reserved.</p>
        </div>
    </footer>
    @show
  
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
