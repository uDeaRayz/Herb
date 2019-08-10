@extends('layouts.content')

@section('content')
<section style="margin-top: 45px">
        <div class="container-fluid" style="padding: 0 90px 0 90px;">
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
                            URL::asset('image/'.$herbsImgArray[0]) }}"
                            style="width:100%; height: auto;"
                            />
                    </div>
                    <div class="col-lg">
                        <div class="row">
                            <div class="col-lg-3"><p class="detail-title">ชื่อสมุนไพร</p></div>
                            <div class="col-lg">{{ $herb->name }}</div>
                        </div>
                        <br>
                        <div class="hr-line-dashed"></div>
                        <br>
                    </div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                <p class="detail-title">สรรพคุณ</p>
                <p style="color: #111; font-size: 14pt">{{ $herb->detail }}<p>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                <p class="detail-title">ยาที่มีส่วนประกอบของสมุนไพรชนิดนี้</p>
                <ol>
                        @foreach ($detail as $item)
                    <li><p style="color: #111; font-size: 14pt">{{ $item }}</p></li>
                    @endforeach
                      </ol>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
            </div>
        </div>
    </div>
</section>
@endsection
