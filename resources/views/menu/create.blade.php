@extends('layout.mastercode')
@section('content')

<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-0">
            <div class="col-sm-5"><br>
                <h2 class="m-0">INPUT DAFTAR MENU</h2>
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
            <div class="col-md-15">
                <!-- general form elements -->
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <form action="/menu/store" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Kode Menu</label><br>
                                <input class="form-control" type="text" name="kode_menu" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Nama Menu</label><br>
                                <input class="form-control" type="text" name="daftar_menu" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Karbohidrat</label><br>
                                <input class="form-control" type="text" name="karbohidrat" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Gula</label><br>
                                <input class="form-control" type="text" name="gula" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Lemak</label><br>
                                <input class="form-control" type="text" name="lemak" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Protein</label><br>
                                <input class="form-control" type="text" name="protein" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Kalori</label><br>
                                <input class="form-control" type="text" name="kalori" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control select2" name="id_kategorimenu" id="id_kategorimenu">
                                    <option selected="selected">kategori menu</option>
                                    @foreach ($km as $e=>$m)
                                    <option value="{{$m->kategori_menu}}">{{$m->kategori_menu}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-15">
                            <div class="form-group">
                                <div class="form-group">
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" name="submit" class="btn btn-success btn-sm float-right">SAVE</button>
                                        <a href="/user-data">
                                        </a>
                                    </div>
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