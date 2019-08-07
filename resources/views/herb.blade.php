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
                        @foreach ($herb as $herbs)
                    <div class="col-lg-3">
                        <div class="card" style="width:100%">
                            <img
                                class="card-img-top"
                                src="{{
                                URL::asset($herbs->image) }}"
                                alt="Card image"
                                style="width:100%; height: 240px;"
                                />
                            <div class="card-body">
                                <h4 class="card-title">{{ $herbs->name }}</h4>
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
                                        {{ $herbs->detail }}
                                    </p>

                                </div>
                                <div class="text-center">
                                    <p style="font-size: 15pt; color: #111">{{ $herbs->price }} บาท / ชิ้น</p>
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('herb-detail', $herbs->id) }}" class="btn btn-outline-info">รายละเอียด</a>
                                    <a href="{{ route('herb.addTocart',['id' => $herbs->id]) }}" class="btn btn-outline-success">ใส่ตระกร้า</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <br><br>
                {{ $herb->links() }}
            </div>
        </div>
    </div>
</section>
@endsection
