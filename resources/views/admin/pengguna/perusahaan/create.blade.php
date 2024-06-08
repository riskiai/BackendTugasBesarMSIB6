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
                        <h1>Pengguna Mitra Perusahaan</h1>
                        @include('admin.pengguna.perusahaan.navbarperusahaan')
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-8 col-lg-12">
                                <div class="card">
                                    <form action="{{ route('admin.pengguna.createproses') }}" method="POST">
                                        @csrf
                                        <div class="card-header">
                                            <h4>Form Create Penggunna Perusahaan</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Company Name</label>
                                                        <input type="text" name="name" class="form-control" required>
                                                        @error('name')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>PIC Name</label>
                                                        <input type="text" name="pic_name" class="form-control" required>
                                                        @error('pic_name')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" name="email" class="form-control" required>
                                                        @error('email')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" name="phone" class="form-control" required>
                                                        @error('phone')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" name="password" class="form-control"
                                                            required>
                                                        @error('password')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" name="address" id="address"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Profile Photo</label>
                                                        <input type="file" name="foto_profil" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Number of Employees</label>
                                                        <input type="number" name="employees" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Industry</label>
                                                        <input type="text" name="industry" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Website</label>
                                                        <input type="text" name="website" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Instagram</label>
                                                        <input type="text" name="instagram" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input type="text" name="facebook" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select name="status" class="form-control" required>
                                                            <option value="active">Active</option>
                                                            <option value="inactive">Inactive</option>
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
            // Inisialisasi CKEditor pada modal tambah data
            ClassicEditor
                .create(document.querySelector('#address'))
                .catch(error => {
                    console.error(error);
                });

        });
    </script>
@endsection
