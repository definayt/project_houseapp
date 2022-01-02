@extends('layouts.app')

@section('content')


    <!-- ======= Screenshots Section ======= -->
    <section id="profil" class="padd-section">

      <div class="container" data-aos="fade-up">
        <a href="{{ route('project.detail', $data_project->id )}}" class="previous-button">&laquo; Kembali</a>

        <div class="section-title text-center">
          <h2>Profil Rumah</h2>

        </div>

        <div class="row">
          <div class="col-sm-12 py-2">
            <div class="block-profil card card-body h-100">
              <div class="row">
                <div class="col-sm-3">
                  <h4><b>Pemilik Rumah</b></h4>                
                </div>
                <div class="col-sm-9">
                  {{ $data_owner->name }} | {{ $data_owner->phone_number }}
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
                {{ $data_manager->name }} | {{ $data_manager->phone_number }}
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
                  @if(!$data_pengawas ==null)
                    {{ $data_pengawas->name }} | {{ $data_pengawas->phone_number }}
                  @else
                    -
                  @endif
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
                  <a href="{{ $data_project->location }}" target="_blank">{{ $data_project->location }}</a>
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
                {{ $data_project->type }}
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
                {{ $data_project->building_area }} m²
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
                {{ $data_project->land_area }} m²
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
                {{ $data_project->house_spec }}
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
                {{ $data_project->floors }} Lantai
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
                {{ $data_project->work_duration }} (Hari Kerja)
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
                  @php
                    $rab = $data_project->rab;
                  @endphp
                  @currency($rab)
                </div>  
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- End Screenshots Section -->
@endsection