@extends('layouts.admin')

@section('content')
<!-- about -->
<section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about"
    style="margin-top: 30px;">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h5 style="color: #bf3718; font-size: 20pt"><strong>จัดการข้อมูลการสั่งซื้อ</strong></h5>
        <div class="d-flex flex-row-reverse" style="margin-bottom: 20px;
            margin-top: 20px;">
            <div class="p-2">
                <form class="form-inline">
                    <label for="sort" class="mr-sm-2">แสดงข้อมูลตาม</label>
                    <select name="sort" class="custom-select">
                        <option selected value="all">แสดงทุกรายการ</option>
                        <option value="หมอพื้นบ้าน">หมอพื้นบ้าน</option>
                        <option value="สปา">สปา</option>
                        <option value="สมุนไพร">สมุนไพร</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">ว/ด/ป</th>
                        <th class="text-center" style="width: 15%">เลขที่สั่งซื้อ</th>
                        <th class="text-center" style="width: 30%">รายการสั่งซื้อ</th>
                        <th class="text-center" style="width: 10%">ราคา</th>
                        <th class="text-center" style="width: 30%">สถานะ</th>
                        <th class="text-center" style="width: 5%">จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->id }}</td>
                        <td>
                                @foreach ($order->cart->items as $item)
                                            <p style="color: #111"><b>{{ $item['item']->name }}</b> จำนวน {{ $item['qty'] }} ชิ้น</p>
                                    @endforeach
                        </td>
                        <td>
                            <p style="color: #111">{{ $order->cart->totalPrice }}</p>
                        </td>
                       <td class="text-center">
                                @if($order->status == 0)
                                <span class="alert alert-warning text-center">รอการชำระเงิน</span>
                                @endif
                                @if($order->status == 2) <span class="alert alert-warning text-center">เตรียมการจัดส่ง</span> @endif
                                @if($order->status == 3) <span class="alert alert-success text-center">สินค้าจัดส่งแล้ว</span>@endif
                                @if($order->status == 1) <span class="alert alert-success text-center">รอการตรวจสอบชำระเงิน</span>@endif
                        </td>
                         <td class="text-center">
                            <a href="{{ route('view-order',$order->id ) }}" class="btn btn-primary btn-sm"
                                data-toggle="tooltip" title="ดูข้อมูล"><i
                                    class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table></div>

    </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <img src="" alt="">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">ยืนยัน</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                        </div>
                    </div>

                </div>
            </div>
</section>
@endsection
