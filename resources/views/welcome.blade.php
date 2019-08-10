@extends('layouts.app')
@section('content')
<!-- about -->
<section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-2">เกี่ยวกับเรา</h3>
        <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
            <p style="font-size: 15pt;">แพทย์แผนไทย ใกล้บ้านคุณ
            </p>
        </div>
        <div class="row">
            <div class="col-lg-5 video-info-img text-center position-relative">
                <div class="abut-img-w3l">
                    <img src="{{ URL::asset('images/bb1.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="abut-img-two">
                    <img src="{{ URL::asset('images/bb2.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7 left-abut-txt ">
                <div class="about-right-grid">
                    <h2 class="mb-3">หาหมอพื้นบ้าน (Ha Mor Peun Ban)</h2>
                    <p style="font-size: 15pt;">เว็บไซต์ “หาหมอพื้นบ้าน” ให้บริการทางด้านข้อมูลของหมอพื้นบ้าน ในพื้นที่ภาคใต้เพื่อเป็นประโยชน์แก่กลุ่มที่ ต้องการรักษาด้วยแพทย์ทางเลือก และ อนุรักษ์ตำรายาสมุนไพรไทย</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//about -->
<!-- service -->
<section class="service py-lg-4 py-md-4 py-sm-3 py-3" id="service">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-2">หมอพื้นบ้าน</h3>
        <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
            <p style="font-size: 15pt;">รักษาโรคแบบไทยๆ กับหมอพื้นบ้าน</p>
        </div>
        <div class="row">
            <?php $count = 0; ?>
            @foreach ($docter as $docters)
            <?php if ($count == 6) break; ?>
            <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
                <div class="grid-wthree-service">
                    <?php
                    $images = $docters->image;
                    if ($images === "") { } else {
                        $docterImgArray = explode('|', $images);
                    }
                    ?>
                    <a href="{{ route('docter-detail',
                                 $docters->id) }}">
                        <img src="{{ URL::asset('image/'.$docterImgArray[0]) }}" style="width: 133px;
                                      height: 128px;" alt="news image" class="img-fluid">
                        {{-- @endforeach --}}
                        <div class="ser-text-wthree mt-3 ellipsis">
                            <h4>
                                {{ $docters->name }}
                            </h4>
                            <p class="mt-2" style="display: -webkit-box;
                                        max-width: 400px;
                                        height: 88px;
                                        -webkit-line-clamp: 3;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        line-height: 1.625;
                                        text-align: initial;
                                        font-size: 14pt;
                                        " title="{{ $docters->history }}">{{ $docters->history }}</p>
                        </div>
                    </a>
                </div>
            </div>
            <?php $count++; ?>
            @endforeach
        </div>
    </div>
</section>
<!--//service -->
<!-- store-info -->
<section class="store-info py-lg-4 py-md-4 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="row">
            <div class="col-lg-7 store-details">
                <h4 class="mb-3">ผลิตภัณฑ์สมุนไพร</h4>
                <h6 class="mb-2" style="font-size: 15pt; color: #111;">ผลิตภัณฑ์สมุนไพร สำหรับการรักษาโรคแบบโบราณ ตามตำรับไทย</h6>
            </div>
        </div>
</section>
<!--//store-info -->

<!-- vegetable-info -->
<section class="veg-info py-lg-4 py-md-4 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="row">
            <div class="col-lg-7">
                <img src="{{ URL::asset('images/store.jpg') }}" alt="news image" class="img-fluid">
            </div>
            <div class="col-lg-5 veg-list-text">
                <?php $count = 0; ?>
                @foreach ($product as $products)
                <?php if ($count == 4) break; ?>
                <div class="row mb-2">
                    <div class="col-lg-7 col-md-7 col-sm-7 col-7 text-right py-lg-2 py-1 w3three-veg-org">
                        <h6 style="font-size: 13pt;">{{ $products->price }} บาท</h6>
                        <h5 class="my-2" style="font-size:13pt">{{ $products->name }}</h5>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-5 p-0">
                        <?php
                        $images = $products->image;
                        if ($images === "") { } else {
                            $productImgArray = explode('|', $images);
                        }
                        ?>
                        <a href="{{ route('product-detail',
                                 $products->id) }}">
                            <img src="{{ URL::asset('image/'.$productImgArray[0]) }}" alt="{{ $products->name }}" class="img-fluid" style="width:60%; height:auto; ">
                        </a>
                    </div>
                </div>
                <?php $count++; ?>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--//vegetable-info -->
