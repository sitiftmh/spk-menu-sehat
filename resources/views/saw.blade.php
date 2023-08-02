@extends('layout.mastercode')
@section('content')

<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"><br><br>
                <h2 class="m-0">PERHITUNGAN SAW</h2><br>
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
                <div class="card card-primary mb-4">
                    <div class="card-body">
                        <h4 class="m-0">Riwayat Perhitungan SAW dan BMR</h4><br>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Kategori Menu</th>
                                <th>BMR</th>
                                <th>Range Karbohidrat</th>
                                <th>Range Gula</th>
                                <th>Range Lemak</th>
                                <th>Range Protein</th>
                                <th>Range Kalori</th>
                            </tr>
                            @foreach($transaksi as $e=>$t)
                                <tr>
                                    <td>{{$e+1}}</td>
                                    <td>{{$t->kategori_menu}}</td>
                                    <td>{{$t->bmr}}</td>
                                    <td>{{$t->range_karbohidrat}}</td>
                                    <td>{{$t->range_gula}}</td>
                                    <td>{{$t->range_lemak}}</td>
                                    <td>{{$t->range_protein}}</td>
                                    <td>{{$t->range_kalori}}</td>
                                </tr>
                                {{--                                @php $bobot_ambil[] = $k->id_bobotkriteria; @endphp--}}
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <h4 class="m-0">Kriteria Menu Sehat</h4><br>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Kode Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Bobot Kriteria</th>
                                <th>Tipe Kriteria</th>
                            </tr>
                            @foreach($kriteria as $e=>$k)
                            <tr>
                                <td>{{$e+1}}</td>
                                <td>{{$k->kode_kriteria}}</td>
                                <td>{{$k->nama_kriteria}}</td>
                                <td>{{$k->id_bobotkriteria}}</td>
                                <td>{{$k->tipe_kriteria}}</td>
                            </tr>
                            @php $bobot_ambil[] = $k->id_bobotkriteria; @endphp
                            @endforeach
                        </table>
                    </div>
                </div>

                <!--mengonversi ke angka-->
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <h4 class="m-0">Penentuan Nilai</h4><br>
                        <table class="table table-bordered table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Alternatif</th>
                                    <th>Alternatif</th>
                                    <th>Karbohidrat</th>
                                    <th>Gula</th>
                                    <th>Lemak</th>
                                    <th>Protein</th>
                                    <th>Kalori</th>
                                    <th>Kategori</th>
                                </tr>
                            </thead>
                            @php
                            $k1_ambil =[];
                            $k2_ambil =[];
                            $k3_ambil =[];
                            $k4_ambil =[];
                            $k5_ambil =[];
                            @endphp
                            @foreach($menu as $index => $m)
                            <tr>
                                <td>{{$index + $menu->firstitem()}}</td>
                                <td>{{$m->kode_menu}}</td>
                                <td>{{$m->daftar_menu}}</td>
                                <td align="center">
                                    @php
                                    $k1 = str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->karbohidrat));
                                    @endphp
                                    {{$k1}}
                                </td>
                                <td align="center">
                                    @php
                                    $k2 = str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->gula));
                                    @endphp
                                    {{$k2}}
                                </td>
                                <td align="center">
                                    @php
                                    $k3 = str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->lemak));
                                    @endphp
                                    {{$k3}}
                                </td>
                                <td align="center">
                                    @php
                                    $k4 = str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->protein));
                                    @endphp
                                    {{$k4}}
                                </td>
                                <td align="center">
                                    @php
                                    $k5 = str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->kalori));
                                    @endphp
                                    {{$k5}}
                                </td>
                                <td>{{$m->id_kategorimenu}}</td>
                            </tr>
                            <!-- -->
                            @php $k1_ambil[] = $k1; @endphp
                            @php $k2_ambil[] = $k2; @endphp
                            @php $k3_ambil[] = $k3; @endphp
                            @php $k4_ambil[] = $k4; @endphp
                            @php $k5_ambil[] = $k5; @endphp
                            @endforeach
                            @php $k1_max = max($k1_ambil); @endphp
                            @php $k2_max = max($k2_ambil); @endphp
                            @php $k3_max = max($k3_ambil); @endphp
                            @php $k4_max = max($k4_ambil); @endphp
                            @php $k5_max = max($k5_ambil); @endphp
                            <tr>
                                <td colspan="3" align="center"><strong>Keterangan</strong></td>
                                <td align="center"><strong>{{max($k1_ambil)}}</strong></td>
                                <td align="center"><strong>{{max($k2_ambil)}}</strong></td>
                                <td align="center"><strong>{{max($k3_ambil)}}</strong></td>
                                <td align="center"><strong>{{max($k4_ambil)}}</strong></td>
                                <td align="center"><strong>{{max($k5_ambil)}}</strong></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!--normalisasi-->
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <h4 class="m-0">Penentuan Normalisasi</h4><br>
                        <table class="table table-bordered table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Alternatif</th>
                                    <th>Alternatif</th>
                                    <th>Karbohidrat</th>
                                    <th>Gula</th>
                                    <th>Lemak</th>
                                    <th>Protein</th>
                                    <th>Kalori</th>
                                    <th>Kategori</th>
                                </tr>
                            </thead>
                            @php
                            $k1_normalisasi =[];
                            $k2_normalisasi =[];
                            $k3_normalisasi =[];
                            $k4_normalisasi =[];
                            $k5_normalisasi =[];
                            @endphp
                            @foreach($menu as $index => $m)
                            <tr>
                                <td>{{$index + $menu->firstitem()}}</td>
                                <td>{{$m->kode_menu}}</td>
                                <td>{{$m->daftar_menu}}</td>
                                <td align="center">
                                    @php
                                    $k1 = str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->karbohidrat));
                                    @endphp
                                    {{number_format($k1/$k1_max,2)}}
                                </td>
                                <td align="center">
                                    @php
                                    $k2 = str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->gula));
                                    @endphp
                                    {{number_format($k2/$k2_max,2)}}
                                </td>
                                <td align="center">
                                    @php
                                    $k3 = str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->lemak));
                                    @endphp
                                    {{number_format($k3/$k3_max,2)}}
                                </td>
                                <td align="center">
                                    @php
                                    $k4 = str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->protein));
                                    @endphp
                                    {{number_format($k4/$k4_max,2)}}
                                </td>
                                <td align="center">
                                    @php
                                    $k5 = str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->kalori));
                                    @endphp
                                    {{number_format($k5/$k5_max,2)}}
                                </td>
                                <td>{{$m->id_kategorimenu}}</td>
                            </tr>
                            @php $k1_normalisasi[] = number_format($k1/$k1_max,2); @endphp
                            @php $k2_normalisasi[] = number_format($k2/$k2_max,2); @endphp
                            @php $k3_normalisasi[] = number_format($k3/$k3_max,2); @endphp
                            @php $k4_normalisasi[] = number_format($k4/$k4_max,2); @endphp
                            @php $k5_normalisasi[] = number_format($k5/$k5_max,2); @endphp
                            @endforeach
                        </table>
                    </div>
                </div>

                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <h4 class="m-0">Hasil Perhitungan</h4><br>
                        <table class="table table-bordered table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Kode Alternatif</th>
                                    <th>Alternatif</th>
                                    <th>Hasil</th>
                                </tr>
                            </thead>
                            @php
                            $no = 0;
                            DB::table('rank')->truncate();
                            @endphp
                            @foreach($menu as $index => $m)
                            @php
                            DB::table('rank')->insert([
                            'id_menu'=>$m->id,
                            'rank'=>($k1_normalisasi[$no]*$bobot_ambil[0])+($k2_normalisasi[$no]*$bobot_ambil[1])+($k3_normalisasi[$no]*$bobot_ambil[2])+($k4_normalisasi[$no]*$bobot_ambil[3])+($k5_normalisasi[$no]*$bobot_ambil[4])
                            ]);
                            $no++;
                            @endphp
                            @endforeach
                            @foreach($rank as $index => $m)
                            <tr>
                                <td>{{$index + $menu->firstitem()}}</td>
                                <td>{{$m->kode_menu}}</td>
                                <td>{{$m->daftar_menu}}</td>
                                <td>{{$m->rank}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>


            </div>
        </div>
</section>

@endsection
