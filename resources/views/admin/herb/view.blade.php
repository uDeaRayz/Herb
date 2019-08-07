@extends('layouts.admin')

@section('content')
<!-- about -->
<section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about"
    style="margin-top: 30px;">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="d-flex justify-content-between" style="margin: 20px;">
            <div class="p-2"><h5 style="color: #bf3718; font-size: 20pt"><strong>แสดงข้อมูลสมุนไพร</strong></h5></div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="">
                        <div class="row">
                                <div class="col-lg-4 text-right">
                                    <p class="detail-title">รูปภาพ</p>
                                </div>
                                <div class="col-lg-5">
                                        @if (!$herb->image == null)
                                        <img src="{{ asset('image/herb/'.$imagesArray[0]) }}"style="height:250px; width:300px;">
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
                            <p class="detail-title">ชื่อสมุนไพร</p>
                        </div>
                        <div class="col-lg-5">
                                <label for="">{{ $herb->name }}</label>
                        </div>
                    </div>
                    <br>
                    <div class="hr-line-dashed"></div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">สรรพคุณ</p>
                        </div>
                        <div class="col-lg-5">
                                <label for="">{{ $herb->detail }}</label>
                        </div>
                    </div>
                    <br>
                    <div class="hr-line-dashed"></div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">ราคา</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-4">
                                        <label for="">{{ $herb->price }}</label>
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
                                <p class="detail-title">จำนวน</p>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-4">
                                            <label for="">{{ $herb->stock }}</label>
                                    </div>
                                    <div class="col-3">
                                            <p class="detail-title">ชิ้น</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="hr-line-dashed"></div>
                    <br>
                    <div class="text-center">
                            <a href="{{ route('herb-dashboard') }}" type="button" class="btn btn-warning">ย้อนกลับ</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
