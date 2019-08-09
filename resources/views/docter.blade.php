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
                    @foreach ($docter as $docters)
                    <div class="col-lg-3" style="margin-bottom: 15px">
                        <div class="card" style="width:100%; padding: 10px;">
                            <?php
                            $images = $docters->image;
                            if ($images === "") { } else {
                                $docterImgArray = explode('|', $images);
                            }
                            ?>
                            <img class="card-img-top" src="{{
                                    URL::asset('image/'.$docterImgArray[0])
                                    }}" alt="Card image" style="width:100%; height: 240px;" />
                            <div class="card-body text-center">
                                <a href="{{ route('docter-detail',
                                        $docters->id) }}" style="font-size:
                                        15pt; color: #111; font-weight:bold" class="card-title">{{ $docters->name }}</a>
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
