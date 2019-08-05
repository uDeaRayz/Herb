@extends('layouts.content')

@section('content')
<section style="margin-top: 45px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div>
                    <p class="menu-label">สมุนไพร</p>
                    <div class="hr-line-dashed"></div>
                    @include('layouts.left-menu-herb')
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4">
                        <img
                            class="card-img-top"
                            src="{{
                            URL::asset($herb->image) }}"
                            alt="Card image"
                            style="width:100%; height: 240px;"
                            />
                    </div>
                    <div class="col-lg">
                        <div class="row">
                            <div class="col-lg-3"><p class="detail-title">ชื่อสินค้า</p></div>
                            <div class="col-lg">{{ $herb->name }}</div>
                        </div>
                        <br>
                        <div class="hr-line-dashed"></div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3"><p class="detail-title">ราคา</p></div>
                            <div class="col-lg">{{ $herb->price }} บาท/ชิ้น</div>
                        </div>
                        <br>
                        <div class="hr-line-dashed"></div>
                        <br>
                        <div class="row">
                            <div class="col-lg text-center"><a href="#"
                                    class="btn btn-outline-success">ใส่ตระกร้า</a></div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                <div class="row">
                    <div class="col-lg-2"><p class="detail-title">สรรพคุณ</p></div>
                    <div class="col-lg">{{ $herb->detail }}</div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
            </div>
        </div>
    </div>
</section>
@endsection
