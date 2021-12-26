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
          <h2>Profil Rumah</h2>
          <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
        </div>

        <div class="row">
          <div class="col-sm-12 py-2">
            <div class="block-profil card card-body h-100">
              <div class="row">
                <div class="col-sm-3">
                  <h4><b>Pemilik Rumah</b></h4>                
                </div>
                <div class="col-sm-9">
                  Falah Robbani | 08123444444444
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
                  <h4><b>Kontraktor</b></h4>                
                </div>
                <div class="col-sm-9">
                  Falah Robbani | 08123444444444
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
                  <h4><b>Pengawas Lapangan</b></h4>                
                </div>
                <div class="col-sm-9">
                  Falah Robbani | 08123444444444
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
                  <h4><b>Lokasi</b></h4>                
                </div>
                <div class="col-sm-9">
                  <a href="https://goo.gl/maps/xNcZVEzYUCPyQ5Dd6">https://goo.gl/maps/xNcZVEzYUCPyQ5Dd6</a>
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
                  <h4><b>Type</b></h4>                
                </div>
                <div class="col-sm-9">
                  72
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
                  <h4><b>Luas Bangunan</b></h4>                
                </div>
                <div class="col-sm-9">
                  72 m²
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
                  <h4><b>Luas Tanah</b></h4>                
                </div>
                <div class="col-sm-9">
                  100 m²
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
                  <h4><b>Spesifikasi Rumah</b></h4>                
                </div>
                <div class="col-sm-9">
                  3 Kamar tidur, 2 kamar mandi, 1 Ruang Tamu, 1 Ruang Keluarga, 1 Dapur
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
                  <h4><b>Jumlah Lantai</b></h4>                
                </div>
                <div class="col-sm-9">
                  1 Lantai
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
                  <h4><b>Lama Waktu Pengerjaan</b></h4>                
                </div>
                <div class="col-sm-9">
                  90 (Hari Kerja)
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
                  <h4><b>RAB</b></h4>                
                </div>
                <div class="col-sm-9">
                  Rp1.000.000.000,00
                </div>  
              </div>
            </div>
          </div>
        </div>

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