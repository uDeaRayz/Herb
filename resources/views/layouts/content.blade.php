<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>หาหมอพื้นบ้าน</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
        <!--meta tags -->
        <link
            href="{{ URL::asset('images/Logo.png') }}"
            rel="shortcut icon"
            type="image/x-icon"
            />
        <link
            href="https://fonts.googleapis.com/css?family=Athiti&display=swap"
            rel="stylesheet"
            />

        <script>
            addEventListener(
                "load",
                function() {
                    setTimeout(hideURLbar, 0);
                },
                false
            );

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!--booststrap-->
        <link
            href="{{ URL::asset('css/bootstrap.min.css') }}"
            rel="stylesheet"
            type="text/css"
            media="all"
            />
        <!--//booststrap end-->
        <!-- font-awesome icons -->
        <link
            href="{{ URL::asset('css/font-awesome.min.css') }}"
            rel="stylesheet"
            />
        <!-- //font-awesome icons -->
        <!--stylesheets-->
        <link
            href="{{ URL::asset('css/style.css') }}"
            rel="stylesheet"
            type="text/css"
            media="all"
            />
        <!--//stylesheets-->
    </head>

    <body style="font-size: 15pt">
        <div id="app">
            <!-- //banner -->
            <div class="banner-content-porduct-custom" id="home">
                <!-- header -->
                <div class="headder-top">
                    <!-- nav -->
                    @include('layouts.menu')
                    <!-- //nav -->
                </div>
                <!-- //header -->
                <!-- banner -->
                <div class="main-banner text-center" style="padding-top: 14vh">
                    <div class="container">
                        <div class="banner-right-txt">
                                <h5 class="mb-sm-3 mb-2">หาหมอพื้นบ้าน</h5>
                                <h4>Ha Mor Peun Ban</h4>
                        </div>
                        <div class="slide-info-txt">
                            <p>แพทย์แผนไทย ใกล้บ้านคุณ</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //banner -->
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>
