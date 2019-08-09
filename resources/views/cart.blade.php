@extends('layouts.order-cart')

@section('content')

<section style="margin-top: 45px">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
        <div class="container">
            <div class="card">
                <div class="card-header">ที่อยู่ในการจัดส่ง</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="address">ที่อยู่ <span style="color: red">*</span></label>
                        <textarea required rows="3" type="text" class="form-control"
                            id="address" name="address"> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="phone">เบอร์ติดต่อ <span style="color: red">*</span>
                            <input required maxlength="10" type="text"
                                class="form-control"
                                id="phone" name="phone" style="width: 250px">

                        </label>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="alert alert-secondary">
                <strong>จัดส่งฟรี</strong> *เมื่อซื้อสินค้าครบ 700 บาท ขึ้นไป
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="card">
                        <div class="card-header">รถเข็นของคุณ <span
                                class="badge"></span></div>
                                @foreach ($product as $item)
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-lg-3 text-center">
                                        <img
                                            class="card-img-top"
                                            src=""
                                            alt=""
                                            style="height: 15vh;
                                            width: 15vh;"
                                            />
                                    </div>
                                    <div class="col-lg">
                                        <div class="row">
                                            <div class="col-lg">
                                                <p style="color: #111;">ชื่อสินค้า
                                                <span style="color: #111;">{{ $item->name }}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="d-flex p-3" style="padding:
                                                0rem
                                                !important;
                                                padding-top: 0rem !important;
                                                padding-right: 0rem !important;
                                                padding-bottom: 0rem !important;
                                                padding-left: 0.5rem !important;">
                                                <div class="p-2">
                                                    <p
                                                        style="color:#111
                                                        !important;">จำนวน
                                                        &nbsp;&nbsp;
                                                        {{ $item->quantity }}
                                                        &nbsp;&nbsp;ชิ้น
                                                        <p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg">
                                                        <p style="color: #111;">ราคา
                                                            &nbsp;&nbsp;<span
                                                                style="color:
                                                                #111;">{{ $item->price }}</span>
                                                            &nbsp;&nbsp;บาท</p>
                                                    </div>
                                                    <a href=""
                                                        class="btn
                                                        btn-outline-danger">ยกเลิก</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                </div>
                            </div>
                            @endforeach

                        <div class="col-md-4 col-lg-4 bg-dark" style="padding:
                            10px">
                            <h5 style="color: #fff">สรุป</h5>
                            <br>
                            <div class="hr-line-dashed"></div>
                            <br><br><br>
                            <div class="row" style="color: #fff">
                                <div class="col-3">ยอดรวม</div>
                                <div class="col text-right">
                                    บาท</div>
                            </div>
                            <br><br>
                            <div style="background-color: rgb(253, 253, 253)">
                                <br>
                                <div class="custom-control custom-radio">
                                    <input type="radio"
                                        class="custom-control-input"
                                        id="payment_type1" name="payment_type"
                                        value="1">
                                    <label class="custom-control-label pointer"
                                        for="payment_type1" style="
    padding-left: 50px !important;
">ชำระผ่าน ATM</label>
                                </div>
                                <br>
                                <div class="custom-control custom-radio">
                                    <input type="radio"
                                        class="custom-control-input"
                                        id="payment_type2" name="payment_type"
                                        value="2">
                                    <label class="custom-control-label pointer"
                                        for="payment_type2" style="
    padding-left: 50px !important;
">iBanking</label>
                                </div>
                                <br>
                                <div class="custom-control custom-radio">
                                    <input type="radio"
                                        class="custom-control-input"
                                        id="payment_type3" name="payment_type"
                                        value="3">
                                    <label class="custom-control-label pointer"
                                        for="payment_type3" style="
    padding-left: 50px !important;
">บัตรเครดิต/บัตรเดบิต</label>
                                </div>
                                <br>
                                <div class="custom-control custom-radio">
                                    <input type="radio"
                                        class="custom-control-input"
                                        id="payment_type4" name="payment_type"
                                        value="4">
                                    <label class="custom-control-label pointer"
                                        for="payment_type4" style="
    padding-left: 50px !important;
">โอน/ชำระผ่านช่องทางธนาคาร</label>
                                </div>
                                <br>
                                <div class="custom-control custom-radio">
                                    <input type="radio"
                                        class="custom-control-input"
                                        id="payment_type5" name="payment_type"
                                        value="5">
                                    <label class="custom-control-label pointer"
                                        for="payment_type5" style="
    padding-left: 50px !important;
">ชำระเงินปลายทาง</label>
                                </div>
                                <br>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-block
                                btn-success">สั่งซื้อ</button>
                            <a href="{{ route('home') }}" type="button"
                                class="btn btn-block btn-danger">ยกเลิก</a>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <section style="margin-top: 45px">
            <div class="container">
                <p style="color: #111; font-size:18pt">ขออภัยไม่มีสินค้าในตระกร้า</p>
            </div>
        </section>


        @endsection
