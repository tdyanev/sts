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
    <div class="container-fluid">
        <div class="row">
            <div id="nav" class="col-md-2">
                @section('header')
                    <div class="list-group">
                       <a href="home" class="list-group-item">Home</a>
                       <a href="{{ route('panel.projects.index') }}" class="list-group-item">Projects</a>
                       <a href="{{ route('panel.blogs.index') }}" class="list-group-item">Blogs</a>
                       <a href="{{ route('panel.pages.index') }}" class="list-group-item">Pages</a>



                                                               <a class="list-group-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                    </div>
                @show
            </div>
            <div class="col-md-10">
                @yield('content')
            </div>
        </div>
    </div>

   
    <!-- Scripts -->
    <script src="/js/panel.app.js"></script>
</body>
</html>
