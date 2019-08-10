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
                <form action="{{ route('edit-product-store',['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">ชื่อสมุนไพร</p>
                        </div>
                        <div class="col-lg-5">
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">สรรพคุณ</p>
                        </div>
                        <div class="col-lg-5">
                            <textarea class="form-control" rows="5" id="detail" name="detail" value="">{{ $product->detail }}</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                            <div class="col-lg-4 text-right">
                                <p style="color: #111; font-size: 13pt">เลือกประเภทผลิตภัณฑ์</p>
                            </div>
                            <div class="col-lg-5">
                                    @if ( $product->type === '1' )
                                    <select class="form-control" id="type" name="type">
                                      <option selected value="1">ยาชุด</option>
                                      <option value="2">ยาใช้ภายนอก</option>
                                      <option value="3">ยาใช้ภายใน</option>
                                    </select>
                                    @endif
                                    @if ( $product->type === '2' )
                                    <select class="form-control" id="type" name="type">
                                      <option  value="1">ยาชุด</option>
                                      <option selected value="2">ยาใช้ภายนอก</option>
                                      <option value="3">ยาใช้ภายใน</option>
                                    </select>
                                    @endif
                                    @if ( $product->type === '3' )
                                    <select class="form-control" id="type" name="type">
                                      <option  value="1">ยาชุด</option>
                                      <option  value="2">ยาใช้ภายนอก</option>
                                      <option  selected value="3">ยาใช้ภายใน</option>
                                    </select>
                                    @endif
                            </div>
                        </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p style="color: #111; font-size: 13pt">ราคา</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
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
                            <p style="color: #111; font-size: 13pt">รูปภาพ</p>
                        </div>
                        <div class="col-lg-5">
                            <input type="file" class="form-control-file border" id="image[]" name="image[]" value="{{ $product->image }}" multiple>
                        </div>
                    </div>
                    <br><br>
                    <div class="text-center">
                            <button type="submit" class="btn btn-success">บันทึก</button>
                            <a href="{{ route('product-dashboard') }}" type="button" class="btn btn-danger">ยกเลิก</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
