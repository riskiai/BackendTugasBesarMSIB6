@extends('admin.components.app')

@section('styles')

    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <style type="text/css">
        .ck-editor__editable_inline {
            height: 300px;
        }
    </style>

@endsection

@section('content')

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                <h1>Webinar Apprentech</h1>
                @include('admin.webinar.apprentech.navbarwebinarapprentech')
              </div>

              <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-12">
                        <div class="card">
                            <form action="" method="POST">
                              @csrf
                              <div class="card-header">
                                <h4>Form Create Webinar Apprentech</h4>
                              </div>
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Nama Pembicara</label>
                                      <input type="text" name="name_speaker" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Short Description</label>
                                      <input type="text" name="short_description" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Detail Description</label>
                                      <textarea name="detail_description" id="detail_description" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label>Judul Webinar</label>
                                      <input type="text" name="judul_webinar" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Mengadakan Acara</label>
                                      <input type="text" name="mengadakan_acara" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>Judul Deskripsi</label>
                                      <input type="text" name="judul_deskripsi" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>Nama Pengada Acara</label>
                                      <input type="text" name="nama_pengada_acara" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Tanggal</label>
                                      <input type="date" name="tanggal" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Waktu</label>
                                      <input type="text" name="waktu" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Platform</label>
                                      <input type="text" name="platform" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Lokasi</label>
                                      <input type="text" name="lokasi" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Status Webinar</label>
                                      <select name="status_webinar" class="form-control" required>
                                        <option value="perusahaan">Perusahaan</option>
                                        <option value="apprentech">Apprentech</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </form>
                          </div>
                    </div>
                </div> 
              </div>

            </section>
        </div>
    </div>
</div> 

@endsection

{{-- CKEDITOR --}}
@section('scripts')

<script>
$(document).ready(function() {
    // Initialize CKEditor
    ClassicEditor
        .create(document.querySelector('#detail_description'))
        .catch(error => {
            console.error(error);
        });
});
</script>
@endsection
