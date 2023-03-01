@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')
<h3>Danh sách sản phẩm  </h3>
<a class="btn btn-primary" href="{{route('products.create')}}">Thêm </a>
<table class="table" style="text-align:center">
    <thead>
      <tr>
        <th scope="col">Số thứ tự</th>
        <th scope="col">Tên</th>
        <th scope="col">giá</th>
        <th scope="col">thể loại</th>
        <th scope="col">ảnh</th>
        <th scope="col">trạng thái</th>
        <th scope="col">Công cụ</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $key => $product)
        <tr>
            <td> {{++$key}}</td>
            <td> {{$product->name}}</td>
            <td> {{number_format($product->price)}} $</td>
            <td> {{$product->category->name}}</td>
            <td>
                <img src="{{ asset('public/assets/product/' . $product->image) }}" alt=""
                    style="width: 50px">
            </td>
                <td>{{ $product->status == 1 ? ' Active' : 'No Active' }}</td>
            <td>
                <form action="{{route('products.destroy',[$product->id])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Bạn có muốn xóa này không?');" class="btn btn-danger">xóa</button>
                    </form>
               <a class="btn btn-primary" href="{{ route('products.edit',$product['id']) }}">chỉnh sửa</a><br>
               <a class="btn btn-success" href="{{ route('products.show',$product['id']) }}">chi tiết</a>
            </td>
          </tr>
@endforeach
@endsection
