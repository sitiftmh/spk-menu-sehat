@extends('layout.mastercode')
@section('content')

<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"><br><br>
                <h2 class="m-0">DAFTAR MENU</h2><br>
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
                        <a class="btn btn-info glyphicon glyphicon-edit" href="/menu/create">TAMBAH DATA MENU</a><br><br>
                        <div class="card-body table-responsive p-0" style="height: 467px;">
                            <table class="table table-bordered table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Menu</th>
                                        <th>Nama Menu</th>
                                        <th>Karbohidrat</th>
                                        <th>Gula</th>
                                        <th>Lemak</th>
                                        <th>Protein</th>
                                        <th>Kalori</th>
                                        <th>Kategori</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                @foreach($menu as $index => $m)
                                <tr>
                                    <td>{{$index + $menu->firstitem()}}</td>
                                    <td>{{$m->kode_menu}}</td>
                                    <td>{{$m->daftar_menu}}</td>
                                    <td>{{$m->karbohidrat}} gr</td>
                                    <td>{{$m->gula}} gr</td>
                                    <td>{{$m->lemak}} gr</td>
                                    <td>{{$m->protein}} gr</td>
                                    <td>{{$m->kalori}} Kkal</td>
                                    <td>{{$m->id_kategorimenu}}</td>
                                    <td>
                                        <a href="/menu/{{$m->id}}/edit"><button class="btn btn-edit fas fa-edit" style="background-color:grey"></button></a>
                                        <form action="/menu/{{$m->id}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button href="/menu" type="submit" value="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </form>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            <div class="card-footer">
                                {{ $menu->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection