@extends('layouts.perusahaan')

@section('main-content')
    <section>
        <h1 class="font-koulen">Dashboard</h1>

        {{-- Lowongan Tersimpan start --}}
        <div class="mt-3">
            <div>
                <h5 class="text-start pt-2 ms-2 fw-bold">Pendaftar Magang</h5>
            </div>
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col" class="p-0" style="border-radius: 20px 0 0 0">
                            <div class="py-2 my-2 ms-2 ps-3" style="background-color: #EEF5FF; border-radius: 20px 0 0 20px">
                                No</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Lowongan</div>
                        </th>
                        <th scope="col" class="p-0" style="border-radius: 0 20px 0 0">
                            <div class="py-2 my-2 me-2" style="background-color: #EEF5FF; border-radius: 0 20px 20px 0">
                                Gaji
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($internApplications as $internApplication)
                        <tr style="vertical-align: middle">
                            <td class="px-0" scope="row" style="{{ $loop->last ? 'border-radius: 0 0 0 20px' : '' }}">
                                1.</td>
                            <td class="px-0 text-secondary fs-5">Magang Web Developer</td>
                            <td class="px-0 text-secondary fs-5"
                                style="{{ $loop->last ? 'border-radius: 0 0 20px 0' : '' }}">
                                Rp3-4 juta
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- Lowongan Tersimpan end --}}

        {{-- Webinar diikuti start --}}
        <div class="mt-3">
            <div>
                <h5 class="text-start pt-2 ms-2 fw-bold">Pendaftar Kerja</h5>
            </div>
            <table class="table">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col" class="p-0" style="border-radius: 20px 0 0 0">
                            <div class="py-2 my-2 ms-2 ps-3"
                                style="background-color: #EEF5FF; border-radius: 20px 0 0 20px">
                                No</div>
                        </th>
                        <th scope="col" class="p-0">
                            <div class="py-2 my-2" style="background-color: #EEF5FF;">Lowongan</div>
                        </th>
                        <th scope="col" class="p-0" style="border-radius: 0 20px 0 0">
                            <div class="py-2 my-2 me-2" style="background-color: #EEF5FF; border-radius: 0 20px 20px 0">
                                Gaji
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($workApplications as $workApplication)
                        <tr style="vertical-align: middle">
                            <td class="px-0" scope="row" style="{{ $loop->last ? 'border-radius: 0 0 0 20px' : '' }}">
                                1.</td>
                            <td class="px-0 text-secondary fs-5">Magang Web Developer</td>
                            <td class="px-0 text-secondary fs-5"
                                style="{{ $loop->last ? 'border-radius: 0 0 20px 0' : '' }}">
                                Rp3-4 juta
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- Webinar Diikuti end --}}
    </section>
@endsection
