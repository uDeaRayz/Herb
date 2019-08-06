@extends('layouts.admin')

@section('content')
<!-- about -->
<section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about"
    style="margin-top: 30px;">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="d-flex justify-content-between" style="margin: 20px;">
            <div class="p-2"><h5 style="color: #bf3718; font-size: 20pt"><strong>แสดงข้อมูลหมอพื้นบ้าน</strong></h5></div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">รูปภาพ</p>
                        </div>
                        <div class="col-lg-5">
                                @if (!$docter->image == null)
                                @foreach ($imagesArray as $image)
                                <img src="{{ asset('image/docter/'.$image) }}"style="height:250px; width:300px;"> <!-- multi image -->
                                <img src="{{ asset('image/docter/'.$image[0]) }}"style="height:250px; width:300px;"> <!-- Single image -->
                                @endforeach
                                @else
                                <img src="{{ URL::asset('images/no_image.png') }}"style="height:250px; width:300px;">
                                @endif
                        </div>
                    </div>
                                                <br>
                            <div class="hr-line-dashed"></div>
                            <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">ชื่อ-สกุล</p>
                        </div>
                        <div class="col-lg-5">
                            <label for="">{{ $docter->name }}</label>
                        </div>
                    </div>
                                                <br>
                            <div class="hr-line-dashed"></div>
                            <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">อายุ</p>
                        </div>
                        <div class="col-lg-5">
                            <label for="">{{ $docter->age }}</label>
                        </div>
                    </div>
                                                <br>
                            <div class="hr-line-dashed"></div>
                            <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">ที่อยู่</p>
                        </div>
                        <div class="col-lg-5">
                            <label for="">{{ $docter->address }} ตำบล {{ $docter->subdis }} อำเภอ {{ $docter->district }} จังหวัด {{ $docter->province }}</label>
                        </div>
                    </div>
                                                <br>
                            <div class="hr-line-dashed"></div>
                            <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">ข้อมูลหมอ</p>
                        </div>
                        <div class="col-lg-5">
                            <label for="">{{ $docter->history }}</label>
                        </div>
                    </div>
                                                <br>
                            <div class="hr-line-dashed"></div>
                            <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">โรคที่รักษา</p>
                        </div>
                        <div class="col-lg-5">
                            <label for="">{{ $docter->disease }}</label>
                        </div>
                    </div>
                                                <br>
                            <div class="hr-line-dashed"></div>
                            <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">ค่าธรรมเนียม</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-4">
                                    <label for="">{{ $docter->price }}</label>
                                </div>
                                <div class="col-3">
                                    <p class="detail-title">บาท</p>
                                </div>
                            </div>
                        </div>
                    </div>
                                                <br>
                            <div class="hr-line-dashed"></div>
                            <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">เวลาทำการ</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-3">
                                    <label for="">{{ $docter->worktime_start }}</label>
                                </div>
                                <div class="col-1">
                                    -
                                </div>
                                <div class="col-3">
                                    <label for="">{{ $docter->worktime_stop }}</label>
                                </div>

                            </div>
                        </div>
                    </div>
                                                <br>
                            <div class="hr-line-dashed"></div>
                            <br>
                    <div class="text-center">
                        <a href="{{ route('docter-dashboard') }}" type="button"
                            class="btn btn-warning">ย้อนกลับ</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
