@extends('layouts.admin')

@section('content')
<!-- about -->
<section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about"
    style="margin-top: 30px;">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="d-flex justify-content-between" style="margin: 20px;">
            <div class="p-2"><h5 style="color: #bf3718; font-size: 20pt"><strong>เพิ่มข้อมูลหมอพื้นบ้าน</strong></h5></div>
        </div>
        <div class="card">
            <div class="card-body">
                    <form action="{{ route('add-docter-store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">ชื่อ-สกุล<span style="color: red;">*</span></p>
                        </div>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="name"
                                name="name">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">ที่อยู่<span style="color: red;">*</span></p>
                        </div>
                        <div class="col-lg-5">
                            <input required type="text" class="form-control" id="address"
                                name="address">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">อำเภอ<span style="color: red;">*</span></p>
                        </div>
                        <div class="col-lg-5">
                            <input required type="text" class="form-control" id="district"
                                name="district">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">จังหวัด<span style="color: red;">*</span></p>
                        </div>
                        <div class="col-lg-5">
                            <input required type="text" class="form-control" id="province"
                                name="province">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">รหัสไปรษณีย์<span style="color: red;">*</span></p>
                        </div>
                        <div class="col-lg-5">
                            <input required pattern="[0-9]{5}" type="text" class="form-control" id="zipcode"
                                name="zipcode">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">เบอร์ติดต่อ</p>
                        </div>
                        <div class="col-lg-5">
                            <input pattern="{0-9}" type="text" class="form-control" id="phone"
                                name="phone" min="9" max="10" maxlength="10">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">ข้อมูลหมอ</p>
                        </div>
                        <div class="col-lg-5">
                            <textarea class="form-control" rows="3" id="history"
                                name="history"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">โรคที่รักษา</p>
                        </div>
                        <div class="col-lg-5">
                            <textarea class="form-control" rows="3" id="disease"
                                name="disease"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">รูปภาพ</p>
                        </div>
                        <div class="col-lg-5">
                            <input type="file" class="form-control-file border"
                                id="image" name="image[]" multiple >
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">ค่าธรรมเนียม<span style="color: red;">*</span></p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" class="form-control"
                                        id="price" name="price">
                                </div>
                                <div class="col-3">
                                    <p style="color: #111; font-size: 13pt">บาท</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">เวลาทำการ<span style="color: red;">*</span></p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-3">
                                    <input type="text" class="form-control"
                                        id="worktime_start" name="worktime_start">
                                </div>
                                <div class="col-1">
                                    -
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control"
                                        id="worktime_stop" name="worktime_stop">
                                </div>

                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">บันทึก</button>
                        <a href="{{ route('docter-dashboard') }}" type="button" class="btn btn-danger">ยกเลิก</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
