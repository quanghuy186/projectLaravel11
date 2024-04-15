@extends('layouts.admin')

@section('content')

<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm người dùng
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.user.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Họ và tên</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                @error('name')
                     <div class="alert alert-danger mb-3">{{ $message }}</div>
                @enderror 

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                @error('email')
                     <div class="alert alert-danger mb-3">{{ $message }}</div>
                @enderror                             

                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                @error('password')
                     <div class="alert alert-danger mb-3">{{ $message }}</div>
                @enderror 

                <div class="form-group">
                    <label for="cpassword">Nhập lại mật khẩu</label>
                    <input class="form-control" type="password" name="cpassword" id="cpassword">
                </div>
                @error('password')
                     <div class="alert alert-danger mb-3">{{ $message }}</div>
                @enderror 

                <div class="form-group">
                    <label for="">Nhóm quyền</label>
                    <select class="form-control" id="role_id" name="role_id">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach  
                    </select>
                </div>
                @error('role_id')
                        <div class="alert alert-danger mb-3">{{ $message }}</div>
                @enderror 

                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <a class="btn btn-primary" href="{{ route('admin.user.index') }}">
                    Quay lại
                </a>
            </form>
        </div>
    </div>
</div>

@endsection