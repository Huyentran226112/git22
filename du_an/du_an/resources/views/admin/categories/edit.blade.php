@extends('admin.layouts.master')
@section('content')
<main id="main">
    <h1>Chỉnh sửa Blog</h1>
    <form  action="{{route('categories.update',[$categories->id])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">Tên danh mục</label>
            <input type="text" name="name" value='{{$categories->name}}' class="form-control">
        </div>
        <input type="submit" value="Cập nhật" class="btn btn-primary">
        <a href="{{route('categories.index')}}" class="btn btn-danger">Huỷ</a>
      </form>
      </main>
@endsection