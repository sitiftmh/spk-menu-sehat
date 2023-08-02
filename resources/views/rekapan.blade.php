@extends('layout.mastercode')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"><br><br>
                <h2 class="m-0">REKAPITULASI HASIL REKOMENDASI</h2><br>
            </div><!-- /.col -->
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <form action="/rekapan/print" method="GET">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tanggal</label><br><br>
                                <input class="form-control" type="date" name="tanggal" value="{{ date('Y-m-d') }}" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <div class="card-footer">
                                    <button type="submit" name="submit" class="btn btn-success btn-sm float-right">CETAK</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection