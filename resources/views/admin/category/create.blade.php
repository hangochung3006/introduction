@extends('home')
@section('category')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Danh mục</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('category.store') }}"> 
          <div class="card-body">
            <div class="form-group">
              <label for="title">Email address</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Nhập tên danh mục">
            </div>
            <div class="form-group">
              <label for="description">Password</label>
              <input type="text" class="form-control" name="description" id="description" placeholder="Nhập mô tả">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
</div>
@endsection
