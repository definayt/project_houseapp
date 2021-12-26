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
    <section id="profil" class="padd-section">

      <div class="container" data-aos="fade-up">
        <a href="project_detail_page.html" class="previous-button">&laquo; Kembali</a>

        <div class="section-title text-center">
          <h2>Progress Rumah</h2>
          <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
        </div>

        <div class="row">
          <div class="col-sm-12 py-2">
            <div class="block-profil card card-body h-100">
              <div class="row">
                <div class="col-sm-3">
                  <h4><b>Status</b></h4>                
                </div>
                <div class="col-sm-9">
                  100 %
                </div>  
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 py-2">
            <div class="block-profil card card-body h-100">
              <div class="row">
                <div class="col-sm-3">
                  <h4><b>Hari Ke</b></h4>                
                </div>
                <div class="col-sm-9">
                  90 Hari Kerja
                </div>  
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 py-2">
            <div class="block-profil card card-body h-100">
              <div class="row">
                <div class="col-sm-3">
                  <h4><b>Tanggal mulai</b></h4>                
                </div>
                <div class="col-sm-9">
                  23 Agustus 2021
                </div>  
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 py-2">
            <div class="block-profil card card-body h-100">
              <div class="row">
                <div class="col-sm-3">
                  <h4><b>Selasai Tanggal</b></h4>                
                </div>
                <div class="col-sm-9">
                  20 Desember 2021
                </div>  
              </div>
            </div>
          </div>
        </div>

        <div class="bootdey">
          <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
              <div class="card">
                <div class="card-body">
                  <!-- Timeline start -->
                  <div class="timeline">
                    <div class="timeline-row">
                      <div class="timeline-time">
                        28 November 2021
                      </div>
                      <div class="timeline-dot fb-bg"></div>
                      <div class="timeline-content">                        
                        <img type="button" data-toggle="modal" data-target="#sliderProgress" src="assets/img/2d/5.jpg" class="img-fluid" alt="">
                      </div>
                    </div>
                    <div class="timeline-row">
                      <div class="timeline-time">
                        25 Oktober 2021
                      </div>
                      <div class="timeline-dot green-one-bg"></div>
                      <div class="timeline-content green-one">
                        <img type="button" data-toggle="modal" data-target="#sliderProgress" src="assets/img/2d/6.jpg" class="img-fluid" alt="">                        
                      </div>
                    </div>            
                  </div>
          <!-- Timeline end -->
                </div>
              </div>
            </div>
          </div>
        </div>
        

      </div>

    </section><!-- End Screenshots Section -->

<!-- Modal -->
<div class="modal fade" id="sliderProgress" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">28 November 2021</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="wrap-modal-slider">
          <div class="your-class">
            <div><img src="assets/img/2d/6.jpg" class="img-fluid" alt=""><h4 class="text-center">Gambar Batu Belah</h4></div>
            <div><img src="assets/img/2d/7.jpg" class="img-fluid" alt=""><h4 class="text-center">Gambar Batu </h4></div>
            <div><img src="assets/img/2d/8.jpg" class="img-fluid" alt=""><h4 class="text-center">Gambar Belah</h4></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-logout" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

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