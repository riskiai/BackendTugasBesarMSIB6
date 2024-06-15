@extends('layouts.mahasiswa')

@section('main-content')
    <section>
        <h1 class="font-koulen">Informasi Pribadi</h1>
        <div>

            {{-- display success after update process --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- display error after update process --}}
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('error') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <strong>{{ $errors->first() }}</strong>
                </div>
            @endif

            <!-- main start -->
            <form action="{{ route('mahasiswa.profil.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" style="border-radius: 20px; background-color: #EEF5FF" class="form-control" id="name"
                                placeholder="Masukkan nama kamu" value="{{ $user->name }}" disabled>
                            @error('name')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="hp" class="form-label">Nomor Handphone</label>
                            <input type="text" name="phone" style="border-radius: 20px; background-color: #EEF5FF" class="form-control" id="hp"
                                placeholder="Masukkan nomor handphone" value="{{ $user->phone }}">
                            @error('phone')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <h6>Media Sosial</h6>
                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" name="instagram" style="border-radius: 20px; background-color: #EEF5FF" class="form-control" id="instagram"
                                    placeholder="Masukkan username Instagram" value="{{ $user->instagram }}">
                                @error('instagram')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" name="facebook" style="border-radius: 20px; background-color: #EEF5FF" class="form-control" id="facebook"
                                    placeholder="Masukkan username Facebook" value="{{ $user->facebook }}">
                                @error('facebook')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" style="border-radius: 20px; background-color: #EEF5FF" class="form-control" id="email"
                                placeholder="Masukkan email kamu" value="{{ $user->email }}" disabled>
                            @error('email')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" name="alamat" style="border-radius: 20px; background-color: #EEF5FF" class="form-control" id="address"
                                placeholder="Masukkan alamat" value="{{ $user->alamat }}">
                            @error('alamat')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-flex align-items-center gap-3 my-3">
                            <div class="rounded-circle overflow-hidden"
                                style="background-color: #d9d9d9; height: 100px; width: 100px;">
                                <img src="{{ $user->foto_profil ? asset('storage/photo-profile/' . $user->foto_profil) : asset('assets/img/team/team-1.jpg') }}"
                                    alt="Profil Picture" class="img-fluid h-100 w-100 object-fit-cover">
                            </div>
                            <div>
                                <input class="form-control form-control-sm" style="border-radius: 20px; background-color: #EEF5FF" name="image" id="profilePicture"
                                    type="file">
                                @error('image')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-3">
                            <p class="m-0">Jenis Kelamin</p>
                            <select class="form-select form-select-sm w-25" name="gender" style="border-radius: 20px; background-color: #EEF5FF">
                                <option value="">Pilih</option>
                                <option value="pria" {{ ($user->gender ?? '') === 'pria' ? 'selected' : '' }}>
                                    Laki-laki
                                </option>
                                <option value="wanita" {{ ($user->gender ?? '') === 'wanita' ? 'selected' : '' }}>
                                    Perempuan
                                </option>
                            </select>
                            @error('gender')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="buttons" class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-danger" style="visibility: hidden">Submit</button>
                            <button type="submit" class="btn btn-success" style="border-radius: 20px; background-color: #074173">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- main end -->
        </div>
    </section>
@endsection
