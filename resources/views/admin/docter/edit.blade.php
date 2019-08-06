@extends('layouts.admin')

@section('content')
<!-- about -->
<section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about"
    style="margin-top: 30px;">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="d-flex justify-content-between" style="margin: 20px;">
            <div class="p-2"><h5 style="color: #bf3718; font-size: 20pt"><strong>แก้ไขข้อมูลหมอพื้นบ้าน</strong></h5></div>
        </div>
        <div class="card">
            <div class="card-body">
                    <form action="{{ route('edit-docter-store',['id' => $docter->id]) }}" method="post" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">ชื่อ-สกุล</p>
                        </div>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="name"
                                name="name" value="{{ $docter->name }}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">อายุ<span style="color: red;">*</span></p>
                        </div>
                        <div class="col-lg-5">
                            <input required pattern="[0-9]{5}" type="text" class="form-control" id="age"
                                name="age" value="{{ $docter->age }}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">ที่อยู่</p>
                        </div>
                        <div class="col-lg-5">
                            <textarea class="form-control" rows="3" id="address"
                                name="address">{{ $docter->address }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">ตำบล<span style="color: red;">*</span></p>
                        </div>
                        <div class="col-lg-5">
                            <input required type="text" class="form-control" id="subdis"
                                name="subdis" value="{{ $docter->subdis }}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">อำเภอ<span style="color: red;">*</span></p>
                        </div>
                        <div class="col-lg-5">
                            <input required type="text" class="form-control" id="district"
                                name="district" value="{{ $docter->district }}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">จังหวัด<span style="color: red;">*</span></p>
                        </div>
                        <div class="col-lg-5">
                            <input required type="text" class="form-control" id="province"
                                name="province" value="{{ $docter->province }}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">ข้อมูลหมอ</p>
                        </div>
                        <div class="col-lg-5">
                            <textarea class="form-control" rows="3" id="history"
                                name="history">{{ $docter->history }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">โรคที่รักษา</p>
                        </div>
                        <div class="col-lg-5">
                            <textarea class="form-control" rows="3" id="disease"
                                name="disease">{{ $docter->disease }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">รูปภาพ</p>
                        </div>
                        <div class="col-lg-5">
                            <input type="file" class="form-control-file border"
                                id="image" name="image[]" value="{{ $docter->image }}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">ค่าธรรมเนียม</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" class="form-control"
                                        id="price" name="price" value="{{ $docter->price }}">
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
                            <p style="color: #111; font-size: 13pt">เวลาทำการ</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-5">
                                    <input type="text" class="form-control"
                                        id="worktime_start" name="worktime_start" value="{{ $docter->worktime_start }}">
                                </div>
                                <div class="col-1">
                                    -
                                </div>
                                <div class="col-5">
                                    <input type="text" class="form-control"
                                        id="worktime_stop" name="worktime_stop" value="{{ $docter->worktime_stop }}">
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
