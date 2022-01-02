@extends('layouts.app')

@section('content')
    <!-- ======= Screenshots Section ======= -->
    <section id="pricing" class="padd-section">

      <div class="container" data-aos="fade-up">
        

        <div class="position-absolute top-left">
            <a href="{{ route('project.detail', $project_id )}}" class="previous-button">&laquo; Kembali</a>
        </div>
        <div class="position-absolute top-right">
            <button type="button" data-toggle="modal" data-target="#addNotesUser" class="previous-button"><i class="bi bi-plus"></i> Tambah Notes</button>
            <!-- <button type="button" class="btn btn-primary">Click Me!</button> -->
        </div>

        <div class="section-title text-center">
          <h2>Notes</h2>
          <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
        </div>

        @if($data_project->isEmpty())
          <h3 class="text-center">Notes Belum Tersedia</h3>
        @endif

        @php
          $row = 0;
          $count = 1
        @endphp
         
        @foreach ($data_project as $project)
          @if ($count-($row*3) === 1)
            <div class="row">
              <div class="col-sm-4 py-2">
                  <div class="block-pricing card card-body h-100">
                      <h3 class="card-title">Catatan {{ $count }}</h3>
                      <div class="table">
                        <ul class="list-unstyled">
                          <li><b>Tanggal :</b> {{ $project->date }}</li>
                          <li><b>Dari :</b> {{ $project->name}}</li>
                          <li><b>Perihal :</b> {{ $project->description }}</li>
                          @php
                            $count = $count + 1;
                            $row = $row + 1;
                          @endphp
                        </ul>
                        @if($project->creator_id == Auth::user()->id)
                          <button type="button" class="btn btn-warning" >Edit</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
                        @endif
                      </div>
                  </div>
              </div>
          @elseif ($count-($row*3) === 3)
              <div class="col-sm-4 py-2">
                  <div class="block-pricing card card-body h-100">
                      <h3 class="card-title">Catatan {{ $count }}</h3>
                      <div class="table">
                        <ul class="list-unstyled">
                          <li><b>Tanggal :</b> {{ $project->date }}</li>
                          <li><b>Dari :</b> {{ $project->name}}</li>
                          <li><b>Perihal :</b> {{ $project->description }}</li>
                          @php
                            $count = $count + 1;
                            $row = $row + 1;
                          @endphp
                        </ul>
                        @if($project->creator_id == Auth::user()->id)
                          <button type="button" class="btn btn-warning" >Edit</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
                        @endif
                      </div>
                  </div>
              </div>
            </div>
          @else
          <div class="col-sm-4 py-2">
                  <div class="block-pricing card card-body h-100">
                      <h3 class="card-title">Catatan {{ $count }}</h3>
                      <div class="table">
                        <ul class="list-unstyled">
                          <li><b>Tanggal :</b> {{ $project->date }}</li>
                          <li><b>Dari :</b> {{ $project->name}}</li>
                          <li><b>Perihal :</b> {{ $project->description }}</li>
                          @php
                            $count = $count + 1;
                            $row = $row + 1;
                          @endphp
                        </ul>
                        @if($project->creator_id == Auth::user()->id)
                          <button type="button" class="btn btn-warning" >Edit</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
                        @endif
                      </div>
                  </div>
              </div>
           @endif
          @endforeach
        </div>

        
      </div>

    </section><!-- End Screenshots Section -->


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
          <form action="" method="post" role="form">
            <div class="form-group input-group">
              <textarea type="text" name="description" rows="10" class="form-control" id="note" placeholder="Tuliskan Catatan" required></textarea>
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

@endsection