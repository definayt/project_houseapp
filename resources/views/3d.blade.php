@extends('layouts.app')

@section('content')

<!-- ======= Blog Section ======= -->

<section id="blog" class="padd-section">

  <div class="container" data-aos="fade-up">
  <a href="{{ route('project.detail', $data_project->id )}}" class="previous-button">&laquo; Kembali</a>

    <div class="section-title text-center">
      <h2>Gambar 3D</h2>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

      <div class="col-md-6 col-lg-6">
        <div class="block-blog text-left">
          <div class="container-3d">
            <iframe src="{{ $data_project->threed_link }}"
              frameborder="0" scrolling="no" marginheight="0"
              marginwidth="0" class="responsive-iframe" allowfullscreen>
            </iframe>
          </div>
          <div class="content-blog">
            <h2 class="text-center"><a href="#">Gambar 3D </a></h2>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-6">
        <div class="block-blog text-left ">
          <div class="container-3d">
            <video class="responsive-iframe" controls>
              <source src="{{ asset('video/'.$data_project->animation_video) }}" type="video/mp4">
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

@endsection
