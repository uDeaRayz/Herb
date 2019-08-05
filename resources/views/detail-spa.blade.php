@extends('layouts.content')

@section('content')
<section style="margin-top: 45px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div>
                    <p class="menu-label">สปา</p>
                    <div class="hr-line-dashed"></div>
                    @include('layouts.left-menu-spa')
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4">
                        <img
                            class="card-img-top"
                            src="{{
                            URL::asset($spa->image) }}"
                        alt="Card image"
                        style="width:100%; height: 240px;"
                        />
                    </div>
                    <div class="col-lg">
                        <div class="row">
                            <div class="col-lg-4"><p class="detail-title">ชื่อ-สกุล</p></div>
                            <div class="col-lg">{{ $spa->name }}</div>
                        </div>
                        <br>
                        <div class="hr-line-dashed"></div>
                        <br>
                        <div class="row">
                            <div class="col-lg-4"><p class="detail-title">ที่อยู่</p></div>
                            <div class="col-lg">{{ $spa->address }} <br>
                                <b>อำเภอ</b> {{ $spa->district }} <br>
                                <b>จังหวัด</b> {{ $spa->province }} <br>
                                <b>รหัสไปรษณีย์</b> {{ $spa->zipcode }}
                            </div>
                        </div>
                        <br>
                        <div class="hr-line-dashed"></div>
                        <br>
                        <div class="row">
                            <div class="col-lg-4"><p class="detail-title">ค่าบริการพื้นฐาน</p></div>
                            <div class="col-lg">{{ $spa->price }} บาท
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                <div class="row">
                    <div class="col-lg-3"><p class="detail-title">ข้อมูลการบริการ</p></div>
                    <div class="col-lg">{{ $spa->detail }}</div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                <form>
                    <div class="row">
                        <div class="col-lg-3"><b>หมายเหตุ</b></div>
                        <div class="col-lg">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex">
                                        <div class="p-2"><label>วันที่</label></div>
                                        <div class="p-2"><input
                                                class="form-control"
                                                type="date"
                                                value="2011-08-19"
                                                id="example-date-input"></div>
                                        <div class="p-2"></div>
                                        <div class="p-2"><label>เวลา</label></div>
                                        <div class="p-2"><input
                                                class="form-control"
                                                type="time"
                                                value="13:45:00"
                                                id="example-time-input"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="hr-line-dashed"></div>
                    <br>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg">

                            <div class="d-flex">
                                <div class="p-2"><b>จองครึ่งวัน</b></div>
                                <div class="p-2">
                                    <div class="custom-control custom-radio">
                                        <input type="radio"
                                            class="custom-control-input"
                                            id="morning" name="haftday"
                                            value="customEx">
                                        <label class="custom-control-label"
                                            for="morning" style="padding-left:
                                            30px;">ช่วงเช้า</label>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="custom-control custom-radio">
                                        <input type="radio"
                                            class="custom-control-input"
                                            id="afternoon" name="haftday"
                                            value="customEx">
                                        <label class="custom-control-label"
                                            for="afternoon" style="padding-left:
                                            30px;">
                                            ช่วงบ่าย</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-outline-success">จอง</button>
                        </div>
                    </div>
                </form>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                <div class="row">
                    <div class="col-lg-3"><b>สถานะ</b></div>
                    <div class="col-lg">
                        <span style="color: red"> <b>มีการจองแล้ว</b></span>
                    </div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
            </div>
        </div>
    </div>
</section>
@endsection
