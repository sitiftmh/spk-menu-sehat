@extends('layout.mastercode')
@section('content')

<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6"><br><br><br>
                <h2 class="m-0">EDIT NILAI KRITERIA MENU SEHAT</h2><br>
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
                    <form action="/nilaikriteria/{{$nilaikriteria->id}}" method="POST">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nilai Kriteria</label><br>
                                <input type="text" name="nilai_kriteria" class="form-control" placeholder=" " value="{{$nilaikriteria->nilai_kriteria}}">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-success btn-sm float-right">SAVE</button>
                                <a href="/user-data">
                                </a>
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