@extends('layout.mastercode')
@section('content')

@php
$krit1 = ''; // buat variabel untuk penanda
@endphp
<!-- 
    Teknik pemisahan antar kategori:
    1. data harus di sorting dulu
    2. buat variabel kriteria penanda, misal $krit1
    3. check apakah $krit1 != (tidak sama dengan) data kriteria pada saat looping 
    4. kalau tidak sama update variabel $krit1 dan tempatkan pada header atau tabel lainnya

    Kalau mau tampilan pertable untuk kriteria, bisa loop dengan membuat tabelk header yang
    diulang.
-->

<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"><br><br>
                <h2 class="m-0">DATA CRIPS KRITERIA</h2><br>
            </div><!-- /.col -->
            <div class="col-sm-6">
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <a class="btn btn-info glyphicon glyphicon-edit" href="/nilaicrips/create">TAMBAH DATA CRIPS</a><br><br>
                        <div class="card-body table-responsive p-0" style="height: 470px;">
                            <table class="table table-bordered table-head-fixed text-nowrap ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nilai Crips</th>
                                        <th>Nilai Kriteria</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>

                                @foreach($nilaicrips as $index => $nc)
                                @if($krit1 != $nc->id_kriteria)
                                @php
                                $krit1 = $nc->id_kriteria;
                                @endphp

                                <tr>
                                    <td colspan="5"><strong> {{$nc->id_kriteria}} </strong></td>
                                <tr>
                                    @endif
                                <tr>
                                    <td>{{$index + $nilaicrips->firstitem()}}</td>
                                    <td>{{$nc->nilai_crips}}</td>
                                    <td>{{$nc->id_nilaikriteria}}</td>
                                    <td>
                                        <a href="/nilaicrips/{{$nc->id}}/edit"><button class="btn btn-edit fas fa-edit" style="background-color:grey"></button></a>
                                        <form action="/nilaicrips/{{$nc->id}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button href="/nilaicrips" type="submit" value="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            <div class="card-footer">
                                {{ $nilaicrips->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection