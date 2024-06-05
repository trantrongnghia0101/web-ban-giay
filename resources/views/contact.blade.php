@extends('layout')
@section('title','Online Shop | Giay')
@section('content')
<style>
  /* CSS để căn giữa nội dung */
  .map {
    text-align: center;
  }
</style>
<main>
  <!-- Contact Section -->
  <section class="py-5">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <h2>Giới thiệu về chúng tôi</h2>
          <p>Chào mừng bạn đến với trang web chuyên bán giày Nike tại Việt Nam. Chúng tôi cung cấp một loạt các sản phẩm giày thể thao Nike chất lượng cao và đa dạng về kiểu dáng và mẫu mã. Với đội ngũ nhân viên chuyên nghiệp và dịch vụ tận tâm, chúng tôi cam kết mang đến cho bạn trải nghiệm mua sắm thú vị và tiện lợi.</p>
          <p>Hãy khám phá các sản phẩm giày Nike của chúng tôi và tận hưởng phong cách và sự thoải mái mà chúng mang lại. Nếu bạn có bất kỳ câu hỏi hoặc yêu cầu đặc biệt, hãy liên hệ với chúng tôi bằng thông tin dưới đây.</p>
        </div>
        <div class="col-md-12">
          <h2>Thông tin liên hệ</h2>
          <p><strong>Địa chỉ:</strong> 123 Đường ABC, Thành phố XYZ</p>
          <p><strong>Email:</strong> example@example.com</p>
          <p><strong>Điện thoại:</strong> 123-456-7890</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="map">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <h2 class="text-center">Bản đồ</h2>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.464707039913!2d106.62438847488372!3d10.852215989301245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b161f50ae47%3A0x2328d1d1acc3b11a!2sFPT%20PolytechnicTP.HCM%20-%20T%C3%B2a%20F!5e0!3m2!1svi!2s!4v1715687473922!5m2!1svi!2s"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
