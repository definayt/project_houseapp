@extends('layouts.app')

@section('content')
    <!-- ======= Screenshots Section ======= -->
    <section id="pricing" class="padd-section">

      <div class="container" data-aos="fade-up">
        

        <div class="position-absolute top-left">
            <a href="{{ route('project.detail', $project_id )}}" class="previous-button">&laquo; Kembali</a>
        </div>
        <div class="position-absolute top-right">
            <button id="add-note" type="button" data-toggle="modal" data-target=".addNotesUser" class="previous-button"><i class="bi bi-plus"></i> Tambah Notes</button>
        </div>

        <div class="section-title text-center">
          <h2>Notes</h2>
          @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <h4 id="msg">{{ $message }}</h4>
            </div>
          @endif
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
                          <form action="{{ route('notes.destroy',$project->id) }}" method="POST">
                            <a href="javascript:void(0)" class="btn btn-warning edit-notes" data-toggle="modal" data-id="{{ $project->id }}" data-target=".editNotesUser">Edit </a>
                              <meta name="csrf-token" content="{{ csrf_token() }}">
                              <button type="button" data-toggle="modal" data-target="#deleteNotes" id="" data-id="{{ $project->id }}" class="btn btn-danger delete-notes">Delete</button>
                          </form>
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
                          <form action="{{ route('notes.destroy',$project->id) }}" method="POST">
                            <a href="javascript:void(0)" class="btn btn-warning edit-notes" data-toggle="modal" data-id="{{ $project->id }}" data-target=".editNotesUser">Edit </a>
                              <meta name="csrf-token" content="{{ csrf_token() }}">
                              <button type="button" data-toggle="modal" data-target="#deleteNotes" id="" data-id="{{ $project->id }}" class="btn btn-danger delete-notes">Delete</button>
                          </form>
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
                          <form action="{{ route('notes.destroy',$project->id) }}" method="POST">
                            <a type="button" href="javascript:void(0)" class="btn btn-warning edit-notes" data-toggle="modal" data-id="{{ $project->id }}" data-target=".editNotesUser">Edit </a>
                              <meta name="csrf-token" content="{{ csrf_token() }}">
                            <button type="button" data-toggle="modal" data-target="#deleteNotes" id="" data-id="{{ $project->id }}" class="btn btn-danger delete-notes">Delete</button>
                          </form>
                        @endif
                      </div>
                  </div>
              </div>
           @endif
          @endforeach
        </div>

        
      </div>

    </section><!-- End Screenshots Section -->


<!-- Modal Tambah-->
<div class="modal fade addNotesUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
          <form action="" method="post" role="form" class ="formAddNotes">
            <input type="hidden" id="id_note" name="id_note">
            <input type="hidden" id="project_id" name="project_id" value="{{ $project_id }}">
            <div class="form-group input-group">
              <textarea autofocus type="text" name="description" rows="10" class="form-control" id="description" placeholder="Tuliskan Catatan" required></textarea>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-logout submitAddNote">Simpan</button>
      </div>
    </div>
  </div>
</div>

   <!-- Modal Hapus -->
<div class="modal fade" id="deleteNotes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalCenterTitle">Anda Yakin Ingin Menghapus Catatan Ini?</h4>
      </div>
      <div class="modal-footer">
        <form action="" method="post">
            <!-- @csrf
            @method('DELETE') -->
            <input id="id_delete" name="id" type="hidden">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-sm btn-danger submitDeleteNotes">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit-->
<div class="modal fade editNotesUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle">Edit Notes</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form">
          <form action="" method="post" role="form" class="formEditNotes">
            <input type="hidden" id="id_note_edit" name="id_note">
            <div class="form-group input-group">
              <textarea autofocus type="text" name="description" rows="10" class="form-control" id="description_edit" required></textarea>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit"  class="btn btn-logout submitEditNote" >Simpan</button>
      </div>
    </div>
  </div>
</div>

@endsection