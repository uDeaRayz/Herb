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
                    @foreach ($spa as $item)
                    <div class="col-lg-4" style="margin-bottom: 15px">
                        <div class="card" style="width:100%; padding: 10px;">
                            <?php
                            $images = $item->image;
                            if ($images === "") { } else {
                                $spaImgArray = explode('|', $images);
                            }
                            ?>
                            <img class="card-img-top" src="{{
                                    URL::asset('image/'.$spaImgArray[0])
                                    }}" alt="Card image" style="width:100%; height: 240px;" />
                            <div class="card-body text-center ellipsis">
                                <a href="{{ route('spa-detail',
                                        $item->id) }}" style="color: #111; font-weight:bold; display: -webkit-box;
                                        max-width: 400px;
                                        height: 24px;
                                        -webkit-line-clamp: 3;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        line-height: 1.625;
                                        text-align: center;
                                        font-size: 13pt;"class="card-title">{{ $item->name }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <br><br>
                {{ $spa->links() }}
            </div>
        </div>
    </div>
</section>
@endsection
