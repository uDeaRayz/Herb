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
    <title>{{ config('app.name', 'HuaMhor') }}</title>
    <!--meta tags -->
    <link href="{{ URL::asset('images/Logo.png') }}" rel="shortcut icon" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Athiti&display=swap" rel="stylesheet">

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);


        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--booststrap-->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="{{ URL::asset('css/style.css') }}" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>

<body>
    <div id="app">
        <!-- //banner -->
        <!-- header -->
        <div class="banner-left-side-custom" #login id="login" style="height: 100vh">
            <div class="headder-top">
                <!-- nav -->
                @include('layouts.menu')
                <!-- //nav -->
            </div>
            <main class="py-4">
                @yield('content')

            </main>
            <!-- //header -->
        </div>
        <!-- //banner -->
    </div>
</body>

</html>
