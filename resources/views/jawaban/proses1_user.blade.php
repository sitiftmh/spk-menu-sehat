@extends('layout.mastercode_user')
@section('content')
    @php
        $jawab1 = ''; // buat variabel untuk penanda
    @endphp

    <!--user milih kriteria-->
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <br><br>
                    <h2 class="m-0">PILIH KRITERIA SEHAT ANDA</h2>
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
                            <div class="card-body table-responsive p-0" style="height: 550px;">
                                <form action="/jawaban/proses2" method="GET">
                                    @csrf
                                    <div class="card-body">
                                        <input type="hidden" name="bmr" value="{{ $bmr }}">
                                        <input type="hidden" id="bmi" name="bmi" value="{{$bmi}}">
                                        <input type="hidden" id="bmi_category" name="bmi_category" value="{{$bmi_category}}">
                                        <div class="form-group">
                                            <label>Kategori Yang Di Pilih</label><br>
                                            <input class="form-control" type="text" name="id_kategorimenu"
                                                value="{{ request()->get('id_kategorimenu') }}" readonly>
                                        </div><br>
                                        <div class="form-group">
                                            <label>Range Karbohidrat</label>
                                            <select class="form-control select2" name="karbohidrat" id="karbohidrat">
                                                <option selected="selected">Pilih Range Karbohidrat</option>
                                                @foreach ($karbohidrat as $e => $ju)
                                                    <option value="{{ $ju->nilai_crips }}">{{ $ju->nilai_crips }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Range Gula</label>
                                            <select class="form-control select2" name="gula" id="gula">
                                                <option selected="selected">Pilih Range Gula</option>
                                                @foreach ($gula as $e => $ju)
                                                    <option value="{{ $ju->nilai_crips }}">{{ $ju->nilai_crips }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Range Lemak</label>
                                            <select class="form-control select2" name="lemak" id="lemak">
                                                <option selected="selected">Pilih Range Lemak</option>
                                                @foreach ($lemak as $e => $ju)
                                                    <option value="{{ $ju->nilai_crips }}">{{ $ju->nilai_crips }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Range Protein</label>
                                            <select class="form-control select2" name="protein" id="protein">
                                                <option selected="selected">Pilih Range Protein</option>
                                                @foreach ($protein as $e => $ju)
                                                    <option value="{{ $ju->nilai_crips }}">{{ $ju->nilai_crips }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Range Kalori</label>
                                            <select class="form-control select2" name="kalori" id="kalori">
                                                <option selected="selected">Pilih Range Kalori</option>
                                                @foreach ($kalori as $e => $ju)
                                                    <option value="{{ $ju->nilai_crips }}">{{ $ju->nilai_crips }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <!-- /.card-body -->
                                            <div class="card-footer">
                                                <br><button type="submit" name="submit"
                                                    class="btn btn-success btn-sm float-right"
                                                    style="width: 100%;">TAMPILKAN HASIL REKOMENDASI</button>
                                                <a href="/user-data">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
