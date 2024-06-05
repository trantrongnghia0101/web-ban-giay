@extends('layout')
@section('title','Online Shop | Giay')
@section('content')

<div class="container">
  <h1>Chi tiết sản phẩm giày</h1> <br>

  @if (isset($product))
  <div class="row">
    <div class="col-lg-6">
        <img src="{{ asset('uploaded/'.$product->img) }}" alt="Ảnh sản phẩm" class="img-fluid">
    </div>
    
    <div class="col-lg-6">
        <h1>{{$product->name}}</h1> <br>
        <h4>Giá: {{$product->price}} Đ</h4> <br>
        <p>Size: 42</p>
        <a href="/giohang" class="btn2 btn-primary me-lg-5">Mua ngay</a>
        <a href="{{ route ('addToCart', $product->id)}}" class="btn2 btn-outline-primary">Thêm vào giỏ hàng</a>
        <div class="accordion mt-3" id="sizeAccordion">
            
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading21">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                    Chi tiết sản phẩm
                </button>
              </h2>
              <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="heading21" data-bs-parent="#sizeAccordion">
                <div class="accordion-body">
                    <p>Sản phẩm này được thiết kế có trách nhiệm sử dụng các vật liệu tái chế từ chất thải sau sử dụng của người tiêu dùng hoặc từ chất thải sau quá trình sản xuất. Một trong những bước quan trọng nhất trên hành trình chuyển đổi thành carbon và chất thải không còn là việc chọn lựa vật liệu, vì chúng chiếm hơn 70% lượng tác động của bất kỳ sản phẩm nào. Bằng cách tái sử dụng nhựa, sợi và vải hiện có, chúng tôi giảm đáng kể lượng khí thải gây ra. 
                        Mục tiêu của chúng tôi là sử dụng nhiều vật liệu tái chế nhất có thể mà không ảnh hưởng đến hiệu suất, độ bền và phong cách của sản phẩm. </p>
                </div>
              </div>
            </div>
          </div>
    </div>
    
</div>
  @endif

  {{-- <div class="row mt-4">
      <div class="col-lg-6">
          <div class="row">
              <div class="col-md-3">
                  <img src="img/hinh2.webp" alt="Ảnh sản phẩm" class="img-fluid">
              </div>
              <div class="col-md-3">
                  <img src="img/hinh3.webp" alt="Ảnh sản phẩm" class="img-fluid">
              </div>
              <div class="col-md-3">
                  <img src="img/hinh4.webp" alt="Ảnh sản phẩm" class="img-fluid">
              </div>
              <div class="col-md-3">
                  <img src="img/hinh5.webp" alt="Ảnh sản phẩm" class="img-fluid">
              </div>

              
          </div>
          
      </div>
  </div> --}}

</div> <br>
<div class="container">
  <h1>Sản phẩm liên quan</h1>
  <div class="overflow-auto row">
      <div class="d-flex flex-nowrap">
          @foreach ($relatedProducts as $relatedProduct)
              <div class="shadow-lg border-0 img-locall mb-4 news-card col-3 p-lg-3">
                  <a href="/chitiet/{{ $relatedProduct->id }}">
                      <div class="card float-start m-3 shadow-lg border-0" style="width: 15rem;">
                          <div class="card-header">
                              <img src="{{ asset('uploaded/'.$relatedProduct->img) }}" alt="Ảnh sản phẩm"
                                  class="img-fluid">
                              <div class="overlay">
                                  <a href="{{ route('addToCart', $relatedProduct->id) }}"
                                      class="btn btn-primary">Thêm sản phẩm</a>
                              </div>
                          </div>
                          <div class="card-body">
                              <strong>{{ $relatedProduct->name }}</strong><br>
                              <h6 class="text-muted">Men's Shoes</h6>
                              <strong>{{ $relatedProduct->price }}₫</strong>
                          </div>
                      </div>
                  </a>
              </div>
          @endforeach
      </div>
  </div>
</div>
@endsection
