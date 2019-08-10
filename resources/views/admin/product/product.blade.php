@extends('layouts.admin')

@section('content')
<!-- about -->
<section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about" style="margin-top: 30px;">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="d-flex justify-content-between" style="margin: 20px;">
            <div class="p-2"><h5 style="color: #bf3718; font-size: 20pt"><strong>จัดการข้อมูลผลิตภัณฑ์สมุนไพร</strong></h5></div>
            <div class="p-2"><a href="{{ route('add-product') }}" type="button" class="btn
                    btn-outline-success"><i class="fa fa-plus"></i>
                    เพิ่มผลิตภัณฑ์สมุนไพร</a ></div>
        </div>
        <div class="table-responsive">
                @if (session('update'))
                <div class="alert alert-info">
                    <p class="text-success">{{ session('update') }}</p>
                </div>
                @endif
                @if (session('add'))
                <div class="alert alert-success">
                    <p class="text-success">{{ session('add') }}</p>
                </div>
                @endif
                @if (session('del'))
                <div class="alert alert-warning">
                    <p class="text-success">{{ session('del') }}</p>
                </div>
                @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">ลำดับ</th>
                        <th class="text-center" style="width: 25%">ผลิตภัณฑ์สมุนไพร</th>
                        <th class="text-center" style="width: 10%">ประเภทของยา</th>
                        <th class="text-center" style="width: 10%">ราคา</th>
                        <th class="text-center" colspan="2" style="width: 15%">จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $products)
                    <tr>
                        <td class="text-center">{{ $products->id }}</td>
                        <td>{{ $products->name }}</td>
                        <td>@if( $products->type === '1')
                                <label for="">ยาชุด</label>
                                @endif
                                @if( $products->type === '2')
                                <label for="">ยาสำหรับใช้ภายนอก</label>
                                @endif
                                @if( $products->type === '3')
                                <label for="">ยาสำหรับใช้ภายใน</label>
                                @endif</td>
                        <td class="text-right">{{ $products->price }}.-</td>
                        <td class="text-center">
                           <a href="{{ route('view-product', $products->id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="ดูข้อมูล"><i class="fa fa-eye"></i></a >
                           <a href="{{ route('edit-product', $products->id) }}" class="btn btn-warning btn-sm" data-toggle="tooltip" title="แก้ไขข้อมูล"><i class="fas fa-pen"></i></a >
                        </td>
                        <td class="text-center">
                           <form action="{{ route('delete-product',$products->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('คุณต้องการลบข้อมูล?')" data-toggle="tooltip" title="ลบข้อมูล" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $product->links() }}
        </div>

    </div>
</section>
@endsection
