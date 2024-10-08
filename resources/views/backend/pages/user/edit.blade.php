@extends('layouts.app')
@section('title')
    <title>Kcnew - Sửa thông tin người dùng</title>
@endsection
@section('main')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa thông tin người dùng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
                        <li class="breadcrumb-item active">Sửa thông tin người dùng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if (Session::has('success'))
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i>{{ Session::get('success') }}</h5>

                </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-warning alert-dismissible">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Sửa thông tin người dùng</h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form  action="{{ route('user.update',['user'=>$user->id]) }}" method="post" enctype="multipart/form-data">
                  @method('PUT')
                    @csrf
                    
                    <div class="card-body">
                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Nhập họ và tên">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" class="form-control" value="{{ $user->email }}" name="email" placeholder="Nhập email">
                                </div>
                                <input type="hidden" value="12345678" name="password">
                                <div class="col">
                                    <label for="exampleInputPassword1">Số điện thoại</label>
                                    <input type="number" class="form-control" value="{{ $user->sodienthoai }}" name="sodienthoai"
                                        placeholder="Nhập số điện thoại">
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="examleInput">Vai trò</label>
                                    <select name="role_select" id="" class="form-control">
                                        <option value="0" selected>-- Chọn vai trò -- </option>
                                        @foreach ($role as $u)
                                            <option value="{{ $u->id }}" >{{ $u->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                               
                            </div>

                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>

            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm vai trò mới</h3>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('themvaitro') }}" id="formvaitro" class="formvaitro" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Thêm vai trò mới</label>
                                    <input type="text" class="form-control" name="role" placeholder="Thêm vai trò mới"
                                        id="role">

                                    <button type='submit' class="btn btn-primary vaitro" id="vaitro">Thêm</button>

                                </div>
                            </form>
                        </div>
                        

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
