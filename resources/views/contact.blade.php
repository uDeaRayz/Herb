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
        <!--//stylesheets-->
        <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700"
            rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Patrick+Hand"
            rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700"
            rel="stylesheet">
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
                        <div class="d-flex flex-row-reverse">
                            <div class="p-2" style="background-color:rgba(197, 220, 192, 0.5) ">
                                <div class="d-flex flex-row-reverse">
                                    <div class="p-2">

                                        <div class="row">
                                            <div class="col-4 text-right"><b>ที่อยู่</b></div>
                                            <div class="col-8 text-left"> {{ $contact->address }} </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-4 text-right"><b>เบอร์ติดต่อ</b></div>
                                            <div class="col-8 text-left"> {{ $contact->phone }} </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-4 text-right"><b>อีเมล</b></div>
                                            <div class="col-8 text-left"> {{ $contact->email }} </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-4 text-right"><b>ไลน์</b></div>
                                            <div class="col-8 text-left"> {{ $contact->line }} </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //banner -->
        </div>
    </body>
</html>
