@extends('layout')
@section('title', 'Cập nhật thông tin')
@section('content')

<form action="{{ route('updateUser', $user->id) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="form-group">
      <label for="name">Tên:</label>
      <input type="text" name="name" id="name" value="{{ $user->name }}" required>
  </div>

  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" value="{{ $user->email }}" required>
  </div>

  <div class="form-group">
      <label for="address">Địa chỉ:</label>
      <input type="text" name="address" id="address" value="{{ $user->address }}">
  </div>

  <div class="form-group">
      <label for="phone">Số điện thoại:</label>
      <input type="text" name="phone" id="phone" value="{{ $user->phone }}">
  </div>

  <button type="submit">Lưu</button>
</form>
@endsection