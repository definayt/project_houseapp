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

    <!-- ======= Features Section ======= -->
    <section id="features" class="padd-section ">

      <div class="container" data-aos="fade-up">
        <a href="project_page.html" class="previous-button">&laquo; Kembali</a>

        <div class="section-title text-center">
          <h2>Nama Proyek</h2>
          <!-- <p class="separator">Silakan klik pada salah satu  .</p> -->
        </div>

        <div class="row text-center" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-3">
            <a href="profil_rumah_page.html">             
              <div class="feature-block ">
                <!-- <img src="assets/img/svg/paint-palette.svg" alt="img"> -->
                <i class="bi bi-house fs-2 mb-3"></i>
                <h4>Profil Rumah</h4>
              </div>
            </a>
          </div>

          
          <div class="col-md-6 col-lg-3">
            <a href="2d_page.html"> 
              <div class="feature-block">
                <!-- <img src="assets/img/svg/paint-palette.svg" alt="img"> -->
                <i class="bi bi-images fs-2 mb-3"></i>
                <h4>Gambar 2D</h4>
              </div>
            </a>
          </div>
          
          

          <div class="col-md-6 col-lg-3">
            <a href="3d_page.html">
              <div class="feature-block">
                <!-- <img src="assets/img/svg/paint-palette.svg" alt="img"> -->
                <i class="bi bi-badge-3d fs-2 mb-3"></i>
                <h4>Gambar 3D</h4>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3">
            <a href="progress_rumah_page.html">
              <div class="feature-block">
                <!-- <img src="assets/img/svg/paint-palette.svg" alt="img"> -->
                <i class="bi bi-hourglass-split fs-2 mb-3"></i>
                <h4>Progress Rumah</h4>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3">
            <a href="time_schedule_page.html">
              <div class="feature-block">
                <!-- <img src="assets/img/svg/paint-palette.svg" alt="img"> -->
                <i class="bi bi-calendar-week fs-2 mb-3"></i>
                <h4>Time Schedule</h4>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3">
            <a href="rab_page.html">
              <div class="feature-block">
                <!-- <img src="assets/img/svg/paint-palette.svg" alt="img"> -->
                <i class="bi bi-file-earmark-spreadsheet fs-2 mb-3"></i>
                <h4>RAB</h4>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3">
            <a href="dokumen_rumah_page.html">
              <div class="feature-block">
                <!-- <img src="assets/img/svg/paint-palette.svg" alt="img"> -->
                <i class="bi bi-file-earmark-pdf fs-2 mb-3"></i>
                <h4>Dokumen Rumah</h4>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3">
            <a href="notes_page.html">
              <div class="feature-block">
                <!-- <img src="assets/img/svg/paint-palette.svg" alt="img"> -->
                <i class="bi bi-stickies fs-2 mb-3"></i>
                <h4>Notes</h4>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section><!-- End Features Section -->

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

@ensdection