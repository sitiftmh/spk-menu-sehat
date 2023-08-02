@extends('layout.mastercode')
@section('content')

<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-5"><br><br><br>
                <h2 class="m-0">EDIT DATA CRIPS KRITERIA</h2><br>
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
                    <form action="/nilaicrips/{{$nilaicrips->id}}" method="POST">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Kriteria</label>
                                <select class="form-control select2" name="id_kriteria" id="id_kriteria">
                                    <option selected="selected">nama kriteria</option>
                                    @foreach ($k as $e=>$nc)
                                    <option value="{{$nc->nama_kriteria}}">{{$nc->nama_kriteria}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nilai Crips</label><br>
                                <input type="text" name="nilai_crips" class="form-control" placeholder=" " value="{{$nilaicrips->nilai_crips}}">
                            </div>
                            <div class="form-group">
                                <label>Nilai Kriteria</label>
                                <select class="form-control select2" name="id_nilaikriteria" id="id_nilaikriteria">
                                    <option selected="selected">nilai kriteria</option>
                                    @foreach ($nk as $e=>$nc)
                                    <option value="{{$nc->nilai_kriteria}}">{{$nc->nilai_kriteria}}</option>
                                    @endforeach
                                </select>
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