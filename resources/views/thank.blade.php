<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!--meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'HuaMhor') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!--meta tags -->
        <link href="{{ URL::asset('images/Logo.png') }}" rel="shortcut icon"
            type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Athiti&display=swap"
            rel="stylesheet">

        <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);


        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
        <!--booststrap-->
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet"
            type="text/css" media="all">
        <!--//booststrap end-->
        <!-- font-awesome icons -->
        <link href="{{ URL::asset('css/font-awesome.min.css') }}"
            rel="stylesheet">
        <!-- //font-awesome icons -->
        <!--stylesheets-->
        <link href="{{ URL::asset('css/style.css') }}" rel='stylesheet'
            type='text/css' media="all">
    </head>

    <body>
        <div id="app">
            <!-- //banner -->
            <!-- header -->
            <div class="banner-contact-custom" #contact id="contact"
                style="height: 100vh">
                <!-- header -->
                <div class="headder-top">
                    <!-- nav -->
                    @include('layouts.menu')
                    <!-- //nav -->
                </div>
                <!-- //header -->
                <!-- banner -->
                <div class="main-banner text-center">
                    <div class="container">

                                <h1 class="title">ขอบคุณสำหรับคำสั่งซื้อ</h1>
                    </div>
                </div>
            </div>
            <!-- //banner -->
        </div>
    </body>
</html>
