@extends('admin.layouts.master')
@section('content')
<h3>Danh sách thể loại</h3>
<a class="btn btn-primary" href="{{route('categories.create')}}">Thêm </a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Số thứ tự</th>
        <th scope="col">Tên</th>
        {{-- <th scope="col">Mô Tả</th> --}}
        <th scope="col">Quản lý</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $key => $category)
        <tr>
            <td> {{$category['id']}}</td>
            <td> {{$category['name']}}</td>
            <td>
                <form action="{{route('categories.destroy',[$category->id])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Bạn có muốn xóa này không?');" class="btn btn-danger">Xóa</button>
                    </form>
               <a class="btn btn-primary" href="{{ route('categories.edit',$category['id']) }}">edit</a>
            </td>
          </tr>
@endforeach
@endsection



