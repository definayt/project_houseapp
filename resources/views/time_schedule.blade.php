@extends('layouts.app')

@section('content')

 <!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="padd-section ">
  <div class="container" data-aos="fade-up">
    <a href="{{ route('project.detail', $data_project->id )}}" class="previous-button">&laquo; Kembali</a>

    <div class="section-title text-center">

      <h2>Time Schedule</h2>
      <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
    </div>
    <div class="row justify-content-center">

      <div class="col-md-12">
          <iframe src='https://view.officeapps.live.com/op/embed.aspx?src={{ asset("xls/".$data_project->rab_file) }}' width='100%' height='565px' frameborder='10'> </iframe>
        <!-- <iframe src='https://docs.google.com/spreadsheets/d/e/2PACX-1vTozYDBBouzjFhIG6-yImfKQpa7sbfdDalh4p00TsuLlfMDlI_7jzce_AhHHEAQJ03JZCWT9tnbL1s0/pubhtml?widget=true&amp;chrome=false' width='100%' height='565px' frameborder='10'> </iframe>-->
      </div>

    </div>
  </div>
</section><!-- End Testimonials Section -->

@endsection