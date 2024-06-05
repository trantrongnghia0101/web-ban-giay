@extends('layout')
@section('title','Online Shop | Giay')
@section('content')

<div class="container mt-5">
  <h1>Shopping Cart</h1>
  
  <div class="row">
    <div class="col-md-9">


      @if (session('cart'))
      @foreach (session('cart') as $id => $item)
          <div class="card">
              <div class="row g-0">
                  <div class="col-md-4">
                      <img src="{{ asset('uploaded/'.$item['img']) }}" alt="Product Image" class="img-fluid">
                  </div>
                  <div class="col-md-8">
                      <div class="card-body">
                          <h5 class="card-title">{{ $item['name'] }}</h5>
                          <p class="card-text">{{ $item['price'] }}</p>
                          <p class="card-text">Số lượng: {{ $item['quantity'] }}</p>
                          <form action="{{ route('removeFromCart', $id) }}" method="GET">
                              @csrf
                              <button type="submit" class="btn2 btn-danger">Remove</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
      @else
      <div><h2>Bạn chưa có sản phẩm nào trong giỏ hàng. Hãy chọn cho mình 1 sản phẩm <a style="color: blue" href="{{route ('shop')}}">Shop</a></h2></div>
     
     @endif

      </div>
    <div class="col-md-3">
      <div class="mt-3">
        @php
            $totalQuantity = 0;
            foreach (session('cart') as $item) {
                $totalQuantity += $item['quantity'];
            }
        @endphp
        <h4>Tổng: {{ app('App\Http\Controllers\GiohangController')->calculateTotal() }}</h4>
        <h5>Số lượng sản phẩm: {{ $totalQuantity }}</h5> 
        <h5>Phương thức thanh toán:</h5>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="paymentOption" id="paymentOption1" checked>
          <label class="form-check-label" for="paymentOption1">
            Thẻ ngân hàng
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="paymentOption" id="paymentOption2">
          <label class="form-check-label" for="paymentOption2">
            PayPal
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="paymentOption" id="paymentOption3">
          <label class="form-check-label" for="paymentOption3">
            Tiền mặt
          </label>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-3">
    <a href="{{ route('checkout') }}"><button class="btn2 btn-primary">Check out</button></a>
    {{-- <a href="{{ route('clearCart') }}" class="btn2 btn-danger">Xóa tất cả</a> --}}
  </div>
</div>
@endsection