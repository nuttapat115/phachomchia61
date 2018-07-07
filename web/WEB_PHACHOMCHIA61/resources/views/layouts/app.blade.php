<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--config css--}}
    <style>
        @if (Request::path() == 'login')
        html,body {
            width:100%;
            height:100%;
            background: url({{ asset('img/bg.jpg')}}) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .cover {
            height: 100%;
            width: 100%;
            position: absolute;
            z-index: 1;
        }
        .blur-in{
            -webkit-filter: blur(0px);
            -moz-filter: blur(0px);
            -o-filter: blur(0px);
            -ms-filter: blur(0px);
            filter: blur(0px);
            margin: 0px;
        }
        #background{
            width: 100%;
            height: 100%;
        }
        .logoInLogin{
            width: 500px;
        }
        .loginpage{
            display: none;
        }
        @elseif (Request::path() == 'home')
         html,body {
            width:100%;
            height:100%;
            background: url({{ asset('img/bg.jpg')}}) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        #background{
            width: 100%;
            height: 100%;
        }
        .logoInLogin{
            width: 500px;
        }
        .loginpage{
            display: none;
        }
        .vertical-center {
            min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
            min-height: 100vh; /* These two lines are counted as one :-)       */

            display: flex;
            align-items: center;
        }
        .qrlogo{
            width: 350px;
        }
        @elseif(Request::path() == 'stage')
        html,body{
            background-color: #c77d7d;
        }
        .loginpage{
            display: none;
        }
        .table thead th{
            border-bottom: 0px;
            width: 30px;
        }
        .table td, .table th{
            border-top: 0px;
            padding: 0px;
            text-align: center;
        }
        .tooltip {
            width: 100px;
            font-size: 16px;
            margin-top: -20px !important;
        }
        .tooltip > .tooltip-inner {background-color: #343a40;}
        .chair{
            background-color: white;padding: 10px !important;border-right:4px solid #c77d7d
        }
        @elseif(Request::path() == 'scan')
        .loginpage{
            display: none;
        }
        @endif

        /*blur*/
        .blurred-bg {
            background-image: url({{ asset('img/bg.jpg')}});
            background-repeat: no-repeat;
            -moz-background-size: cover;
            -o-background-size: cover;
            -webkit-background-size: cover;
            background-size: cover;
            background-attachment: fixed;
        }
        .blurred-bg.tinted {
            background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjEuMCIgeDI9IjAuNSIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIwLjIiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMC4yIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g'), url({{ asset('img/bg.jpg')}});
            background-size: cover;
            background-image: -moz-linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2)), url({{ asset('img/bg.jpg')}});
            background-image: -webkit-linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2)), url({{ asset('img/bg.jpg')}});
            background-image: linear-gradient(0deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2)), url({{ asset('img/bg.jpg')}});
        }
        .blurred-bg.shaded {
            background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjEuMCIgeDI9IjAuNSIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwLjIiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwMDAwMDAiIHN0b3Atb3BhY2l0eT0iMC4yIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g'), url({{ asset('img/bg.jpg')}});
            background-size: 100%;
            background-image: -moz-linear-gradient(90deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url({{ asset('img/bg.jpg')}});
            background-image: -webkit-linear-gradient(90deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url({{ asset('img/bg.jpg')}});
            background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url({{ asset('img/bg.jpg')}});
        }

        .box {
            border-radius: 5px;
            -moz-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.6);
            -webkit-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.6);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 20px;
            text-align: center;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
            display: flex;
            transition: box-shadow 0.3s ease;
        }
        .box:active {
            cursor: move;
            -moz-box-shadow: 0 20px 50px rgba(0, 0, 0, 0.9);
            -webkit-box-shadow: 0 20px 50px rgba(0, 0, 0, 0.9);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.9);
        }
        .box .content {
            margin: auto;
        }
        .cover {
            height: 100%;
            width: 100%;
            position: absolute;
            z-index: 1;
        }
        .blur-in{
            -webkit-filter: blur(7px);
            -moz-filter: blur(7px);
            -o-filter: blur(7px);
            -ms-filter: blur(7px);
            filter: blur(7px);
            margin: 0px;
        }

        /*link*/
        a:link , a:visited , a:hover , a:active {
            text-decoration: none;
        }
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel loginpage">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    {{--script--}}
    <script>
        $(function() {
            $( ".box" ).draggable();
        });
    </script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip({
                animation: true,
                delay: {show: 300, hide: 100}
            });
        });
    </script>
</body>
</html>
