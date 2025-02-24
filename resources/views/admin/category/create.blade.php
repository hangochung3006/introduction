@extends('home')
@section('category')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Danh mục</h3>
        </div>
        <form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data" >
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="title">Danh mục</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Nhập tên danh mục" >
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
              <label for="slug">Định danh</label>
              <input type="text" class="form-control" name="slug" id="slug" placeholder="Nhập định danh">
            </div>
            @error('slug')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
              <label for="description">Mô tả</label>
              <input type="text" class="form-control" name="description" id="description" placeholder="Nhập mô tả">
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-check">
              <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Trạng thái</label>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Xác nhận</button>
          </div>
        </form>
      </div>
</div>
@endsection
