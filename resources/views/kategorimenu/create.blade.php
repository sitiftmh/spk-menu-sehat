@extends('layout.mastercode')
@section('content')

<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-5"><br><br><br>
                <h2 class="m-0">INPUT KATEGORI MENU</h2><br>
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
                    <form action="/kategorimenu/store" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Kategori Menu</label><br><br>
                                <input class="form-control" type="text" name="kategori_menu" placeholder=" ">
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