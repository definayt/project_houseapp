@extends('layouts.app')

@section('content')
    <!-- ======= Features Section ======= -->
    <section id="features" class="padd-section ">

      <div class="container" data-aos="fade-up">
        <a href="{{ route('home') }}" class="previous-button">&laquo; Kembali</a>

        <div class="section-title text-center">
          <h2>{{ $data_project->project_name }}</h2>
          <!-- <p class="separator">Silakan klik pada salah satu  .</p> -->
        </div>

        <div class="row text-center" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-3">
            <a href="{{ route('house_profile', $data_project->id) }}">             
              <div class="feature-block ">
                <i class="bi bi-house fs-2 mb-3"></i>
                <h4>Profil Rumah</h4>
              </div>
            </a>
          </div>

          
          <div class="col-md-6 col-lg-3">
            <a href="{{ route('twodimension', $data_project->id) }}"> 
              <div class="feature-block">
                <i class="bi bi-images fs-2 mb-3"></i>
                <h4>Gambar 2D</h4>
              </div>
            </a>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <a href="{{ route('threedimension', $data_project->id) }}">
              <div class="feature-block">
                <i class="bi bi-badge-3d fs-2 mb-3"></i>
                <h4>Gambar 3D</h4>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3">
            <a href="{{ route('progress', $data_project->id) }}">
              <div class="feature-block">
                <i class="bi bi-hourglass-split fs-2 mb-3"></i>
                <h4>Progress Rumah</h4>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3">
            <a href="{{ route('time_schedule', $data_project->id) }}">
              <div class="feature-block">
                <i class="bi bi-calendar-week fs-2 mb-3"></i>
                <h4>Time Schedule</h4>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3">
            <a href="{{ route('rab', $data_project->id) }}">
              <div class="feature-block">                
                <i class="bi bi-file-earmark-spreadsheet fs-2 mb-3"></i>
                <h4>RAB</h4>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3">
            <a href="{{ route('doc_house', $data_project->id) }}">
              <div class="feature-block">
                <i class="bi bi-file-earmark-pdf fs-2 mb-3"></i>
                <h4>Dokumen Rumah</h4>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3">
            <a href="notes_page.html">
              <div class="feature-block">
                <i class="bi bi-stickies fs-2 mb-3"></i>
                <h4>Notes</h4>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section><!-- End Features Section --> 
@endsection