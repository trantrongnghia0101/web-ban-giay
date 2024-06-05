@extends('layout')
@section('title','Online Shop | Giay')
@section('content')
<style>
  .pagination .page-link {
    background-color: #fffefe; /* Màu nền */
    color: #030303; /* Màu chữ */
}

.pagination .page-item.active .page-link {
    background-color: #000000; /* Màu nền khi trang hiện tại được chọn */
    color: #ffffff; /* Màu chữ khi trang hiện tại được chọn */
}

.pagination .page-link:hover {
    background-color: #545854; /* Màu nền khi di chuột vào */
    color: #000000; /* Màu chữ khi di chuột vào */
}
</style>
<div class="container">
  <h1>SHOP</h1>
  <section class="row">
    <article class="col-9">
      @if (isset($products))
          @foreach ($products as $item)
          <div class="card float-start m-3 shadow-lg border-0" style="width: 15rem;">
            <div class="card-header">
              <img src="{{ asset('uploaded/'.$item->img) }}" alt="" class="img-fluid">
              <div class="overlay">
                <form action="{{ route('addToCart', $item->id) }}" method="POST">
                  @csrf
                  <button type="submit" class="btn2 btn-primary">Thêm vào giỏ hàng</button>
              </form>
                
              </div>
            </div>
            <a href=" {{ route('chitiet', $item->id)}} " style="text-decoration: none;">
                <div class="card-body">
                  <strong>{{ $item->name}} </strong><br>
                  <h6 class="text-muted">Men's Shoes</h6>
                  <strong>{{ $item->price}}</strong>₫
                </div>
            </a>
          </div>
          @endforeach
      @endif

    
      <!-- Thêm các div card khác tương tự -->
    </article>
    
    <aside class="col-3">
      <h2>Shoes(451)</h2>
      <ul class="list-unstyled mt-3">
          {{-- <li><a href="#" class="text-decoration-none link-gray"><strong>Lifestyle</strong> </a></li> --}}
          {{-- @if (isset($categories)) --}}
            @foreach ($categories as $item)
            <li><a href="{{ route('productByCategory', $item->id) }}" class="text-decoration-none link-gray"><strong>{{ $item->name }}</strong> </a></li>
            @endforeach
            <li><a style="text-decoration: none;" href="{{ route('bestSelling') }}"><strong>Đang giảm giá</strong></a></li>
            <li><a style="text-decoration: none;" href="{{ route('bestView') }}"><strong>Bán chạy nhất</strong></a></li>
        {{-- @endif --}}
          {{-- <li><a href="#" class="text-decoration-none link-gray"><strong>Basketball</strong> </a></li>
          <li><a href="#" class="text-decoration-none link-gray"><strong>Football</strong> </a></li>
          <li><a href="#" class="text-decoration-none link-gray"><strong>Training & Gym</strong> </a></li>
          <li><a href="#" class="text-decoration-none link-gray"><strong>Skateboarding</strong> </a></li>
          <li><a href="#" class="text-decoration-none link-gray"><strong>Golf</strong> </a></li>
          <li><a href="#" class="text-decoration-none link-gray"><strong>Tennis</strong> </a></li>
          <li><a href="#" class="text-decoration-none link-gray"><strong>Athletics</strong> </a></li> --}}
        </ul>
      <div class="accordion mt-3" id="sizeAccordion">
        
        
      </div>
      </div>
      
        
      </div>
      
    </aside>
    {{-- @if ({{session('success')}})
      <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif --}}
  </section>
</div>
<div class="container">
  <div class="pagination-container">
    <nav aria-label="Page navigation example" class="col-lg-6">
      <ul class="pagination">
        {{-- {{ $products->links('pagination::default')}} --}}
        <li class="page-item">
         
      </li>
      {{ $products->links('pagination::bootstrap-4') }}
      <li class="page-item">
          
      </li>
      </ul>
    </nav>
    {{-- {{$products->links("pagination.default")}} --}}
  </div>
</div>
@endsection
