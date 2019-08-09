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
                            <div class="col-lg text-center">
                                <form action="{{ route('cart.item') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $herb->id }}">
                                    <input type="hidden" name="name" value="{{ $herb->name }}">
                                    <input type="hidden" name="price" value="{{ $herb->price }}">
                                    <input type="hidden" name="qry" value="1">
                                    <input type="hidden" name="img" value="{{ $herb->image }}">
                                    {{-- <input type="hidden" name="date" value="null">
                                    <input type="hidden" name="time" value="null"> --}}
                                    <input type="hidden" name="type" value="herb">

                                    <button type="submit" class="btn btn-outline-success" style="font-size: 16pt">ใส่ตระกร้า</button>
                                </form>
                                {{-- <a href="{{ route('herb.addTocart',['id' => $herb->id, 'type'=> 'herb']) }}"
                                    class="btn btn-outline-success" style="font-size: 16pt">ใส่ตระกร้า</a>
                                </div> --}}
                        </div>
                    </div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                <div class="row" style="margin-top: 30px">
                    <div class="col-lg-2"><p class="detail-title">สรรพคุณ</p></div>
                    <div class="col-lg-8">{{ $herb->detail }}</div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                <div class="row" style="margin-top: 30px">
                    <div class="col-lg-2"><p class="detail-title">ยาที่มีส่วนประกอบของ {{ $herb->name }}</p></div>
                    <div class="col-lg-8">{{ $herb->drugDetail }}</div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
            </div>
        </div>
    </div>
</section>
@endsection
