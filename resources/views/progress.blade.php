@extends('layouts.app')

@section('content')

  <!-- ======= Screenshots Section ======= -->
    <section id="profil" class="padd-section">

      <div class="container" data-aos="fade-up">
        <a href="{{ route('project.detail', $data_project->id )}}" class="previous-button">&laquo; Kembali</a>

        <div class="section-title text-center">
          <h2>Progress Rumah</h2>
        </div>

        <div class="row">
          <div class="col-sm-12 py-2">
            <div class="block-profil card card-body h-100">
              <div class="row">
                <div class="col-sm-3">
                  <h4><b>Status</b></h4>                
                </div>
                <div class="col-sm-9">
                  {{ $data_project->working_status }} %
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
                  {{ $hari_ke }} Hari Kerja
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
                  {{ $data_project->start_date }}
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
                  {{ $data_project->end_date }}
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
                @if($data_progress == null)
                    <h3 class="text-center">Progress Belum Tersedia</h3>
                @endif
                  <!-- Timeline start -->
                  <div class="timeline">
                    @foreach($data_progress as $progress)
                    <div class="timeline-row">
                      <div class="timeline-time">
                        {{ $progress['date'] }}
                      </div>
                      <div class="timeline-dot green-one-bg"></div>
                      <div class="timeline-content">   
                        <a data-toggle="modal" data-target=".sliderProgress" class="photo_progress" href=""  data-id="{{ $progress['id'].'|'.$progress['date'] }}">
                          <img src="{{ asset('img/photo_progress/'.$progress['file_photo'])}}" class="img-fluid" alt="">
                        </a>
                      </div>
                    </div>
                    @endforeach
                    
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
<div class="modal fade sliderProgress" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title date_progress"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="wrap-modal-slider">
          <div id="image-slider">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-logout" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
