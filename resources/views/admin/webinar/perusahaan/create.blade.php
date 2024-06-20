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
                        <h1>Webinar Perusahaan</h1>
                        @include('admin.webinar.perusahaan.navbarwebinarperusahaan')
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-8 col-lg-12">
                                <div class="card">

                                    {{-- alerts to display error and success --}}
                                    @if (session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif
                                    @if (session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    <form action="{{ route('admin.webinarperusahaan.createproses') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-header">
                                            <h4>Form Create Webinar Apprentech</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>ID Perusahaan</label>
                                                        <input type="number" name="company_id" class="form-control"
                                                            required>
                                                        @error('company_id')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Judul Webinar</label>
                                                        <input type="text" name="judul_webinar" class="form-control"
                                                            required value="{{ old('judul_webinar') }}">
                                                        @error('judul_webinar')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tagline Webinar</label>
                                                        <input type="text" name="tagline" class="form-control" required>
                                                        @error('tagline')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Narasumber</label>
                                                        <input type="text" name="narasumber" class="form-control"
                                                            required>
                                                        @error('narasumber')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jabatan Narasumber</label>
                                                        <input type="text" name="jabatan_narasumber" class="form-control"
                                                            required>
                                                        @error('jabatan_narasumber')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi Webinar</label>
                                                        <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
                                                        @error('deskripsi')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Tanggal</label>
                                                        <input type="date" name="tanggal" class="form-control" required>
                                                        @error('tanggal')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Waktu Mulai</label>
                                                        <input type="time" name="waktu_mulai" class="form-control"
                                                            required>
                                                        @error('waktu_mulai')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Waktu Mulai</label>
                                                        <input type="time" name="waktu_selesai" class="form-control"
                                                            required>
                                                        @error('waktu_selesai')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Platform</label>
                                                        <input type="text" name="platform" class="form-control" required>
                                                        @error('platform')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Poster Webinar</label>
                                                        <input type="file" name="poster" class="form-control">
                                                        @error('poster')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
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
                .create(document.querySelector('#deskripsi'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endsection
