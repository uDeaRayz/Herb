@extends('layouts.order-cart')

@section('content')
<section style="margin-top: 45px">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h4 class="text-primary" style="font-weight: 700">รายการสั่งซื้อ</h4>
                @foreach ($orders as $order)
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($order->cart->items as $item)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <p style="color: #111"><b>{{ $item['item']->name }}</b> จำนวน {{ $item['qty'] }} ชิ้น</p>
                                    <span class="badge badge-primary badge-pill">{{ $item['price'] }} ฿</span>
                                    </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-footer">
                            <div class="d-flex justify-content-between mb-3">
                                    <div class="p-2"><strong>ราคารวม : {{ $order->cart->totalPrice }}</strong></div>
                                    <div class="p-2">
                                            @if($order['status'] == 0)
                                            <button type="button" class="btn btn-primary BtnUpdate" id="BtnUpdate" data-id="{{ $order->id }}"  data-toggle="modal" data-target="#myModal">แจ้งการชำระ
                                            </button>
                                            @endif
                                            @if($order['status'] == 2) <span class="alert alert-warning">เตรียมการจัดส่ง</span> @endif
                                            @if($order['status'] == 3) <span class="alert alert-success">สินค้าจัดส่งแล้ว</span>@endif
                                            @if($order['status'] == 1) <span class="alert alert-warning">รอการดำเนินการ</span>@endif

                                    </div>
                                  </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".BtnUpdate").click(function () {
            $(".myModal").modal();
            var post_id = $(this).data('id');
            $(".modal-body #post_id").val(post_id);
        });
        });

    </script>

    <!-- Modal -->
    <div class="modal fade myModal" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{ route('update.payment') }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                <div class="modal-body">

                        <input type="file" class="form-control-file border" id="image" name="image">
                        <input type="hidden" class="form-control" name="post_id" id="post_id" value="post_id">

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">ยืนยัน</button>
                </div>
            </form>
            </div>

        </div>
    </div>
</section>
@endsection


