@extends('layouts.app')

@section('content')

 <!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="padd-section ">
  <div class="container" data-aos="fade-up">
    <a href="{{ route('project.detail', $data_project->id )}}" class="previous-button">&laquo; Kembali</a>

    <div class="section-title text-center">
      <h2>Dokumen Rumah</h2>
    </div>

    <div class="row justify-content-center">
      <h3 class="col-md-6 btn btn-dark doc-home">Dokumen Perjanjian</h3>
      <div class="col-md-12">
          <iframe src="https://docs.google.com/viewer?url={{ asset('pdf/'.$data_project->agreement_doc) }}&embedded=true"  width="100%" height="500px"></iframe>
      </div>
    </div>

    <div class="row justify-content-center">
      <h3 class="col-md-6 btn btn-dark doc-home">Spesifikasi Teknis</h3>
      <div class="col-md-12">
          <iframe src="https://docs.google.com/viewer?url={{ asset('pdf/'.$data_project->spec_doc) }}&embedded=true"  width="100%" height="500px"></iframe>
      </div>

    </div>
  </div>
</section><!-- End Testimonials Section -->


@endsection