@extends('layouts.admin')

@section('content')
<!-- about -->
<section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about"
    style="margin-top: 30px;">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="d-flex justify-content-between" style="margin: 20px;">
            <div class="p-2"><h5 style="color: #bf3718; font-size: 20pt"><strong>แสดงข้อมูลการสั่งซื้อ</strong></h5></div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="">
                    {{-- {{ dd($orders[0]) }} --}}
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">รหัสการสั่งซื้อ</p>
                        </div>
                        <div class="col-lg-8">
                            <label for="">{{ $orders[0]->id }}</label>
                        </div>
                    </div>
                    <br>
                    <div class="hr-line-dashed"></div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">ชื่อ-สกุลผู้สั่งซื้อ</p>
                        </div>
                        <div class="col-lg-8">
                            <label for="">{{ $orders[0]->name }}</label>
                        </div>
                    </div>
                    <br>
                    <div class="hr-line-dashed"></div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">รายการสั่งซื้อ</p>
                        </div>
                        <div class="col-lg-8">
                            @foreach ($orders[0]->cart->items as $item)
                                <p style="color: #111"><b>{{ $item['item']->name }}</b> จำนวน {{ $item['qty'] }} ชิ้น</p>
                            @endforeach
                        </div>
                    </div>
                    <br>
                    <div class="hr-line-dashed"></div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">ที่อยู่การจัดส่ง</p>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-12">
                                        <p style="color: #111">{{ $orders[0]->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="hr-line-dashed"></div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">เบอร์โทร</p>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-12">
                                        <p style="color: #111">{{ $orders[0]->phone }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="hr-line-dashed"></div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">สถานะ</p>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-12">
                                        @if($orders[0]->status == 1)
                                        <p style="color: #111">รอการตรวจสอบชำระเงิน</p>
                                        @endif
                                        @if($orders[0]->status == 2) <p style="color: #111">เตรียมการจัดส่ง</p> @endif
                                        @if($orders[0]->status == 3) <p style="color: #111">สินค้าจัดส่งแล้ว</p>@endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="hr-line-dashed"></div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4 text-right">
                            <p class="detail-title">ช่องทางการชำระเงิน</p>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-12">
                                        @if($orders[0]->payment_id == 1)
                                        <p style="color: #111">ชำระผ่าน ATM</p>
                                        @endif
                                        @if($orders[0]->payment_id == 2)
                                        <p style="color: #111">iBanking</p>
                                        @endif
                                        @if($orders[0]->payment_id == 3)
                                        <p style="color: #111">บัตรเครดิต/บัตรเดบิต</p>
                                        @endif
                                        @if($orders[0]->payment_id == 4)
                                        <p style="color: #111">โอน/ชำระผ่านช่องทางธนาคาร</p>
                                        @endif
                                        @if($orders[0]->payment_id == 5)
                                        <p style="color: #111">ชำระเงินปลายทาง</p>
                                        @endif
                                        </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="hr-line-dashed"></div>
                    <br>
                    <div class="row">
                            <div class="col-lg-4 text-right">
                                <p class="detail-title">หลักฐานการชำระเงิน</p>
                            </div>
                            <div class="col-lg-5">
                                    <img
                                    class="card-img-top"
                                    src="{{
                                    URL::asset($orders[0]->image) }}"
                                    style="height: 40vh;
                                    width: 40vh;"
                                    />
                            </div>
                        </div>
                        <br>
                    <div class="hr-line-dashed"></div>
                    <br>

                    <div class="row" >
                            <div class="col-lg-4 text-right">
                                <p class="detail-title">จัดการข้อมูล</p>
                            </div>
                            @if($orders[0]->status === 1)
                            <div class="col-lg-5">
                                    <form action="{{ route('update.status',['id' => $orders[0]->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <button type="submit" class="btn btn-primary">ยืนยันการชำระ</button>
                                    </form>
                            </div>
                            @endif
                            @if($orders[0]->status === 2)
                            <div class="col-lg-5">
                                    <form action="{{ route('update.status',['id' => $orders[0]->id]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="status" id="status" value="3">
                                            <button type="submit" class="btn btn-primary">จัดส่งสินค้า</button>
                                </form>

                            </div>
                            @endif
                        </div>
                        <br>


                        <div class="hr-line-dashed"></div>
                        <br>
                    <div class="text-center">
                        <a href="{{ route('order-dashboard') }}" type="button"
                            class="btn btn-warning">ย้อนกลับ</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
