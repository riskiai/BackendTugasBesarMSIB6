<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ApprenTech</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Lybrary --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    {{-- Icon --}}
    <link rel="icon" href="{{ asset('assets/img/Logo.png') }}" type="image/x-icon" />

    {{-- Style CSS --}}
    <link rel="stylesheet" href="{{ asset('css/login_perusahaaan.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tampilan-register.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/artikel_masuk.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/detail_webinar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    {{-- Font Koulen --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">

    {{-- Font Kufam --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kufam:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: "{{ $message }}",
            });
        </script>
    @endif
    <x-navbar />
    @yield('content')
    {{-- <x-footer /> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $("#webinarRegistrationModal").modal('show');
            $("#lowonganSaveModal").modal('show');
        });
    </script>
</body>

</html>
