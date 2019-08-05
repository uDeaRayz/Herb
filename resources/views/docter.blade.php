@extends('layouts.content')

@section('content')
<section style="margin-top: 45px">
    <div class="container">
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
                            @foreach ($docter as $docters)
                        <div class="col-lg-4">
                            <div class="card" style="width:100%">
                                <img
                                    class="card-img-top"
                                    src="{{
                                    URL::asset($docters->image) }}"
                                    alt="Card image"
                                    style="width:100%; height: 240px;"
                                    />
                                <div class="card-body">
                                    <h4 class="card-title">{{ $docters->name }}</h4>
                                    <div  class="card-text ellipsis">
                                        <p
                                            style="display: -webkit-box;
                                            max-width: 400px;
                                            height: 75px;
                                            -webkit-line-clamp: 3;
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            line-height: 1.625;
                                            text-align: initial;">
                                            {{ $docters->history }}
                                        </p>

                                    </div>
                                    <div class="text-center">
                                        <p style="font-size: 15pt; color: #111">{{ $docters->price }} บาท / ชิ้น</p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('docter-detail', $docters->id) }}" class="btn btn-outline-info">รายละเอียด</a>
                                        <a href="#" class="btn btn-outline-success">ใส่ตระกร้า</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <br><br>
                    {{ $docter->links() }}
                </div>
        </div>
    </div>
</section>
@endsection
