<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!--meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>หาหมอพื้นบ้าน</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <!--//stylesheets-->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>
    <div id="app">
        <!-- //banner -->
        <div class="headder-top">
            <!-- nav -->
            <nav>
                <div id="logo">
                    <h1>
                        <a href="{{ route('dashboard') }}">
                            <img style="width:55px" src="{{ URL::asset('images/Logo.png') }}"
                                alt="{{ config('app.name', 'HuaMhor') }}">
                        </a>
                    </h1>
                </div>

                <label for="drop" class="toggle">Menu</label>
                <input type="checkbox" id="drop">
                <ul class="menu mt-2">
                    @guest
                    {{-- <li class="active">
                        <a href="{{ route('dashboard') }}">หน้าแรก</a>
                    </li>
                    <li>
                        <a href="{{ route('docter-dashboard') }}">หมอพื้นบ้าน</a>
                    </li>
                    <li>
                        <a href="index.html">สปา</a>
                    </li>
                    <li>
                        <a href="index.html">สมุนไพร</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">เข้าสู่ระบบ</a>
                    </li>
                    @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}">สมัครสมาชิก</a>
                    </li>
                    @endif --}}
                    @else
                    <li class="active">
                        <a href="{{ route('dashboard') }}">หน้าแรก</a>
                    </li>
                    <li>
                        <a href="{{ route('docter-dashboard') }}">หมอพื้นบ้าน</a>
                    </li>
                    <li>
                        <a href="{{ route('spa-dashboard') }}">สปา</a>
                    </li>
                    <li>
                        <a href="{{ route('product-dashboard') }}">ผลิตภัณฑ์สมุนไพร</a>
                    </li>
                    <li>
                        <a href="{{ route('herb-dashboard') }}">สมุนไพร</a>
                    </li>
                    <li>
                        <a href="{{ route('order-dashboard') }}">รายการสั่งซื้อ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ __('ออกจากระบบ') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </nav>
            <!-- //nav -->
        </div>
        <!-- //banner -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
