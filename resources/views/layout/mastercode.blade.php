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
                @if (session()->has('level'))
                <li class="nav-item"><a class="btn btn-secondary nav-link js-scroll-trigger" href="/beranda">DASHBOARD</a></li>
                <li class="nav-item"><a class="btn btn-secondary nav-link js-scroll-trigger" href="/menu">DAFTAR MENU</a></li>
                <li class="nav-link js-scroll-trigger mb-1">
                    <button class="btn btn-secondary list-unstyled fw-bold pb-1 big" data-bs-toggle="collapse" data-bs-target="#content-collapse" aria-expanded="false">
                        DATA KRITERIA <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="collapse" id="content-collapse">
                        <ul class="list-unstyled fw-bold pb-1 big">
                            <li><a href="/bobotkriteria" class="btn btn-secondary nav-link js-scroll-trigger">BOBOT KRITERIA</a></li>
                            <li><a href="/nilaikriteria" class="btn btn-secondary nav-link js-scroll-trigger">NILAI KRITERIA</a></li>
                            <li><a href="/kriteria" class="btn btn-secondary nav-link js-scroll-trigger">KRITERIA</a></li>
                            <li><a href="/kategorimenu" class="btn btn-secondary nav-link js-scroll-trigger">KATEGORI MENU</a></li>
                            <li><a href="/nilaicrips" class="btn btn-secondary nav-link js-scroll-trigger">DATA CRIPS KRITERIA</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="btn btn-secondary nav-link js-scroll-trigger" href="/saw">PERHITUNGAN SAW</a></li>
                <li class="nav-item"><a class="btn btn-secondary nav-link js-scroll-trigger" href="/rekapan">REKAP REKOMENDASI</a></li>
                <li class="nav-item"><a class="btn btn-secondary nav-link js-scroll-trigger" href="{{route('logout')}}">LOGOUT</a></li>
                @else
                <li class="nav-item"><a class="btn btn-secondary nav-link js-scroll-trigger" href="/beranda">DASHBOARD</a></li>
                <li class="nav-item"><a class="btn btn-secondary nav-link js-scroll-trigger" href="/menuuser">DAFTAR MENU</a></li>
                <li class="nav-item"><a class="btn btn-secondary nav-link js-scroll-trigger" href="/jawaban">PILIH KRITERIA MENU</a></li>
                <li class="nav-item"><a class="btn btn-secondary nav-link js-scroll-trigger" href="/login">LOGIN</a></li>
                @endif
            </ul>
        </div>
    </nav>
    <div class="container-fluid p-0">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('usertem/js/scripts.js')}}"></script>
</body>

</html>