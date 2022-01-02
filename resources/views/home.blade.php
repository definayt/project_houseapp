@extends('layouts.app')

@section('content')

 <!-- ======= Features Section ======= -->
    <section id="features" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Daftar Proyek</h2>
          @if(!$data_project->isEmpty())  
            <p class="separator">Silakan klik pada salah satu proyek untuk melihat detailnya .</p>
          @endif
        </div>
        @if($data_project->isEmpty())
          <h3>Maaf, Anda belum memiliki Proyek.</h3>
        @endif

        @php
          $row = 0;
          $count = 1
        @endphp
         
        @foreach ($data_project as $project)
          @if ($count-($row*4) === 1)
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-md-6 col-lg-3">
                <a href="{{ route('project.detail', $project->id )}}">
                  <div class="feature-block">                    
                    <i class="bi bi-house-door fs-2 mb-3"></i>
                    <h4>{{ $project->project_name }}</h4>
                    @php
                      $count = $count + 1;
                    @endphp
                  </div>
                </a>
              </div>
          @elseif ($count-($row*4) === 4)
              <div class="col-md-6 col-lg-3">
                <a href="{{ route('project.detail', $project->id )}}">
                  <div class="feature-block">
                    <i class="bi bi-house-door fs-2 mb-3"></i>
                    <h4>{{ $project->project_name }}</h4>
                    @php
                      $count = $count + 1;
                      $row = $row + 1;
                    @endphp
                  </div>
                </a>
              </div>
            </div>
          @else
            <div class="col-md-6 col-lg-3">
              <a href="{{ route('project.detail', $project->id )}}">
                <div class="feature-block">
                  <i class="bi bi-house-door fs-2 mb-3"></i>
                  <h4>{{ $project->project_name }}</h4>
                    @php
                      $count = $count + 1;
                    @endphp
                </div>
              </a>
            </div>
          @endif
        @endforeach
      </div>
    </section><!-- End Features Section -->

@endsection