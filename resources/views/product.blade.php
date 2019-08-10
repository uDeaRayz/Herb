@extends('layouts.content')

@section('content')
<section style="margin-top: 45px">
        <div class="container-fluid" style="padding: 0 90px 0 90px;">
        <div class="row">
            <div class="col-lg-3">
                <div>
                    <p class="menu-label">ผลิตภัณฑ์สมุนไพร</p>
                    <div class="hr-line-dashed"></div>
                    @include('layouts.left-menu-product')
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    @foreach ($product as $products)
                    <div class="col-lg-3" style="margin-bottom: 15px">
                        <div class="card" style="width:100%; padding: 10px;">
                            <?php
                            $images = $products->image;
                            if ($images === "") { } else {
                                $productImgArray = explode('|', $images);
                            }
                            ?>
                            <img class="card-img-top" src="{{
                                    URL::asset('image/'.$productImgArray[0])
                                    }}" alt="{{ $products->name }}" style="width:100%; height: 240px;" />
                            <div class="card-body text-center ellipsis">
                                <a href="{{ route('product-detail',
                                        $products->id) }}" style=" color: #111; font-weight:bold; display: -webkit-box;
                                        max-width: 400px;
                                        height: 24px;
                                        -webkit-line-clamp: 3;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        line-height: 1.625;
                                        text-align: center;
                                        font-size: 13pt;"
                                    class="card-title">{{ $products->name }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <br><br>
                {{ $product->links() }}
            </div>
        </div>
    </div>
</section>
@endsection
