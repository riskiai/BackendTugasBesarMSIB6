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
                        <h1>Pengguna Mahasiswa</h1>
                        @include('admin.pengguna.mahasiswa.navbarmahasiswa')
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-8 col-lg-12">
                                <div class="card">
                                    <form action="{{ route('admin.penggunamhs.createproses') }}" method="POST">
                                        @csrf
                                        <div class="card-header">
                                            <h4>Form Create Pengguna Mahasiswa</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name" class="form-control" required>
                                                        @error('name')
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
                                                        <label>Password</label>
                                                        <input type="password" name="password" class="form-control"
                                                            required>
                                                        @error('password')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" name="phone" class="form-control">
                                                        @error('phone')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea name="alamat" id="address" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Birth Date</label>
                                                        <input type="date" name="tgl_lahir" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <select name="gender" class="form-control">
                                                            <option value="pria">Pria</option>
                                                            <option value="wanita">Wanita</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Profile Photo</label>
                                                        <input type="file" name="foto_profil" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Employment Status</label>
                                                        <select name="status" class="form-control">
                                                            <option value="bekerja">Bekerja</option>
                                                            <option value="belum bekerja">Belum Bekerja</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>User Status</label>
                                                        <select name="status_users" class="form-control">
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
            // Initialize CKEditor
            ClassicEditor
                .create(document.querySelector('#address'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endsection
