@extends('layouts.content')

@section('content')
<section style="margin-top: 45px">
    <div class="container-fluid" style="padding: 0 90px 0 90px;">
        <div class="row">
            <div class="col-lg-3">
                <div>
                    <p class="menu-label">สปา</p>
                    <div class="hr-line-dashed"></div>
                    @include('layouts.left-menu-product')
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-5">
                        <img class="card-img-top" src="{{
                            URL::asset('image/'.$productImgArray[0]) }}" alt="{{
                            $product->name }}" style="width:100%; height: auto;" />
                    </div>
                    <form action="{{ route('cart.item') }}" method="post">
                        <div class="col-lg">
                            <div class="row">
                                <div class="col-lg-5">
                                    <p class="detail-title">ชื่อผลิตภัณฑ์สมุนไพร</p>
                                </div>
                                <div class="col-lg-7">{{ $product->name }}</div>
                            </div>
                            <br>
                            <div class="hr-line-dashed"></div>
                            <br>
                            <div class="row">
                                <div class="col-lg-4 text-right">
                                    <p class="detail-title">ประเภทยา</p>
                                </div>
                                <div class="col-lg-5">
                                    @if( $product->type === '1')
                                    <label for="">ยาชุด</label>
                                    @endif
                                    @if( $product->type === '2')
                                    <label for="">ยาสำหรับใช้ภายนอก</label>
                                    @endif
                                    @if( $product->type === '3')
                                    <label for="">ยาสำหรับใช้ภายใน</label>
                                    @endif
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
                                            <label for="">{{ $product->price }}</label>
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
                                <div class="col-lg-12 text-center">
                                    @csrf
                                    @csrf
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                        <input type="hidden" name="qry" value="1">
                                        <input type="hidden" name="img" value="{{ $product->image }}">
                                        <input type="hidden" name="type" value="product">

                                        <button type="submit" class="btn btn-outline-success" style="font-size: 16pt">หยิบใส่ตระกร้า</button>
                                </div>
                            </div>

                    </form>
                </div>
            </div>
            <br>
            <div class="hr-line-dashed"></div>
            <br>
            <div class="row">
                <p class="detail-title">สรรพคุณ</p>
                <ol>
                    @foreach ($detail as $item)
                    <li>
                        <p style="color: #111; font-size: 14pt">{{ $item }}</p>
                    </li>
                    @endforeach
                </ol>

            </div>
            <br>
            <div class="hr-line-dashed"></div>
            <br>
        </div>
</section>
@endsection
