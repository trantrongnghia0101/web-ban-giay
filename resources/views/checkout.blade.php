@extends('layout')
@section('title','Online Shop | Giay')
@section('content')

<div class="container mt-5 ">
  <div class="row border-0">
    <h2>Địa chỉ thanh toán</h2>
    @if (session('success_message'))
    <div class="alert alert-success">
        {{ session('success_message') }}
    </div>
@endif
    <form method="POST" action="{{ route('checkout.store') }}">
        @csrf <!-- Thêm CSRF token -->

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="billing_name" class="form-label">Họ và tên*</label>
                <input type="text" class="form-control" id="billing_name" name="billing_name" required>
            </div>
            <div class="col-md-6">
                <label for="billing_email" class="form-label">Địa chỉ email*</label>
                <input type="email" class="form-control" id="billing_email" name="billing_email" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="billing_phone" class="form-label">Số điện thoại*</label>
                <input type="tel" class="form-control" id="billing_phone" name="billing_phone" required>
            </div>
            <div class="col-md-6">
                <label for="billing_address" class="form-label">Địa chỉ*</label>
                <input type="text" class="form-control" id="billing_address" name="billing_address" required>
            </div>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="ship_to_different_address" onchange="toggleShippingAddress()">
            <label class="form-check-label" for="ship_to_different_address">Gửi đến địa chỉ khác</label>
        </div>

        <div id="shipping_address_form" style="display: none;">
            <h2>Địa chỉ giao hàng</h2>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="shipping_name" class="form-label">Họ và tên*</label>
                    <input type="text" class="form-control" id="shipping_name" name="shipping_name" required>
                </div>
                <div class="col-md-6">
                    <label for="shipping_email" class="form-label">Địa chỉ email*</label>
                    <input type="email" class="form-control" id="shipping_email" name="shipping_email" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="shipping_phone" class="form-label">Số điện thoại*</label>
                    <input type="tel" class="form-control" id="shipping_phone" name="shipping_phone" required>
                </div>
                <div class="col-md-6">
                    <label for="shipping_address" class="form-label">Địa chỉ*</label>
                    <input type="text" class="form-control" id="shipping_address" name="shipping_address" required>
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn2 btn-primary">Gửi</button>
    </form>
    
  </div>
</div>

<script>
  function toggleShippingAddress() {
      const shippingAddressForm = document.getElementById('shipping_address_form');
      const shipToDifferentAddressCheckbox = document.getElementById('ship_to_different_address');

      if (shipToDifferentAddressCheckbox.checked) {
          shippingAddressForm.style.display = 'block';
      } else {
          shippingAddressForm.style.display = 'none';
      }
  }
</script>              
@endsection