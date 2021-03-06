<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('icon_gears.ico') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    {{--sweetalert 2--}}
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    
    {{--select2--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--config desktop css--}}
    <style>
        @if (Request::path() == 'login')
        {{--html,body {--}}
            {{--width:100%;--}}
            {{--height:100%;--}}
            {{--background: url({{ asset('img/bg.jpg')}}) no-repeat center center fixed;--}}
            {{---webkit-background-size: cover;--}}
            {{---moz-background-size: cover;--}}
            {{---o-background-size: cover;--}}
            {{--background-size: cover;--}}
        {{--}--}}
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
         {{--html,body {--}}
            {{--width:100%;--}}
            {{--height:100%;--}}
            {{--background: url({{ asset('img/bg.jpg')}}) no-repeat center center fixed;--}}
            {{---webkit-background-size: cover;--}}
            {{---moz-background-size: cover;--}}
            {{---o-background-size: cover;--}}
            {{--background-size: cover;--}}
        {{--}--}}
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
        @elseif(Request::path() == 'history')
        .loginpage{
            display: none;
        }
        @elseif(Request::path() == 'dashboard')
        .pb-4, .py-4{
            padding-bottom:0px !important;
        }
        .pt-4, .py-4{
            padding-top: 0px !important;
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
    {{--config mobile css--}}
    <style>
        /* ----------- iPhone 5, 5S, 5C and 5SE ----------- */

        /* Portrait and Landscape */
        @media only screen
        and (min-device-width: 320px)
        and (max-device-width: 568px)
        and (-webkit-min-device-pixel-ratio: 2) {
            @if (Request::path() == 'login')
                .container{
                top: 25%;
                position: fixed !important;
            }
            .logoInLogin{
                width: 290px;
            }
            .loginpage{
                display: none;
            }
            .title_font{
                font-size: 12px !important;
            }
            @elseif (Request::path() == 'home')
            .qrlogo{
                width: 178px;
            }
            .xxx{
                margin: 35px 0px !important;
            }
            #nameRes , #depRes{
                display: grid;
            }
            @elseif (Request::path() == 'stage')
                #stage{
                position: absolute;
                width: 245%;
                margin-top: 90px !important;
            }
            .stageTOPtitle{
                height: 100px;
            }
            .mobileStage{
                position: absolute;
                width: 420px;
            }
            .HeaderMobileStage{
                position: fixed;
                width: 85%;
            }
            @endif

            /*blur*/
            .blurred-bg {
                background-image: url({{ asset('img/bg.jpg')}});
                background-repeat: no-repeat;
                -moz-background-size: 100% 100%;
                -o-background-size: 100% 100%;
                -webkit-background-size: 100% 100%;
                background-size: 100% 100%;
                background-attachment: fixed;
            }
            .blurred-bg.tinted {
                background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjEuMCIgeDI9IjAuNSIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIwLjIiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMC4yIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g'), url({{ asset('img/bg.jpg')}});
                background-size: 100% 100%;
                background-image: -moz-linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2)), url({{ asset('img/bg.jpg')}});
                background-image: -webkit-linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2)), url({{ asset('img/bg.jpg')}});
                background-image: linear-gradient(0deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2)), url({{ asset('img/bg.jpg')}});
            }
            .blurred-bg.shaded {
                background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjEuMCIgeDI9IjAuNSIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwLjIiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwMDAwMDAiIHN0b3Atb3BhY2l0eT0iMC4yIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g'), url({{ asset('img/bg.jpg')}});
                background-size: 100% 100%;
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
                position: fixed;
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
        }

        /* Portrait */
        @media only screen
        and (min-device-width: 320px)
        and (max-device-width: 568px)
        and (-webkit-min-device-pixel-ratio: 2)
        and (orientation: portrait) {
        }

        /* Landscape */
        @media only screen
        and (min-device-width: 320px)
        and (max-device-width: 568px)
        and (-webkit-min-device-pixel-ratio: 2)
        and (orientation: landscape) {

            @if (Request::path() == 'login')
            .container{
                position: fixed !important;
                top:0%;
            }
            .logoInLogin{
                width: 290px;
            }
            .loginpage{
                display: none;
            }
            .title_font{
                font-size: 12px !important;
            }
            @elseif (Request::path() == 'home')
            .container{
                position: relative !important;
                top:0%;
            }
            .qrlogo{
                width: 178px;
            }
            .xxx{
                margin: 35px 0px !important;
            }
            #nameRes , #depRes{
                display: grid;
            }
            @elseif (Request::path() == 'stage')
                #stage{
                position: absolute;
                width: 245%;
                margin-top: 90px !important;
            }
            .stageTOPtitle{
                height: 100px;
            }
            .mobileStage{
                position: absolute;
                width: 420px;
            }
            .HeaderMobileStage{
                position: fixed;
                width: 85%;
            }
            @endif
            }

        /* ----------- iPhone 6, 6S, 7 and 8 ----------- */

        /* Portrait */
        @media only screen
        and (min-device-width: 375px)
        and (max-device-width: 667px)
        and (-webkit-min-device-pixel-ratio: 2)
        and (orientation: portrait) {
            @if (Request::path() == 'login')
            .title_font{
                font-size: 15px !important;
            }
            @elseif (Request::path() == 'home')
                #nameRes, #depRes{
                display: flex;
            }
            @endif
        }

        /* Landscape */
        @media only screen
        and (min-device-width: 375px)
        and (max-device-width: 667px)
        and (-webkit-min-device-pixel-ratio: 2)
        and (orientation: landscape) {
            @if (Request::path() == 'login')
            .container{
                position: relative !important;
                top:0%;
            }
            .logoInLogin{
                width: 290px;
            }
            .loginpage{
                display: none;
            }
            .title_font{
                font-size: 15px !important;
            }
            @elseif (Request::path() == 'home')
            .container{
                position: relative !important;
                top:0%;
            }
            .qrlogo{
                width: 178px;
            }
            .xxx{
                margin: 35px 0px !important;
            }
            #nameRes , #depRes{
                display: grid;
            }
            @elseif (Request::path() == 'stage')
                #stage{
                position: absolute;
                width: 245%;
                margin-top: 90px !important;
            }
            .stageTOPtitle{
                height: 100px;
            }
            .mobileStage{
                position: absolute;
                width: 420px;
            }
            .HeaderMobileStage{
                position: fixed;
                width: 85%;
            }
            @endif
            }

        /* ----------- iPhone 6+, 7+ and 8+ ----------- */

        /* Portrait */
        @media only screen
        and (min-device-width: 414px)
        and (max-device-width: 736px)
        and (-webkit-min-device-pixel-ratio: 3)
        and (orientation: portrait) {
            @if (Request::path() == 'login')
            .title_font{
                font-size: 15px !important;
            }
            @elseif (Request::path() == 'home')
                #nameRes, #depRes{
                display: flex;
            }
            @endif
        }

        /* Landscape */
        @media only screen
        and (min-device-width: 414px)
        and (max-device-width: 736px)
        and (-webkit-min-device-pixel-ratio: 3)
        and (orientation: landscape) {
            @if (Request::path() == 'login')

            .logoInLogin{
                width: 330px;
            }
            .loginpage{
                display: none;
            }

            @elseif (Request::path() == 'home')
            .container{
                position: relative !important;
                top:0%;
            }
            .qrlogo{
                width: 178px;
            }
            .xxx{
                margin: 35px 0px !important;
            }
            @elseif (Request::path() == 'stage')
                    #stage{
                position: absolute;
                width: 245%;
                margin-top: 90px !important;
            }
            .stageTOPtitle{
                height: 100px;
            }
            .mobileStage{
                position: absolute;
                width: 420px;
            }
            .HeaderMobileStage{
                position: fixed;
                width: 85%;
            }
            @endif
            }
        /* ----------- iPhone X ----------- */

        /* Portrait */
        @media only screen
        and (min-device-width: 375px)
        and (max-device-width: 812px)
        and (-webkit-min-device-pixel-ratio: 3)
        and (orientation: portrait) {
            @if (Request::path() == 'login')
            .title_font{
                font-size: 15px !important;
            }
            @elseif (Request::path() == 'home')
                #nameRes, #depRes{
                display: flex;
            }
            @endif
        }

        /* Landscape */
        @media only screen
        and (min-device-width: 375px)
        and (max-device-width: 812px)
        and (-webkit-min-device-pixel-ratio: 3)
        and (orientation: landscape) {
                @if (Request::path() == 'login')

                .logoInLogin{
                    width: 290px;
                }
                .loginpage{
                    display: none;
                }

                @elseif (Request::path() == 'home')
                .container{
                    position: relative !important;
                    top:0%;
                }
                .qrlogo{
                    width: 178px;
                }
                .xxx{
                    margin: 35px 0px !important;
                }
                @elseif (Request::path() == 'stage')
                    #stage{
                    position: absolute;
                    width: 245%;
                    margin-top: 90px !important;
                }
                .stageTOPtitle{
                    height: 100px;
                }
                .mobileStage{
                    position: absolute;
                    width: 420px;
                }
                .HeaderMobileStage{
                    position: fixed;
                    width: 85%;
                }
            @endif
            /*blur*/
            .blurred-bg {
                background-image: url({{ asset('img/bg.jpg')}});
                background-repeat: no-repeat;
                -moz-background-size: 100% 100%;
                -o-background-size: 100% 100%;
                -webkit-background-size: 100% 100%;
                background-size: 100% 100%;
                background-attachment: fixed;
            }
            .blurred-bg.tinted {
                background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjEuMCIgeDI9IjAuNSIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIwLjIiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMC4yIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g'), url({{ asset('img/bg.jpg')}});
                background-size: 100% 100%;
                background-image: -moz-linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2)), url({{ asset('img/bg.jpg')}});
                background-image: -webkit-linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2)), url({{ asset('img/bg.jpg')}});
                background-image: linear-gradient(0deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2)), url({{ asset('img/bg.jpg')}});
            }
            .blurred-bg.shaded {
                background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjEuMCIgeDI9IjAuNSIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwLjIiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwMDAwMDAiIHN0b3Atb3BhY2l0eT0iMC4yIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g'), url({{ asset('img/bg.jpg')}});
                background-size: 100% 100%;
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
                position: fixed;
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
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel loginpage">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="padding: 10px 40px;background-color: #6c757d;border-radius: 15px;font-weight: bold;color: white;">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item {{ Route::currentRouteName() == "dashboard" ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('dashboard') }}">Scan <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item {{ Route::currentRouteName() == "AddUser" ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('AddUser') }}">Add user profile</a>
                                </li>
                            </ul>
                        </div>
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
                                        <a class="dropdown-item" href="{{ route('adminLogout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            admin logout
                                        </a>

                                        <form id="logout-form" action="{{ route('adminLogout') }}" method="POST" style="display: none;">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.SitSelect').select2({
                placeholder: 'Select an option'
            });
        });

    </script>
    
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
