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
                    <h1>Webinar Apprentech</h1>
                    @include('admin.webinar.apprentech.navbarwebinarapprentech')
                </div>
                <div class="section-body mt-5">
                    <h2 class="section-title"></h2>
                    <p class="section-lead"></p>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>List Data Webinars Apprentech</h4>
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
                                                    <th class="text-center" style="min-width: 170px;">Judul Webinar</th>
                                                    <th class="text-center" style="min-width: 150px;">Nama Pembicara</th>
                                                    <th class="text-center">Tanggal</th>
                                                    <th class="text-center" style="min-width: 170px;">Waktu</th>
                                                    <th class="text-center">Platform</th>
                                                    <th class="text-center">Lokasi</th>
                                                    <th class="text-center" style="min-width: 170px;">Short Description</th>
                                                    <th class="text-center" style="min-width: 170px;">Detail Description</th>
                                                    <th class="text-center" style="min-width: 170px;">Mengadakan Acara</th>
                                                    <th class="text-center" style="min-width: 170px;">Judul Deskripsi</th>
                                                    <th class="text-center" style="min-width: 170px;">Nama Pengada Acara</th>
                                                    <th class="text-center">Status Webinar</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">Webinar on AI</td>
                                                    <td class="text-center">John Doe</td>
                                                    <td class="text-center">2024-06-15</td>
                                                    <td class="text-center">10:00 AM</td>
                                                    <td class="text-center">Zoom</td>
                                                    <td class="text-center">Online</td>
                                                    <td class="text-center">Introduction to AI</td>
                                                    <td class="text-center">Detailed discussion on AI and its future</td>
                                                    <td class="text-center">Tech Conference 2024</td>
                                                    <td class="text-center">Understanding AI</td>
                                                    <td class="text-center">Tech Innovators</td>
                                                    <td class="text-center">
                                                        <div class="badge badge-success">apprentech</div>
                                                    </td>
                                                    <td class="text-center" style="display: flex; align-items: center; gap:10px;">
                                                        <a href="{{ route('admin.webinarapprentech.edit') }}" class="btn btn-warning" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('admin.webinarapprentech.create') }}" class="btn btn-success" title="Create">
                                                            <i class="fas fa-plus-circle"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger" title="Delete">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">Introduction to Blockchain</td>
                                                    <td class="text-center">Jane Smith</td>
                                                    <td class="text-center">2024-07-01</td>
                                                    <td class="text-center">2:00 PM</td>
                                                    <td class="text-center">Google Meet</td>
                                                    <td class="text-center">Online</td>
                                                    <td class="text-center">Basics of Blockchain</td>
                                                    <td class="text-center">In-depth look at Blockchain technology</td>
                                                    <td class="text-center">Blockchain Summit 2024</td>
                                                    <td class="text-center">Blockchain Explained</td>
                                                    <td class="text-center">Crypto Enthusiasts</td>
                                                    <td class="text-center">
                                                        <div class="badge badge-success">apprentech</div>
                                                    </td>
                                                    <td class="text-center" style="display: flex; align-items: center; gap:10px;">
                                                        <a href="{{ route('admin.webinarapprentech.edit') }}" class="btn btn-warning" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('admin.webinarapprentech.create') }}" class="btn btn-success" title="Create">
                                                            <i class="fas fa-plus-circle"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger" title="Delete">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <!-- Tambahkan data dummy lainnya sesuai kebutuhan -->
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
