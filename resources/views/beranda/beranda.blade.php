@extends('layout.mastercode')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-1">
      <p>
      <p>
      <br><br><h1 class="mb-0">SPK <span class="text-primary">MENU SEHAT</span></h1>
      <h2>KANTIN UNIVERSITAS MUHAMMADIYAH BANJARMASIN</h2>
      </p>
      </p>
    </div>
  </div>
</div>

@if (session()->has('email'))

<div class="container-fluid">
  <div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Jumlah Daftar Menu</div>
              <div class="h4 mb-0 font-weight-bold text-gray-800">40 Menu</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
            <center><a href="/menu" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a></center>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Kriteria & Nilai Crips</div>
              <div class="h4 mb-0 font-weight-bold text-gray-800">5 Kriteria</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-tasks fa-2x text-gray-300"></i>
            </div>
            <center><a href="/nilaicrips" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a></center>
          </div>
        </div>
      </div>
    </div>


    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                Rekapitulasi Hasil Rekomendasi</div>
              <div class="h4 mb-0 font-weight-bold text-gray-800">Download Laporan PDF</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-file-text fa-2x text-gray-300"></i>
            </div>
            <center><a href="/rekapan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a></center>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-13 mb-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-secondary">Hello Admin</h6>
        </div>
        <div class="card-body"><br>
          <p>Selamat datang di Sistem Pendukung Keputusan Rekomendasi Menu Sehat di Kantin Universitas Muhammadiyah Banjarmasin ...</p><br>
        </div>
      </div>

      @else
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <p>
                  <h2>Daftar Menu</h2>
                  </p><br>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                  <i class='fas fa-clipboard'></i>
                </div>
                <a href="/menuuser" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-6 col-6">
              <div class="small-box bg-success">
                <div class="inner">
                  <p>
                  <h2>Kriteria</h2>
                  </p><br>
                </div>
                <div class="icon">
                  <i class='fas fa-tasks'></i>
                </div>
                <a href="/jawaban" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      @endif
      @endsection