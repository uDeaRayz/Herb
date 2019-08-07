@extends('layouts.admin')

@section('content')
<!-- about -->
<section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about"
    style="margin-top: 30px;">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="d-flex justify-content-between" style="margin: 20px;">
            <div class="p-2"><h5 style="color: #bf3718; font-size: 20pt"><strong>แสดงข้อมูลร้านสปา</strong></h5></div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="">
                        <div class="row">
                                <div class="col-lg-4 text-right">
                                    <p class="detail-title">รูปภาพ</p>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                            @if (!$spa->image == null)
                                            {{-- @foreach ($imagesArray as $image) --}}
                                        <div class="col-6">
                                            <img src="{{ asset('image/spa/'.$imagesArray[0]) }}"style="height:250px; width:300px;"> <!-- Single image -->
                                        </div>
                                        {{-- @endforeach --}}
                                    </div>
                                    @else
                                    <img src="{{ URL::asset('images/no_image.png') }}"style="height:250px; width:300px;">
                                    @endif
                                </div>
                            </div>
                            <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">ชื่อร้าน</p>
                        </div>
                        <div class="col-lg-5">
                            <label for="">{{ $spa->name }}</label>
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
                                <label for=""> {{ $spa->address }} &nbsp;&nbsp; {{ $spa->district }}
                                    &nbsp;&nbsp; {{ $spa->province }} &nbsp;&nbsp; {{ $spa->zipcode }} </label>
                        </div>
                    </div>
                    <br>
                    <div class="hr-line-dashed"></div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">เบอร์ติดต่อ</p>
                        </div>
                        <div class="col-lg-5">
                                <label for=""> {{ $spa->phone }}</label>
                        </div>
                    </div>
                    <br>
                    <div class="hr-line-dashed"></div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">ข้อมูลการบริการ</p>
                        </div>
                        <div class="col-lg-5">
                                <label for="">{{ $spa->detail }} </label>
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
                                        <label for=""> {{ $spa->price }} </label>
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
                                        <label for=""> {{ $spa->worktime_start }} </label>
                                </div>
                                <div class="col-1">
                                    -
                                </div>
                                <div class="col-3">
                                        <label for=""> {{ $spa->worktime_stop }} </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="hr-line-dashed"></div>
                    <br>
                    <div class="text-center">
                        <a href="{{ route('spa-dashboard') }}" type="button" class="btn btn-warning">ย้อนกลับ</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
