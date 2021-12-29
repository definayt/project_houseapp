@extends('layouts.app')

@section('content')

<!-- ======= Screenshots Section ======= -->
<section id="screenshots" class="padd-section">

  <div class="container" data-aos="fade-up">
    <a href="{{ route('project.detail', $data_project->id )}}" class="previous-button">&laquo; Kembali</a>

    <div class="section-title text-center">
      <h2>Gambar 2D</h2>
    </div>
    <div class="container">
      <iframe src="https://docs.google.com/viewer?url={{ asset('pdf/'. $data_project->twod_file) }}&embedded=true"  width="100%" height="500px"></iframe>
  </div>

  </div>

</section><!-- End Screenshots Section -->

@endsection

