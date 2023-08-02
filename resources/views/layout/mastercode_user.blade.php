<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPK MENU SEHAT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <link href="{{asset('usertem/css/styles.css')}}" rel="stylesheet" />
    <link rel="icon" href="{{asset('gambar/iconta2.png')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="/beranda">
            <span class="d-block d-lg-none">SPK MENU SEHAT</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-1" src="{{asset('gambar/iconta1.png')}}" alt="Logo" /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="btn btn-secondary nav-link js-scroll-trigger" href="/beranda">DASHBOARD</a></li>
                <li class="nav-item"><a class="btn btn-secondary nav-link js-scroll-trigger" href="/menuuser">DAFTAR MENU</a></li>
                <li class="nav-item"><a class="btn btn-secondary nav-link js-scroll-trigger" href="/jawaban">PILIH KRITERIA MENU</a></li>
                <li class="nav-item"><a class="btn btn-secondary nav-link js-scroll-trigger" href="/login">LOGIN</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid p-0">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('usertem/js/scripts.js')}}"></script>
    @stack('scripts')
</body>

</html>
