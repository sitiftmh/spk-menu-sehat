@extends('layout.mastercode')
@section('content')

<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"><br><br>
                <h2 class="m-0">KRITERIA MENU SEHAT</h2><br>
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
                        <a class="btn btn-info glyphicon-edit" href="/kriteria/create">TAMBAH DATA KRITERIA</a><br><br>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Kode Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Bobot Kriteria</th>
                                <th>Tipe Kriteria</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach($kriteria as $e=>$k)
                            <tr>
                                <td>{{$e+1}}</td>
                                <td>{{$k->kode_kriteria}}</td>
                                <td>{{$k->nama_kriteria}}</td>
                                <td>{{$k->id_bobotkriteria}}</td>
                                <td>{{$k->tipe_kriteria}}</td>
                                <td>
                                    <a href="/kriteria/{{$k->id}}/edit"><button class="btn btn-edit fas fa-edit" style="background-color:grey"></button></a>
                                    <form action="/kriteria/{{$k->id}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button href="/kriteria" type="submit" value="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection