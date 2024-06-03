@extends('layout.admin')
@section('content')
    <title>Sửa thông tin danh mục sản phẩm</title>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 style="margin-left:15px">
                Sửa thông tin danh mục sản phẩm
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.index') }}">Trang chủ</a></li>
                <li><a href="{{ route('admin.category.index') }}">Danh mục</li>
                >
                <li><a href="#">Cập nhật</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="" method="POST" role="form" class="col-md-8">
                @csrf
                <div class="form-group {{ $errors->first('c_name') ? ' has-error':'' }}">
                    <label for="exampleInputEmail1">Danh mục</label>
                    <input type="text" name="c_name" class="form-control" id="exampleInputEmail1"
                           value="{{$category->c_name}}" aria-describedby="emailHelp">
                    @if ($errors->first('c_name'))
                        <p class="text-danger">{{$errors->first('c_name') }}  </p>
                    @endif
                </div>
                <div class="form-group {{ $errors->first('c_cate') ? ' has-error':'' }}">
                    <label for="exampleInputPassword1">Thể loại</label>
                    <select name="c_cate" class="form-control" id="exampleInputPassword1">
                        <option value="">--Chọn thể loại sản phẩm--</option>
                        <option value="watch" @if($category->c_cate == 'watch') selected @endif>Máy lọc nước</option>
                        <option value="glass" @if($category->c_cate == 'glass') selected @endif>THIẾT BỊ LỌC NƯỚC</option>
                        <option value="accessories" @if($category->c_cate == 'accessories') selected @endif>THIẾT BỊ ĐO</option>

                    </select>
                    @if ($errors->first('c_cate'))
                        <p class="text-danger">{{$errors->first('c_cate') }}  </p>
                    @endif
                </div>
                <a href="{{route('admin.category.index') }}" class="btn btn-danger"><i class="fa fa-undo"></i> Quay lại</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Thêm</button>
            </form>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@stop
