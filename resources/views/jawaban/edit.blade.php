@extends('layout.mastercode')
@section('content')

<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">PILIH KRITERIA SEHAT ANDA</h1>
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
                    <form action="/jawaban/{{$jawaban->id}}" method="POST">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Kategori Menu</label>
                                    <select class="form-control select2" name="id_kategorimenu" id="id_kategorimenu">
                                        <option selected="selected">kategori menu</option>
                                        @foreach ($km as $e=>$ju)
                                        <option value="{{$ju->kategori_menu}}">{{$ju->kategori_menu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama Kriteria</label>
                                    <select class="form-control select2" name="id_kriteria" id="id_kriteria">
                                        <option selected="selected">nama kriteria</option>
                                        @foreach ($k as $e=>$ju)
                                        <option value="{{$ju->nama_kriteria}}">{{$ju->nama_kriteria}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nilai</label>
                                    <select class="form-control select2" name="id_nilaicrips" id="id_nilaicrips">
                                        <option selected="selected">nilai</option>
                                        @foreach ($nc as $e=>$ju)
                                        <option value="{{$ju->nilai_crips}}">{{$ju->nilai_crips}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" name="submit" class="btn btn-success btn-sm float-right">SAVE</button>
                                        <a href="/user-data">
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
</section>

@endsection