@extends('admin.layouts.master')
@section('content')
<main id="main">
    @include('sweetalert::alert')
    <h1>Thêm danh mục</h1>
    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Tên :</label>
            <input type="text" id="fname" name="name" class="form-control">
        </div>
        {{-- <div class="mb-3">
            <label class="form-label">Mô tả:</label>
            <input type="text" id="fname" name="description" class="form-control">
        </div> --}}

        <input type="submit" value="Lưu" class="btn btn-success">
        <a href="{{route('categories.index')}}" class="btn btn-danger">Huỷ</a>
      </form>
      </main>
@endsection


