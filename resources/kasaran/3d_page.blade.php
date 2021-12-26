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

<!-- ======= Blog Section ======= -->

<section id="blog" class="padd-section">

  <div class="container" data-aos="fade-up">
  <a href="project_detail_page.html" class="previous-button">&laquo; Kembali</a>

    <div class="section-title text-center">

      <h2>Gambar 3D</h2>
      <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

      <div class="col-md-6 col-lg-6">
        <div class="block-blog text-left">
          <div class="container-3d">
            <iframe src="https://3dwarehouse.sketchup.com/embed.html?mid=u33ee83a9-f9a6-4a14-8950-c487ded2ea4a"
              frameborder="0" scrolling="no" marginheight="0"
              marginwidth="0" class="responsive-iframe" allowfullscreen>
            </iframe>
          </div>
          <div class="content-blog">
            <h2 class="text-center"><a href="#">Gambar 3D </a></h2>
            <!-- <span>Klik pada gambar untuk memperbesar</span> -->
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-6">
        <div class="block-blog text-left ">
          <div class="container-3d">
            <video class="responsive-iframe" controls>
              <source src="video/2019-06-11 20-42-21.mp4" type="video/mp4">
            Your browser does not support the video tag.
            </video>
          </div>
          <div class="content-blog">
            <h2 class="text-center"><a href="#">Animasi</a></h2>
          </div>
        </div>
      </div>

    </div>
  </div>
</section><!-- End Blog Section -->

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

<div>
    
  <!-- <iframe src="assets/img/3d/container+houses.skp" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="580" height="326" allowfullscreen></iframe> -->
</div>

</main><!-- End #main -->
@endsection
