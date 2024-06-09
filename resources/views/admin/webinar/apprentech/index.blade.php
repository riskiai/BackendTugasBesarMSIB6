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
                                                        <th class="text-center" style="min-width: 170px;">Penyelenggara</th>
                                                        <th class="text-center" style="min-width: 170px;">Judul Webinar</th>
                                                        <th class="text-center" style="min-width: 170px;">Tagline Webinar
                                                        </th>
                                                        <th class="text-center" style="min-width: 150px;">Narasumber</th>
                                                        <th class="text-center" style="min-width: 130px;">Tanggal</th>
                                                        <th class="text-center" style="min-width: 170px;">Waktu</th>
                                                        <th class="text-center">Platform</th>
                                                        <th class="text-center">Lokasi</th>
                                                        <th class="text-center" style="min-width: 170px;">Detail Description
                                                        </th>
                                                        <th class="text-center">Status Webinar</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($webinars as $webinar)
                                                        <tr>
                                                            <td class="text-center">{{ $webinar->company->name }}</td>
                                                            <td class="text-center">{{ $webinar->judul_webinar }}</td>
                                                            <td class="text-center">{{ $webinar->tagline }}</td>
                                                            <td class="text-center">{{ $webinar->narasumber }}</td>
                                                            <td class="text-center">
                                                                {{ Carbon\Carbon::parse($webinar->tanggal)->format('d/m/Y') }}
                                                            </td>
                                                            <td class="text-center">{{ $webinar->waktu_mulai }} -
                                                                {{ $webinar->waktu_selesai }}</td>
                                                            <td class="text-center">{{ $webinar->platform }}</td>
                                                            <td class="text-center">{{ $webinar->lokasi }}</td>
                                                            <td class="text-center">{{ $webinar->deskripsi }}
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="badge {{ Carbon\Carbon::today() > $webinar->tanggal ? 'badge-danger' : 'badge-success' }}">
                                                                    {{ Carbon\Carbon::today() > $webinar->tanggal ? 'Berakhir' : 'Sedang Berjalan' }}
                                                                </div>
                                                            </td>
                                                            <td class="text-center"
                                                                style="display: flex; align-items: center; gap:10px;">
                                                                <a href="{{ route('admin.webinarapprentech.edit') }}"
                                                                    class="btn btn-warning" title="Edit">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                                <a href="{{ route('admin.webinarapprentech.create') }}"
                                                                    class="btn btn-success" title="Create">
                                                                    <i class="fas fa-plus-circle"></i>
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
