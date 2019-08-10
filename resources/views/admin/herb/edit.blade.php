@extends('layouts.admin')

@section('content')
<!-- about -->
<section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about"
    style="margin-top: 30px;">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="d-flex justify-content-between" style="margin: 20px;">
            <div class="p-2"><h5 style="color: #bf3718; font-size: 20pt"><strong>แก้ไขข้อมูลสมุนไพร</strong></h5></div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('edit-herb-store',['id' => $herb->id]) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">ชื่อสมุนไพร</p>
                        </div>
                        <div class="col-lg-5">
                                <input type="text" class="form-control" id="name" name="name" value="{{ $herb->name }}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">สรรพคุณ</p>
                        </div>
                        <div class="col-lg-5">
                            <textarea class="form-control" rows="5" id="detail" name="detail" value="">{{ $herb->detail }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">ส่วนประกอบของตัวยา<span style="color: red;">*</span></p>
                        </div>
                        <div class="col-lg-5">
                            <textarea class="form-control" rows="5" id="drugDetail" name="drugDetail"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">รูปภาพ</p>
                        </div>
                        <div class="col-lg-5">
                            <input type="file" class="form-control-file border" id="image[]" name="image[]" value="{{ $herb->image }}" multiple>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                            <button type="submit" class="btn btn-success">บันทึก</button>
                            <a href="{{ route('herb-dashboard') }}" type="button" class="btn btn-danger">ยกเลิก</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
