@extends('layouts.content')

@section('content')
<section style="margin-top: 45px">
<div class="container-fluid" style="padding: 0 90px 0 90px;">
        <div class="row">
            <div class="col-lg-3">
                <div>
                    <p class="menu-label">สปา</p>
                    <div class="hr-line-dashed"></div>
                    @include('layouts.left-menu-spa')
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-5">
                        <img class="card-img-top" src="{{
                                URL::asset('image/'.$spaImgArray[0]) }}" alt="{{ $spa->name }}" style="width:100%; height: auto;" />
                    </div>
                    <div class="col-lg">
                        <div class="row">
                            <div class="col-lg-5">
                                <p class="detail-title">ชื่อร้าน</p>
                            </div>
                            <div class="col-lg-7">{{ $spa->name }}</div>
                        </div>
                        <br>
                        <div class="hr-line-dashed"></div>
                        <br>
                        <div class="row">
                            <div class="col-lg-5">
                                <p class="detail-title">ที่อยู่</p>
                            </div>
                            <div class="col-lg-7">{{ $spa->address }} <br>
                                <b>อำเภอ</b> {{ $spa->district }} <br>
                                <b>จังหวัด</b> {{ $spa->province }} <br>
                            </div>
                        </div>
                        <br>
                        <div class="hr-line-dashed"></div>
                        <br>
                        <div class="row">
                            <div class="col-5">
                                <p class="detail-title">ค่าบริการพื้นฐาน</p>
                            </div>
                            <div class="col-7">{{ $spa->price }} บาท
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="detail-title">ข้อมูลการให้บริการ</p>
                    </div>
                    <div class="col-lg-9">{{ $spa->detail }}</div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                <form action="{{ route('cart.item') }}" method="post">
                    <div class="row">
                        <div class="col-lg-3"><b>หมายเหตุ</b></div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-12">
                                        <div class="d-flex">
                                                <div class="p-2"><label>วันที่</label></div>
                                                <div class="p-2"><input
                                                        class="form-control"
                                                        type="date"
                                                        value="2011-08-19"
                                                        name="date"
                                                        id="date" style="font-size: 15pt;"></div>
                                                <div class="p-2"></div>
                                                <div class="p-2"><label>เวลา</label></div>
                                                <div class="p-2"><input
                                                        class="form-control"
                                                        type="time"
                                                        value="13:45:00"
                                                        name="time"
                                                        id="time" style="font-size: 15pt;"></div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="hr-line-dashed"></div>
                    <br>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-3">

                            <div class="d-flex">
                                    <select name="typeBook" id="typeBook" class="custom-select">
                                            <option selected value="null">จองตามช่วงเวลา</option>
                                            <option value="1">ช่วงเช้า</option>
                                            <option value="2">ช่วงบ่าย</option>
                                          </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12  text-center">
                                @csrf
                                <input type="hidden" name="id" value="{{ $spa->id }}">
                                <input type="hidden" name="name" value="{{ $spa->name }}">
                                <input type="hidden" name="price" value="{{ $spa->price }}">
                                <input type="hidden" name="qry" value="1">
                                <input type="hidden" name="img" value="{{ $spa->image }}">
                                <input type="hidden" name="type" value="spa">

                                <button type="submit" class="btn btn-outline-success" style="font-size: 16pt">จองคิวร้านสปา</button>
                            {{-- <button type="submit" class="btn btn-outline-success" style="font-size: 15pt; margin: 15px;">จองคิวร้านสปา</button> --}}
                        </div>
                    </div>
                </form>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                {{-- <div class="row">
                    <div class="col-3"><b>สถานะ</b></div>
                    <div class="col-9">
                        <span style="color: red"> <b>มีการจองแล้ว</b></span>
                    </div>
                </div>
                <br>
                <div class="hr-line-dashed"></div> --}}
            </div>
        </div>
    </div>
</section>
@endsection
