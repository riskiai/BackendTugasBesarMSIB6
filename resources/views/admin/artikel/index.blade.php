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
                                        <h4>List Data Artikel</h4>
                                        <div class="card-header-action" style="margin-right: 10px">
                                            <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary">Tambah
                                                Artikel</a>
                                        </div>
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
                                                        <th class="text-center" style="min-width: 170px;">Judul</th>
                                                        <th class="text-center" style="min-width: 150px;">Konten</th>
                                                        <th class="text-center">Gambar</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($artikels as $artikel)
                                                        <tr>
                                                            <td class="text-center">{{ $loop->iteration }}</td>
                                                            <td class="text-center">
                                                                <a href="/detail-artikel/{{ $artikel->id }}">
                                                                    {{ $artikel->judul }}
                                                                </a>
                                                            </td>
                                                            <td class="text-center">{{ $artikel->konten }}</td>
                                                            <td class="text-center">
                                                                <img alt="image"
                                                                    src="{{ asset('assets/img/avatar/avatar-5.png') }}"
                                                                    class="rounded-circle" width="35"
                                                                    data-toggle="tooltip" title="Profile Photo">
                                                            </td>
                                                            <td class="text-center"
                                                                style="display: flex; align-items: center; gap:10px;">
                                                                <a href="{{ route('admin.penggunamhs.edit') }}"
                                                                    class="btn btn-warning" title="Edit">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-danger" title="Delete">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </a>
                                                            </td>
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
