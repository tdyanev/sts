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
    <link href="/css/animate.css" rel="stylesheet" />    
    <link href="/css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">  

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body class="other-page">
    @section('header')
    <header>
        <div class="wide-header container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 logo">
                        <a href="/" title="Home">
                            <img src="/images/logo.svg" alt="logo" />
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 contact">
                        <div class="pull-right text-center"> 
                            <span class="locale">@component('locale') @endcomponent </span>
                            <br/> 
                            <span class="first-color">Contact us on</span>
                            <br />
                            <span class="second-color"><a href="tel:+359883472597">+359 883 472 597</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <nav class="navbar top-menu">
            <div class="container-fluid">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/{{ App::getlocale() }}" title="@lang('nav.home')">@lang('nav.home')</a></li>
                            <li><a href="/{{ App::getlocale() }}/web" title="Web Development">@lang('nav.dev')</a></li>
                            <li><a href="/{{ App::getlocale() }}/design" title="Design">@lang('nav.design')</a></li>
                            <li><a href="/{{ App::getlocale() }}/seo">@lang('nav.seo')</a></li>
                            <li><a href="/{{ App::getlocale() }}/team" title="Team">@lang('nav.team')</a></li>
                            <li><a href="/{{ App::getlocale() }}/projects" title="Projects">@lang('nav.projects')</a></li>
                            <li><a href="/{{ App::getlocale() }}/contacts" title="Contacts">@lang('nav.contacts')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        
        @if (Request::segment(2) == '')
        <div class="header-image container-fluid">
            <div class="blurred">
                <h1>@lang('nav.home-title')</h1>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon class="svg--sm" fill="#fff" points="0,0 30,100 65,21 90,100 100,75 100,100 0,100"/>
                    <polygon class="svg--lg" fill="#fff" points="0,0 15,100 33,21 45,100 50,75 55,100 72,20 85,100 95,50 100,80 100,100 0,100" />
                </svg>
            </div>
        </div>
        @else

        <div class="header-color container-fluid">
            <div class="container">
                <div class="blurred">
                    <h1>@yield('title')</h1>
                    <!--
                    <div class="moving-ball"></div>
                    <div class="moving-ball2"></div>
                    -->
                </div>
            </div>
        </div>
        @endif

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
                    <h3>@lang('footer.services')</h3>
                    <ul>
                        <li>
                            <a href="/web-development" title="Web Development">Web Site Development</a>
                        </li>
                        <li>
                            <a href="/seo" title="SEO">Search Engine Optimisation</a>
                        </li>
                        <li>
                            <a href="/design" title="Design">Graphical Design</a>
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
                            <a class="google" href="https://plus.google.com/communities/112274025237702604880" title="Google+">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a class="twitter" href="#" title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                    <a href="/contacts" title="Contact us" class="btn btn-custom" type="button">@lang('footer.contact-us')</a>
                </div>
                <div class="col-sm-4 col-xs-12 contacts text-right h-card">
                    <h3>@lang('footer.contacts')</h3>
                    <ul>
                        <li><span class="p-locality">@lang('footer.city')</span>, <span class="p-country-name">@lang('footer.country')</span></li>
                        <li><span class="p-street-address">@lang('footer.address')</span></li>
                        <li><span class="p-tel">+359 883 472 597</span></li>
                        <li><span class="u-email">office@sts2017.com</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>&#169; STS 2017. @lang('footer.copyright')</p>
        </div>
    </footer>
    @show
  
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
