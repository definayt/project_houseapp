@extends('template')

@section('content')
<main id="main">

<!-- ======= Get Started Section ======= -->
<!-- <section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>House App</h2>
      <ol>
        <li><a href="" class="btn-logout"><i class="bi bi-box-arrow-left fs-6 mb-3"></i>  Logout</a></li>
      </ol>
    </div>

  </div>
</section> -->

<!-- ======= Screenshots Section ======= -->
<section id="screenshots" class="padd-section">

  <div class="container" data-aos="fade-up">
    <a href="project_detail_page.html" class="previous-button">&laquo; Kembali</a>

    <div class="section-title text-center">
      <h2>Gambar 2D</h2>
      <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
    </div>
    <div class="container">
      <iframe src="https://docs.google.com/viewer?url=https://definayasmint.my.id/project_ce/assets/pdf/Assignment.pdf&embedded=true"  width="100%" height="500px"></iframe>
    <!-- <div class="slider">
        
        <div class="slick-slide"><img src="assets/img/2d/5.jpg" class="img-fluid" alt=""></div>
        <div class="slick-slide"><img src="assets/img/2d/6.jpg" class="img-fluid" alt=""></div>
        <div class="slick-slide"><img src="assets/img/2d/7.jpg" class="img-fluid" alt=""></div>
        <div class="slick-slide"><img src="assets/img/2d/8.jpg" class="img-fluid" alt=""></div>
        <div class="slick-slide"><img src="assets/img/2d/9.jpg" class="img-fluid" alt=""></div>
        <div class="slick-slide"><img src="assets/img/2d/10.jpg" class="img-fluid" alt=""></div>
        <div class="slick-slide"><img src="assets/img/2d/1.jpg" class="img-fluid" alt=""></div>
        <div class="slick-slide"><img src="assets/img/2d/2.jpg" class="img-fluid" alt=""></div>
        <div class="slick-slide"><img src="assets/img/2d/3.jpg" class="img-fluid" alt=""></div>
        <div class="slick-slide"><img src="assets/img/2d/4.jpg" class="img-fluid" alt=""></div>
        
    </div> -->
  </div>

    <!-- <div class="screens-slider swiper-container">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="assets/img/2d/5.jpg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/2d/6.jpg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/2d/7.jpg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/2d/8.jpg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/2d/9.jpg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/2d/10.jpg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/2d/1.jpg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/2d/2.jpg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/2d/3.jpg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/2d/4.jpg" class="img-fluid" alt=""></div>
      </div>
      <div class="swiper-pagination"></div>
    </div> -->
  </div>

</section><!-- End Screenshots Section -->

<!-- Modal -->
<div class="modal fade" id="logoutProgress" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title" id="exampleModalCenterTitle">Anda yakin Ingin Logout?</h4>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
    <a href="login_page.html" type="button" class="btn btn-logout" >Ya, Logout</a>
  </div>
</div>
</div>
</div>

</main><!-- End #main -->

@endsection

