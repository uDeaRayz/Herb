<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name", "HuaMhor") }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
        <title>{{ config("app.name", "HuaMhor") }}</title>
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

    <body>
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
                            <h5 class="mb-sm-3 mb-2">Healthy Lift</h5>
                            <h4>{{ config("app.name", "HuaMhor") }}</h4>
                        </div>
                        <div class="slide-info-txt">
                            <p>แพทย์แผนไทย ใกล้บ้านคุณ</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //banner -->
            <section style="margin-top: 45px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div>
                                <p class="menu-label">หมอพื้นบ้าน</p>
                                <ul class="menu-list">
                                    <li>
                                        <a href="">เลือกจังหวัดที่ตั้งการรักษาในภาคใต้</a>
                                        <ul>
                                            <li>
                                                <a>สุราษฎร์ธานี</a>
                                            </li>
                                            <li>
                                                <a>สงขลา</a>
                                            </li>
                                            <li>
                                                <a>ตรัง</a>
                                            </li>
                                            <li>
                                                <a>ตรัง</a>
                                            </li>
                                            <li>
                                                <a>ตรัง</a>
                                            </li>
                                            <li>
                                                <a>ตรัง</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="">โรคที่ให้การรักษา</a>
                                        <ul>
                                            <li>
                                                <a>แก้พิษงู</a>
                                            </li>
                                            <li>
                                                <a>โรคอัมพฤกษ์</a>
                                            </li>
                                            <li>
                                                <a>โรคมะเร็ง</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card" style="width:100%">
                                        <img
                                            class="card-img-top"
                                            src="{{
                                            URL::asset('images/docter.png') }}"
                                            alt="Card image"
                                            style="width:100%; height: 240px;"
                                            />
                                        <div class="card-body">
                                            <h4 class="card-title">ประดับ จันทร์ทองเดช</h4>
                                            <div  class="card-text ellipsis">
                                                <p
                                                    style="display: -webkit-box;
                                                    max-width: 400px;
                                                    height: 75px;
                                                    -webkit-line-clamp: 3;
                                                    -webkit-box-orient: vertical;
                                                    overflow: hidden;
                                                    text-overflow: ellipsis;
                                                    line-height: 1.625;
                                                    text-align: initial;">
                                                    Some example text some example
                                                    text. John Doe is an architect
                                                    and engineer Some example text some example
                                                    text. John Doe is an architect
                                                    and engineer Some example text some example
                                                    text. John Doe is an architect
                                                    and engineer Some example text some example
                                                    text. John Doe is an architect
                                                    and engineer
                                                </p>

                                            </div>
                                            <div class="text-center">
                                                <a href="#" class="btn btn-primary">รายละเอียด</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card" style="width:100%">
                                        <img
                                            class="card-img-top"
                                            src="{{
                                            URL::asset('images/docter.png') }}"
                                            alt="Card image"
                                            style="width:100%; height: 240px;"
                                            />
                                        <div class="card-body">
                                            <h4 class="card-title">ประดับ จันทร์ทองเดช</h4>
                                            <div  class="card-text ellipsis">
                                                <p
                                                    style="display: -webkit-box;
                                                    max-width: 400px;
                                                    height: 75px;
                                                    -webkit-line-clamp: 3;
                                                    -webkit-box-orient: vertical;
                                                    overflow: hidden;
                                                    text-overflow: ellipsis;
                                                    line-height: 1.625;
                                                    text-align: initial;">
                                                    Some example text some example
                                                    text. John Doe is an architect
                                                    and engineer Some example text some example
                                                    text. John Doe is an architect
                                                    and engineer Some example text some example
                                                    text. John Doe is an architect
                                                    and engineer Some example text some example
                                                    text. John Doe is an architect
                                                    and engineer
                                                </p>

                                            </div>
                                            <div class="text-center">
                                                <a href="#" class="btn btn-primary">รายละเอียด</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card" style="width:100%">
                                        <img
                                            class="card-img-top"
                                            src="{{
                                            URL::asset('images/docter.png') }}"
                                            alt="Card image"
                                            style="width:100%; height: 240px;"
                                            />
                                        <div class="card-body">
                                            <h4 class="card-title">ประดับ จันทร์ทองเดช</h4>
                                            <div  class="card-text ellipsis">
                                                <p
                                                    style="display: -webkit-box;
                                                    max-width: 400px;
                                                    height: 75px;
                                                    -webkit-line-clamp: 3;
                                                    -webkit-box-orient: vertical;
                                                    overflow: hidden;
                                                    text-overflow: ellipsis;
                                                    line-height: 1.625;
                                                    text-align: initial;">
                                                    Some example text some example
                                                    text. John Doe is an architect
                                                    and engineer Some example text some example
                                                    text. John Doe is an architect
                                                    and engineer Some example text some example
                                                    text. John Doe is an architect
                                                    and engineer Some example text some example
                                                    text. John Doe is an architect
                                                    and engineer
                                                </p>

                                            </div>
                                            <div class="text-center">
                                                <a href="#" class="btn btn-primary">รายละเอียด</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