<!-- gallery -->
<section class="gallery py-lg-4 py-md-3 py-sm-3 py-3" id="gallery">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-2">สมุนไพร </h3>
        <div class="row gallery-info">
            <?php $count = 0; ?>
            @foreach ($herb as $herbs)
            <?php if ($count == 6) break; ?>
            <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
                <div class="gallery-grids">
                    <a href="#{{ $herbs->id }}">
                        <?php
                        $images = $herbs->image;
                        if ($images === "") { } else {
                            $herbImgArray = explode('|', $images);
                        }
                        ?>
                        <img src="{{ URL::asset('image/'.$herbImgArray[0]) }}" alt="{{ $herbs->name }}" class="img-fluid" style="width:100%; height:auto; ">
                    </a>
                </div>
            </div>
            <?php $count++; ?>
            @endforeach
        </div>
        <!-- popup-->
        @foreach ($herb as $herbs)
        <div id="{{ $herbs->id }}" class="popup-effect">
            <div class="popup">
                <?php
                $images = $herbs->image;
                if ($images === "") { } else {
                    $herbImgArray = explode('|', $images);
                }
                ?>
                <img src="{{ URL::asset('image/'.$herbImgArray[0]) }}" alt="{{ $herbs->name }}" class="img-fluid">

                <a style="color:#111; font-size: 16pt" href="{{ route('herb-detail',
                                 $herbs->id) }}">{{ $herbs->name }}</a>
                <a class="close" href="#gallery">×</a>
            </div>
        </div>
        @endforeach
        <!-- //popup -->
    </div>
</section>
<!--//gallery -->
<!-- blog -->
<section class="blog py-lg-5 py-md-4 py-sm-3 py-3" id="blog" style="padding-bottom: 5rem !important;">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-2">สปา</h3>
        <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
            <p style="font-size: 15pt;">ร้านสปา ในรูปแบบการบริการแบบไทย</p>
        </div>
        <div class="row">
            <?php $count = 0; ?>
            @foreach ($spa as $spas)
            <?php if ($count == 3) break; ?>
            <div class="blog-wthree-color col-lg-4 position-relative my-3">
                <div class="w3ls-post-img">
                    <?php
                    $images = $spas->image;
                    if ($images === "") { } else {
                        $spaImgArray = explode('|', $images);
                    }
                    ?>
                    <img src="{{ URL::asset('image/'.$spaImgArray[0]) }}" class="img-fluid" alt="" style="height: 233px !important; width: 355px;">
                    <div class="blog-info" style="width:120px">
                        <a href="#about">
                            <ul>
                                <li>{{ $spas->price }} ฿</li>
                            </ul>
                        </a>
                    </div>
                </div>
                <div class="blog-txt-info ellipsis" style="height:150px">
                    <h4 class="mb-2" style="display: -webkit-box;
                max-width: 400px;
                height: 70px;
                -webkit-line-clamp: 2;
                -moz-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
                line-height: 1.625;
                text-align: initial;">
                        <a href="{{ route('spa-detail',
                                 $spas->id) }}" style="font-size:15pt" title="{{ $spas->name }}">{{ $spas->name }}</a>
                    </h4>
                    <div class="news-date-list pt-2">
                        <ul>
                            <li class="mr-1">
                                <a href="#" style="font-size: 13pt;">เวลาบริการ {{ $spas->worktime_start }} - {{ $spas->worktime_stop }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php $count++; ?>
            @endforeach
        </div>
    </div>
</section>
<!--//blog -->
<!-- footer -->
<section class="footer-w3layouts-bottem py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <div class="row ">
            <div class="footer-bottom-info col-lg-3 col-md-3">
                <a class="pb-lg-3 pb-md-3 pb-3 " style="color:#3b9974; font-size:20px" href="{{ route('docter') }}">หมอพื้นบ้าน</a>
            </div>
            <div class="footer-bottom-info col-lg-3 col-md-3">
                <a class="pb-lg-3 pb-md-3 pb-3 " style="color:#3b9974; font-size:20px" href="{{ route('spa') }}">สปา</a>
            </div>
            <div class="footer-bottom-info col-lg-3 col-md-3">
                <a class="pb-lg-3 pb-md-3 pb-3 " style="color:#3b9974; font-size:20px" href="{{ route('herb') }}">หมอพื้นบ้าน</a>
            </div>
            <div class="footer-bottom-info col-lg-3 col-md-3">
                <a class="pb-lg-3 pb-md-3 pb-3 " style="color:#3b9974; font-size:20px" href="{{ route('contact') }}">ติดต่อเรา</a>
            </div>
        </div>
        <!-- move icon -->
        <div class="text-center mt-lg-5 mt-md-4 mt-3">
            <a href="#home" class="move-top text-center mt-3">
                <span class="fa fa-arrow-up" aria-hidden="true"></span>
            </a>
        </div>
        <!--//move icon -->
    </div>
</section>
<!--footer-copy-right -->
<footer class="bottem-wthree-footer text-center py-md-4 py-3">
    <p>
        © 2019 HuaMhor. All Rights Reserved | By
        <a href="http://www.W3Layouts.com" target="_blank">sepuir</a>
    </p>
</footer>
<!--//footer-copy-right -->
@endsection
