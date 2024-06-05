@extends('layout')
@section('title','Online Shop | Giay')
@section('content')

<div class="container ">
    <div class="row">
      <div class="col-lg-12">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" >
              <a href="/shop"><img src="img/nike-just-do-it.png" class="d-block w-100" alt="..."></a>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="title-sell text-center p-lg-5">
        <strong style="font-size: large;">Comming Soon</strong>
        <h1 class="display-2">NIKE AIR MAX DN</h1>
        <h1>Sẽ sớm ra mắt vào ngày 01/01/2025</h1>
        <a href="/shop"><button class="btn2 btn-primary">Shop <i class="fa-solid fa-arrow-right"></i></button></a>
      </div>
      <div class="all-img-locall row ">
        <div class="card col-lg-4 shadow-lg border-0 img-locall mb-4" >
            <a href="/shop"><img src="img/banner-small1.jpg" class="card-img-top" alt="..."></a>
          </div>
          <div class="card col-lg-4 shadow-lg border-0 img-locall mb-4">
            <a href="/shop"><img src="img/banner-small2.jpg" class="card-img-top" alt="..."></a>
          </div>
          <div class="card col-lg-4 shadow-lg border-0 img-locall mb-4">
            <a href="/shop"><img src="img/banner-small3.jpg" class="card-img-top" alt="..."></a>
          </div>
      </div>
    </div>
  </div>
  
  <div class="container ">
    <div class="row">
        <h1>Trending</h1>
      <div class="col-lg-12">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" >
              <a href="/shop"><img src="img/banner-lage.jpg" class="d-block w-100" alt="..."></a>
            </div>
          </div>
        </div>
      </div>
      <div class="title-sell text-center p-lg-5">
        <h1 class="display-2">LBJ X LFC</h1>
        <h1>Từ NBA đến Liverpool</h1>
        <a href="/shop"><button class="btn2 btn-primary">Shop <i class="fa-solid fa-arrow-right"></i></button></a>
      </div>
      
    </div>
  </div>
  
  <div class="container ">
    <div class="row">
      <div class="col-lg-12">
      <div class="all-img-locall row ">
        <div class="card col-lg-4 shadow-lg border-0 img-locall mb-4">
            <div class="position-relative">
              <img src="img/banner-small5.png" class="card-img-top" alt="...">
              <div class="position-absolute bottom-0 start-0 w-10 text-center p-3">
                <h5 class="card-title">Thời trang</h5>
                <a href="/shop"><button class="btn btn-primary">Xem thêm</button></a>
              </div>
            </div>
          </div>
          <div class="card col-lg-4 shadow-lg border-0 img-locall mb-4">
            <div class="position-relative">
              <img src="img/banner-small6.png" class="card-img-top" alt="...">
              <div class="position-absolute bottom-0 start-0 w-10 text-center p-3">
                <h5 class="card-title">Phong cách</h5>
                <a href="/shop"><button class="btn btn-primary">Xem thêm</button></a>
              </div>
            </div>
          </div>
          <div class="card col-lg-4 shadow-lg border-0 img-locall mb-4">
            <div class="position-relative">
              <img src="img/banner-small7.png" class="card-img-top" alt="...">
              <div class="position-absolute bottom-0 start-0 w-10 text-center p-3">
                <h5 class="card-title">Thoải mái</h5>
                <a href="/shop"><button class="btn btn-primary">Xem thêm</button></a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
  <div class="container">
    <h1>Tin tức mới</h1>
    <div class="overflow-auto row">
      <div class="d-flex flex-nowrap ">
        <div class="shadow-lg border-0 img-locall mb-4 news-card col-3 p-lg-3">
         <a href="/tintuc"> <img src="img/new1.jpg" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <a href="/tintuc" style="text-decoration: none;">
              <h5 class="card-title">Giày miễn phí nè</h5>
            <p class="card-text">Giảm 50% cho khách hàng thân thiết.</p>
            </a>
          </div>
        </div>
        <div class="shadow-lg border-0 img-locall mb-4 news-card col-3 p-lg-3">
          <a href="/tintuc"> <img src="img/new2.jpg" class="card-img-top" alt="..."></a>
           <div class="card-body">
             <a href="/tintuc" style="text-decoration: none;">
               <h5 class="card-title">Nike giảm 50%</h5>
             <p class="card-text">Giảm 50% cho khách hàng thân thiết.</p>
             </a>
           </div>
         </div>
         <div class="shadow-lg border-0 img-locall mb-4 news-card col-3 p-lg-3">
          <a href="/tintuc"> <img src="img/new3.jpg" class="card-img-top" alt="..."></a>
           <div class="card-body">
             <a href="/tintuc" style="text-decoration: none;">
               <h5 class="card-title">Giày mới nè xem đi</h5>
             <p class="card-text">Giảm 50% cho khách hàng thân thiết.</p>
             </a>
           </div>
         </div>
         <div class="shadow-lg border-0 img-locall mb-4 news-card col-3 p-lg-3">
          <a href="/tintuc"> <img src="img/new4.jpg" class="card-img-top" alt="..."></a>
           <div class="card-body">
             <a href="/tintuc" style="text-decoration: none;">
               <h5 class="card-title">Giày hơi bị đỉnh</h5>
             <p class="card-text">Giảm 50% cho khách hàng thân thiết.</p>
             </a>
           </div>
         </div>
         <div class="shadow-lg border-0 img-locall mb-4 news-card col-3 p-lg-3">
          <a href="/tintuc"> <img src="img/new5.jpg" class="card-img-top" alt="..."></a>
           <div class="card-body">
             <a href="/tintuc" style="text-decoration: none;">
               <h5 class="card-title">Nike giày số 1</h5>
             <p class="card-text">Giảm 50% cho khách hàng thân thiết.</p>
             </a>
           </div>
         </div>
      </div>
    </div>
  </div>
@endsection
