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
                    <h1>Table Pengguna Mitra Perusahaan</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item"><a href="#">Components</a></div>
                        <div class="breadcrumb-item">Table</div>
                    </div>
                </div>
                <div class="section-body mt-5">
                    <h2 class="section-title"></h2>
                    <p class="section-lead"></p>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>List Data Pengguna Mitra Perusahaan</h4>
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
                                                    <th class="text-center">Nama Perusahaan</th>
                                                    <th class="text-center">PIC Perusahaan</th>
                                                    <th class="text-center">Email Perusahaan</th>
                                                    <th class="text-center">Telphone Perusahaan</th>
                                                    <th class="text-center">Address</th>
                                                    <th class="text-center">Photo Profile</th>
                                                    <th class="text-center">Jumlah Karyawan</th>
                                                    <th class="text-center">Bidang Industri</th>
                                                    <th class="text-center">Website</th>
                                                    <th class="text-center">Instagram</th>
                                                    <th class="text-center">Facebook</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">Nama Perusahaan Example</td>
                                                    <td class="text-center">PIC Example</td>
                                                    <td class="text-center">example@company.com</td>
                                                    <td class="text-center">123-456-7890</td>
                                                    <td class="text-center">1234 Example St.</td>
                                                    <td class="text-center">
                                                        <img alt="image" src="{{ asset('assets/img/avatar/avatar-5.png') }}" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                                                    </td>
                                                    <td class="text-left">50</td>
                                                    <td class="text-left">Technology</td>
                                                    <td class="text-left"><a href="https://company.com">company.com</a></td>
                                                    <td class="text-left">@company</td>
                                                    <td class="text-left">Company FB</td>
                                                    <td class="text-left">
                                                        <div class="badge badge-success">Active</div>
                                                    </td>
                                                    <td class="text-left" style="display: flex; align-items: center; gap:10px;">
                                                        <a href="#" class="btn btn-secondary" title="Detail">
                                                            <i class="fas fa-info-circle"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-warning" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-success" title="Create">
                                                            <i class="fas fa-plus-circle"></i>
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
