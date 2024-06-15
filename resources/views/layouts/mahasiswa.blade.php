@extends('layouts.app')

@section('content')
    <div class="d-flex" style="background-image: linear-gradient(#074173, #0C71C7)">
        <!-- sidebar start -->
        @include('components.sidebar-mahasiswa')
        <!-- sidebar end -->

        <!-- main start -->
        <div class="me-4 mb-4 px-5 py-3" style="background-color: #CEDDE6; width: 80%; border-radius: 20px;">
            @yield('main-content')
        </div>
        <!-- main end -->
    </div>
@endsection
