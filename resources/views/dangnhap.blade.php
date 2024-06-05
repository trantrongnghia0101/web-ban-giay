@extends('layout')
@section('title','Online Shop | Giay')
@section('content')

<div class="container2 mb-5">
  <h1>Đăng nhập</h1>
  @if (session('status'))
  <div class="alert alert-success mt-3">
      {{ session('status') }}
  </div>
@endif
  <form method="POST" action="{{route('login')}}">
    @csrf
    <div class="mb-3">
      <label for="username" class="form-label">Tên đăng nhập</label>
      <input name="name" type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Mật khẩu</label>
      <input name="password" type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
    </div>
    <button type="submit" class="btn2 btn-primary">Đăng nhập</button>
  </form>
</div>
@endsection
