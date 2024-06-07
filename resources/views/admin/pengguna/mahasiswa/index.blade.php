@extends('admin.components.app')

@section('styles')
<style>
    .table td, .table th {
        padding: 15px; /* Atur jarak padding sesuai keinginan */
        vertical-align: middle; /* Supaya isi sel sejajar di tengah secara vertikal */
    }
    .table tr {
        margin-bottom: 10px; /* Atur margin bawah antar baris jika diperlukan */
    }
    .table {
        border-spacing: 10px; /* Atur jarak antar sel dalam tabel */
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
                <div class="section-body mt-5">
                    <h2 class="section-title"></h2>
                    <p class="section-lead"></p>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>List Data Pengguna Mahasiswa</h4>
                                    <div class="card-header-form">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-body p-2 g-5">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center"  style="min-width: 170px;">Name</th>
                                                    <th class="text-center" style="min-width: 150px;">Phone</th>
                                                    <th class="text-center">Email</th>                                            
                                                    <th class="text-center"  style="min-width: 170px;">Address</th>
                                                    <th class="text-center" style="min-width: 150px;">Birth Date</th>
                                                    <th class="text-center">Gender</th>
                                                    <th class="text-center">Profile Photo</th>
                                                    <th class="text-center">Employment Status</th>
                                                    <th class="text-center">User Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">Riski Ahmad Ilham</td>
                                                    <td class="text-center">123 456 7890</td>
                                                    <td class="text-center">example@user.com</td>
                                                    <td class="text-center">1234 Example St.</td>
                                                    <td class="text-center">1990-01-01</td>
                                                    <td class="text-center">Pria</td>
                                                    <td class="text-center">
                                                        <img alt="image" src="{{ asset('assets/img/avatar/avatar-5.png') }}" class="rounded-circle" width="35" data-toggle="tooltip" title="Profile Photo">
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="badge badge-success">Bekerja</div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="badge badge-success">Active</div>
                                                    </td>
                                                    <td class="text-center" style="display: flex; align-items: center; gap:10px;">
                                                        {{-- <a href="#" class="btn btn-secondary" title="Detail">
                                                            <i class="fas fa-info-circle"></i>
                                                        </a> --}}
                                                        <a href="{{ route('admin.penggunamhs.edit') }}" class="btn btn-warning" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('admin.penggunamhs.create') }}" class="btn btn-success" title="Create">
                                                            <i class="fas fa-plus-circle"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger" title="Delete">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
