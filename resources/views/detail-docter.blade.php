@extends('layouts.content')

@section('content')
<section style="margin-top: 45px">
        <div class="container-fluid" style="padding: 0 90px 0 90px;">
        <div class="row">
            <div class="col-lg-3">
                <div>
                    <p class="menu-label">หมอพื้นบ้าน</p>
                    <div class="hr-line-dashed"></div>
                    @include('layouts.left-menu-docter')
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-5">
                        <img
                            class="card-img-top"
                            src="{{
                            URL::asset('image/'.$docterImgArray[0]) }}"

                        style="width:100%; height: auto;"
                        />
                    </div>
                    <div class="col-lg">
                        <div class="row">
                            <div class="col-lg-5"><p class="detail-title">ชื่อ-สกุล</p></div>
                            <div class="col-lg">{{ $docter->name }}</div>
                        </div>
                        <br>
                        <div class="hr-line-dashed"></div>
                        <br>
                        <div class="row">
                            <div class="col-lg-5"><p class="detail-title">อายุ</p></div>
                            <div class="col-lg">{{ $docter->age }}</div>
                        </div>
                        <br>
                        <div class="hr-line-dashed"></div>
                        <br>
                        <div class="row">
                            <div class="col-lg-5"><p class="detail-title">ที่อยู่</p></div>
                            <div class="col-lg">{{ $docter->address }} <br>
                                <b>ตำบล</b> {{ $docter->subdis }} <br>
                                <b>อำเภอ</b> {{ $docter->district }} <br>
                                <b>จังหวัด</b> {{ $docter->province }} <br>
                            </div>
                        </div>
                        <br>
                        <div class="hr-line-dashed"></div>
                        <br>
                        <div class="row">
                            <div class="col-lg-5"><p class="detail-title">ค่าบริการพื้นฐาน</p></div>
                            <div class="col-lg">{{ $docter->price }} บาท
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                <div class="row">
                    <div class="col-lg-3"><p class="detail-title">ข้อมูลทั่วไป</p></div>
                    <div class="col-lg">{{ $docter->history }}</div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                <div class="row">
                    <div class="col-lg-3"><p class="detail-title">โรคที่รักษา</p></div>
                    <div class="col-lg">{{ $docter->disease }}</div>
                </div>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                <form action="{{ route('cart.item') }}" method="post">
                    <div class="row">
                        <div class="col-lg-3"><b>หมายเหตุ</b></div>
                        <div class="col-lg">
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
                                                <option selected value="null">---จองตามช่วงเวลา---</option>
                                                <option value="1">ช่วงเช้า</option>
                                                <option value="2">ช่วงบ่าย</option>
                                              </select>
                                </div>
                            </div>
                        </div>
                    <br>
                    <div class="row">
                        <div class="col-12  text-center">

                                        @csrf
                                        <input type="hidden" name="id" value="{{ $docter->id }}">
                                        <input type="hidden" name="name" value="{{ $docter->name }}">
                                        <input type="hidden" name="price" value="{{ $docter->price }}">
                                        <input type="hidden" name="qry" value="1">
                                        <input type="hidden" name="img" value="{{ $docter->image }}">
                                        <input type="hidden" name="type" value="docter">

                                        <button type="submit" class="btn btn-outline-success" style="font-size: 16pt">จองคิวคุณหมอ</button>

                            {{-- <button type="submit" class="btn btn-outline-success" style="font-size: 15pt; margin: 15px;">จองคิวคุณหมอ</button> --}}
                        </div>
                    </div>
                </form>
                <br>
                <div class="hr-line-dashed"></div>
                <br>
                {{-- <div class="row">
                    <div class="col-lg-3"><b>สถานะ</b></div>
                    <div class="col-lg">
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
