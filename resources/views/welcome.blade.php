@extends('layouts.app')
@section('content')
  <!-- about -->
  <section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
          <h3 class="title text-center mb-2">เกี่ยวกับเรา</h3>
          <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
            <p>แพทย์แผนไทย ใกล้บ้านคุณ
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
                <p>เว็บไซต์ “หาหมอพื้นบ้าน” ให้บริการทางด้านข้อมูลของหมอพื้นบ้าน ในพื้นที่ภาคใต้เพื่อเป็นประโยชน์แก่กลุ่มที่ ต้องการรักษาด้วยแพทย์ทางเลือก และ อนุรักษ์ตำรายาสมุนไพรไทย</p>
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
                    <p>รักษาโรคแบบไทยๆ กับหมอพื้นบ้าน</p>
                  </div>
                  <div class="row">
                        <?php $count = 0; ?>
                        @foreach ($docter as $docters)
                            <?php if($count == 6) break; ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
                                    <div class="grid-wthree-service">
                                      <img src="{{ URL::asset($docters->image) }}" alt="news image" class="img-fluid">
                                      <div class="ser-text-wthree mt-3">
                                        <h4>
                                          {{ $docters->name }}
                                        </h4>
                                        <p class="mt-2">{{ $docters->history }}</p>
                                      </div>
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
              <h4 class="mb-3">สมุนไพร</h4>
              <h6 class="mb-2">สมุนไพรไทย รักษาโรคแบบออแกนิก</h6>
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
                    @foreach ($herb as $herbs)
                        <?php if($count == 3) break; ?>
              <div class="row mb-2">
                <div class="col-lg-7 col-md-7 col-sm-7 col-7 text-right py-lg-2 py-1 w3three-veg-org">
                  <h6>{{ $herbs->price }} บาท</h6>
                  <h5 class="my-2">{{ $herbs->name }}</h5>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 p-0">
                  <img src="{{ URL::asset($herbs->image) }}" alt="news image" class="img-fluid">
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
                    <?php if($count == 6) break; ?>
            <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
              <div class="gallery-grids">
                <a href="#{{ $herbs->id }}">
                  <img src="{{ URL::asset($herbs->image) }}" alt="news image" class="img-fluid">
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
              <img src="{{ URL::asset($herbs->image) }}" alt="Popup Image" class="img-fluid">
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
            <p>ร้านสปา ในรูปแบบการบริการแบบไทย</p>
          </div>
          <div class="row">
              <?php $count = 0; ?>
              @foreach ($spa as $spas)
                  <?php if($count == 3) break; ?>
            <div class="blog-wthree-color col-lg-4 position-relative my-3">
              <div class="w3ls-post-img">
                <img src="{{ URL::asset($spas->image) }}" class="img-fluid" alt="">
                <div class="blog-info">
                  <a href="#about">
                    <ul>
                      <li>{{ $spas->price }} ฿</li>
                    </ul>
                  </a>
                </div>
              </div>
              <div class="blog-txt-info">
                <h4 class="mb-2">
                  <a href="#about">{{ $spas->name }}</a>
                </h4>
                <p>{{ $spas->detail }}</p>
                <div class="news-date-list pt-2">
                  <ul>
                    <li class="mr-1">
                      <a href="#">เวลาบริการ {{ $spas->worktime_start }} - {{ $spas->worktime_stop }}</a>
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

