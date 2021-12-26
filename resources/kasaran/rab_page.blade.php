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

     <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="padd-section ">
      <div class="container" data-aos="fade-up">
        <a href="project_detail_page.html" class="previous-button">&laquo; Kembali</a>

        <div class="section-title text-center">

          <h2>RAB</h2>
          <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
        </div>
        <div class="row justify-content-center">

          <div class="col-md-12">
              <iframe src='https://view.officeapps.live.com/op/embed.aspx?src=https://definayasmint.my.id/project_ce/assets/xls/Estimated-Budget-Proposed.xlsx' width='100%' height='565px' frameborder='10'> </iframe>
            <!-- <iframe src='https://docs.google.com/spreadsheets/d/e/2PACX-1vTozYDBBouzjFhIG6-yImfKQpa7sbfdDalh4p00TsuLlfMDlI_7jzce_AhHHEAQJ03JZCWT9tnbL1s0/pubhtml?widget=true&amp;chrome=false' width='100%' height='565px' frameborder='10'> </iframe> -->
          </div>

        </div>
      </div>
    </section><!-- End Testimonials Section -->

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