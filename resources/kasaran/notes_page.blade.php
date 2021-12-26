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
    <section id="pricing" class="padd-section">

      <div class="container" data-aos="fade-up">
        

        <div class="position-absolute top-left">
            <a href="project_detail_page.html" class="previous-button">&laquo; Kembali</a>
        </div>
        <div class="position-absolute top-right">
            <button type="button" data-toggle="modal" data-target="#addNotesUser" class="previous-button"><i class="bi bi-plus"></i> Tambah Notes</button>
            <!-- <button type="button" class="btn btn-primary">Click Me!</button> -->
        </div>

        <div class="section-title text-center">
          <h2>Notes</h2>
          <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
        </div>

        <div class="row">
          <div class="col-sm-4 py-2">
              <div class="block-pricing card card-body h-100">
                  <h3 class="card-title">Catatan 1</h3>
                  <div class="table">
                    <ul class="list-unstyled">
                      <li><b>Tanggal :</b> 5 Desember 2021</li>
                      <li><b>Dari :</b> Mandor</li>
                      <li><b>Perihal :</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</li>
                    </ul>
                  </div>
              </div>
          </div>
           <div class="col-sm-4 py-2">
              <div class="block-pricing card card-body h-100">
                  <h3 class="card-title">Catatan 2</h3>
                  <div class="table">
                    <ul class="list-unstyled">
                      <li><b>Tanggal :</b> 5 Desember 2021</li>
                      <li><b>Dari :</b> Owner</li>
                      <li><b>Perihal :</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</li>
                    </ul>
                    <button type="button" class="btn btn-warning" >Edit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
                  </div>
              </div>
          </div>
           <div class="col-sm-4 py-2">
              <div class="block-pricing card card-body h-100">
                  <h3 class="card-title">Catatan 4</h3>
                  <div class="table">
                    <ul class="list-unstyled">
                      <li><b>Tanggal :</b> 5 Desember 2021</li>
                      <li><b>Dari :</b> Mandor</li>
                      <li><b>Perihal :</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</li>
                    </ul>
                  </div>
              </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 py-2">
              <div class="block-pricing card card-body h-100">
                  <h3 class="card-title">Catatan 1</h3>
                  <div class="table">
                    <ul class="list-unstyled">
                      <li><b>Tanggal :</b> 5 Desember 2021</li>
                      <li><b>Dari :</b> Mandor</li>
                      <li><b>Perihal :</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</li>
                    </ul>
                  </div>
              </div>
          </div>
           <div class="col-sm-4 py-2">
              <div class="block-pricing card card-body h-100">
                  <h3 class="card-title">Catatan 2</h3>
                  <div class="table">
                    <ul class="list-unstyled">
                      <li><b>Tanggal :</b> 5 Desember 2021</li>
                      <li><b>Dari :</b> Mandor</li>
                      <li><b>Perihal :</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</li>
                    </ul>
                  </div>
              </div>
          </div>
           <div class="col-sm-4 py-2">
              <div class="block-pricing card card-body h-100">
                  <h3 class="card-title">Catatan 4</h3>
                  <div class="table">
                    <ul class="list-unstyled">
                      <li><b>Tanggal :</b> 5 Desember 2021</li>
                      <li><b>Dari :</b> Mandor</li>
                      <li><b>Perihal :</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</li>
                    </ul>
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

<!-- Modal -->
<div class="modal fade" id="addNotesUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle">Tambahkan Note/Catatan</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form">
          <form action="" method="post" role="form" class="php-email-form">
            <div class="form-group input-group">
              <textarea type="text" name="note" rows="10" class="form-control" id="note" placeholder="Tuliskan Catatan" required></textarea>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-logout" >Simpan</button>
        <button type="button" class="btn btn-logout" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  </main><!-- End #main -->

@endsection