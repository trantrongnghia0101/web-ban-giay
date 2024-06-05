@extends('layout')
@section('title','Online Shop | Giay')
@section('content')

<div class="container2">
        <h1>Đăng ký</h1>
        @if (session('status'))
          <div class="alert alert-success mt-3">
              {{ session('status') }}
          </div>
        @endif
        <form method="POST" action="{{route('register')}}">
          @csrf
          <div class="mb-3">
            <label for="username" class="form-label">Tên đăng nhập</label>
            <input name="name" type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Email</label>
            <input name="email" type="text" class="form-control" id="password" placeholder="Nhập mật khẩu">
          </div>
          <div class="mb-3">
            <label for="confirm-password" class="form-label">Xác nhận mật khẩu</label>
            <input name="password" type="password" class="form-control" id="confirm-password" placeholder="Xác nhận mật khẩu">
          </div>
          <button type="submit" class="btn2 btn-primary">Đăng ký</button>
        </form>
      </div>
@endsection
