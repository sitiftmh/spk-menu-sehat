@extends('layout.mastercode')
@section('content')

<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-5"><br><br><br>
                <h2 class="m-0">INPUT KRITERIA MENU SEHAT</h2><br>
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
                    <form action="/kriteria/store" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Kode Kriteria</label><br>
                                <input class="form-control" type="text" name="kode_kriteria" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Nama Kriteria</label><br>
                                <input class="form-control" type="text" name="nama_kriteria" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Bobot Kriteria</label>
                                <select class="form-control select2" name="id_bobotkriteria" id="id_bobotkriteria">
                                    <option selected="selected">bobot kriteria</option>
                                    @foreach ($bk as $e=>$k)
                                    <option value="{{$k->bobot_kriteria}}">{{$k->bobot_kriteria}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tipe Kriteria</label><br>
                                <input class="form-control" type="text" name="tipe_kriteria" placeholder=" ">
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