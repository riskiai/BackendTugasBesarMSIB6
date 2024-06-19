@extends('admin.components.app')

@section('styles')
    <style>
        .table td,
        .table th {
            padding: 15px;
            /* Atur jarak padding sesuai keinginan */
            vertical-align: middle;
            /* Supaya isi sel sejajar di tengah secara vertikal */
        }

        .table tr {
            margin-bottom: 10px;
            /* Atur margin bawah antar baris jika diperlukan */
        }

        .table {
            border-spacing: 10px;
            /* Atur jarak antar sel dalam tabel */
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
                                        <h4>List Data Lamaran</h4>
                                        <div class="card-header-form">
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-primary"><i
                                                                class="fas fa-search"></i></button>
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
                                                        <th class="text-center" style="min-width: 170px;">No.</th>
                                                        <th class="text-center" style="min-width: 170px;">Perusahaan</th>
                                                        <th class="text-center" style="min-width: 150px;">Lowongan</th>
                                                        <th class="text-center">ID Pendaftar</th>
                                                        <th class="text-center">Nama Pendaftar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($lamarans as $lamaran)
                                                        <tr>
                                                            <td class="text-center">{{ $loop->iteration }}</td>
                                                            <td class="text-center">{{ $lamaran->lowongan->company->name }}</td>
                                                            <td class="text-center">
                                                                <a href="/lowongan/{{ $lamaran->lowongan->id }}">
                                                                    {{ $lamaran->lowongan->judul }}
                                                                </a>
                                                            </td>
                                                            <td class="text-center">{{ $lamaran->user_id }}</td>
                                                            <td class="text-center">{{ $lamaran->user->name }}</td>
                                                        </tr>
                                                    @endforeach
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
