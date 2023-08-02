@extends('layout.mastercode_user')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <br><br>
                    <h2 class="m-0">HASIL REKOMENDASI MENU SEHAT ANDA</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="card-body table-responsive p-0" style="height: 550px;">
                                <form action="/jawaban/proses2" method="GET">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Kategori Yang Di Pilih</label><br>
                                            <input class="form-control" type="text" name="id_kategorimenu"
                                                value="{{ request()->get('id_kategorimenu') }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Range Karbohidrat</label>
                                            <input class="form-control" type="text" name="karbohidrat"
                                                value="{{ request()->get('karbohidrat') }}" readonly>
                                        </div>
                                        <div class="form-Gula">
                                            <label>Range Gula</label>
                                            <input class="form-control" type="text" name="gula"
                                                value="{{ request()->get('gula') }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Range Lemak</label>
                                            <input class="form-control" type="text" name="lemak"
                                                value="{{ request()->get('lemak') }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Range Protein</label>
                                            <input class="form-control" type="text" name="protein"
                                                value="{{ request()->get('protein') }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Range Kalori</label>
                                            <input class="form-control" type="text" name="kalori"
                                                value="{{ request()->get('kalori') }}" readonly>
                                        </div>
                                        @php
                                            $nilaiIdKriteria = $nilaiDataks = [];
                                            $dataInsert = [];
                                            $dataInsert['id_kategorimenu'] = request()->get('id_kategorimenu');
                                            $dataInsert['karbohidrat'] = request()->get('karbohidrat');
                                            $dataInsert['gula'] = request()->get('gula');
                                            $dataInsert['lemak'] = request()->get('lemak');
                                            $dataInsert['protein'] = request()->get('protein');
                                            $dataInsert['kalori'] = request()->get('kalori');
                                            $bmr = floatval(request()->get('bmr'));
                                        @endphp
                                        @foreach ($nilai_karbohidrat as $e => $ju)
                                            @php
                                                $n1[] = $ju->id_nilaikriteria;
                                                $nilaiIdKriteria[] = $ju->id_nilaikriteria;
                                            @endphp
                                            <input class="form-control" type="hidden" name="nilai_karbohidrat"
                                                value="{{ $ju->id_nilaikriteria }}" readonly>
                                        @endforeach
                                        @foreach ($nilai_gula as $e => $ju)
                                            @php
                                                $n2[] = $ju->id_nilaikriteria;
                                                $nilaiIdKriteria[] = $ju->id_nilaikriteria;
                                            @endphp
                                            <input class="form-control" type="hidden" name="nilai_gula"
                                                value="{{ $ju->id_nilaikriteria }}" readonly>
                                        @endforeach
                                        @foreach ($nilai_lemak as $e => $ju)
                                            @php
                                                $n3[] = $ju->id_nilaikriteria;
                                                $nilaiIdKriteria[] = $ju->id_nilaikriteria;
                                            @endphp
                                            <input class="form-control" type="hidden" name="nilai_lemak"
                                                value="{{ $ju->id_nilaikriteria }}" readonly>
                                        @endforeach
                                        @foreach ($nilai_protein as $e => $ju)
                                            @php
                                                $n4[] = $ju->id_nilaikriteria;
                                                $nilaiIdKriteria[] = $ju->id_nilaikriteria;
                                            @endphp
                                            <input class="form-control" type="hidden" name="nilai_protein"
                                                value="{{ $ju->id_nilaikriteria }}" readonly>
                                        @endforeach
                                        @foreach ($nilai_kalori as $e => $ju)
                                            @php
                                                $n5[] = $ju->id_nilaikriteria;
                                                $nilaiIdKriteria[] = $ju->id_nilaikriteria;
                                            @endphp
                                            <input class="form-control" type="hidden" name="nilai_kalori"
                                                value="{{ $ju->id_nilaikriteria }}" readonly>
                                        @endforeach
                                        @php
                                            $menuTampung = [];
                                            $menuRekomendasi = [];
                                            $totalRekomendasiCal = 0;
                                        @endphp
                                        @php
                                            $dataInsert['id_nilaikriteria'] = json_encode($nilaiIdKriteria);
                                        @endphp
                                        @foreach ($menu as $index => $m)
                                            @php
                                                if (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->karbohidrat)) < '2.13') {
                                                    $k1 = 1;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->karbohidrat)) < '11.04') {
                                                    $k1 = 2;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->karbohidrat)) == '40.03') {
                                                    $k1 = 3;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->karbohidrat)) > '40.03') {
                                                    $k1 = 4;
                                                } else {
                                                    $k1 = 1;
                                                }
                                            @endphp
                                            @php
                                                if (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->gula)) < '00.36') {
                                                    $k2 = 1;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->gula)) < '1.01') {
                                                    $k2 = 2;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->gula)) == '6.01') {
                                                    $k2 = 3;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->gula)) > '6.01') {
                                                    $k2 = 4;
                                                } else {
                                                    $k2 = 1;
                                                }
                                            @endphp
                                            @php
                                                if (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->lemak)) < '00.36') {
                                                    $k3 = 1;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->lemak)) < '2.72') {
                                                    $k3 = 2;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->lemak)) < '9.34') {
                                                    $k3 = 3;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->lemak)) > '9.34') {
                                                    $k3 = 4;
                                                } else {
                                                    $k3 = 1;
                                                }
                                            @endphp
                                            @php
                                                if (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->protein)) < '1.39') {
                                                    $k4 = 4;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->protein)) < '3.55') {
                                                    $k4 = 3;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->protein)) < '8.01') {
                                                    $k4 = 2;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->protein)) > '8.01') {
                                                    $k4 = 1;
                                                } else {
                                                    $k4 = 1;
                                                }
                                            @endphp
                                            @php
                                                if (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->kalori)) < '51') {
                                                    $k5 = 1;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->kalori)) < '119') {
                                                    $k5 = 2;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->kalori)) < '231') {
                                                    $k5 = 3;
                                                } elseif (str_replace(',', '.', preg_replace('/[^0-9.,]/', '', $m->kalori)) > '231') {
                                                    $k5 = 4;
                                                } else {
                                                    $k5 = 1;
                                                }
                                            @endphp
                                            @php
                                                $k_ambil[] = $k1 + $k2 + $k3 + $k4 + $k5;
                                                $menuTampung[$index] = $m;
                                                $totalRekomendasiCal += floatval($m->kalori);
                                                if ($totalRekomendasiCal < $bmr) {
                                                    $menuRekomendasi[$index] = $m;
                                                }
                                            @endphp
                                        @endforeach
                                        @php $n = $n1[0]+$n2[0]+$n3[0]+$n4[0]+$n5[0]; @endphp
                                        <p class="mt-3">Dengan menggunakan rumus Body Mass Index
                                            (BMI), telah dihitung dan dievaluasi hasil berat badan dan tinggi badan
                                            Anda. Hasil perhitungan menunjukkan bahwa Anda berada dalam kategori
                                            <b>{{$bmi_category}}</b> dengan nilai <b>{{$bmi}}</b>. Meskipun
                                            BMI dapat memberikan gambaran kasar tentang status berat badan, disarankan
                                            untuk berkonsultasi dengan profesional medis untuk penilaian kesehatan lebih
                                            mendalam dan rekomendasi yang sesuai. Jaga keseimbangan antara pola makan
                                            sehat dan aktivitas fisik untuk mendukung kesejahteraan dan kesehatan Anda
                                            secara keseluruhan.</p>
                                        @php
                                            $num = $n;
                                            $totalCal = 0;

                                            $k_ambil = $k_ambil;
                                            $smallest = [];

                                            foreach ($k_ambil as $i) {
                                                $smallest[$i] = abs($i - $num);
                                            }
                                            asort($smallest);
                                            $keyss = key($smallest);

                                            $dataaa = [];
                                            foreach ($k_ambil as $kk => $vv) {
                                                if ($vv == $keyss) {
                                                    $dataaa[] = $kk + 1;
                                                }
                                            }

                                            $dataks = [];
                                            foreach ($dataaa as $keysss => $valuesss) {
                                                foreach ($menuTampung as $kk => $vvv) {
                                                    if ($kk + 1 == $valuesss) {
                                                        $totalCal += floatval($vvv['kalori']);
                                                        $dataks[] = $vvv;
                                                    }
                                                }
                                            }

                                            if ($bmr < $totalCal) {
                                                $dataks = [];
                                                foreach ($menuRekomendasi as $kk => $vvv) {
                                                    $dataks[] = $vvv;
                                                }
                                            }

                                            echo '<hr>';
                                            //print key($smallest);
                                            if ($bmr < $totalCal) {
                                                echo '<h4 class="text-danger">Strategi Menu Kurang Cocok Untuk Anda</h4>';
                                            }
                                            echo "Hasil Rekomendasi Dari Kami Dengan Total Kebutuhan Kalori Harian ${bmr} Adalah : <br><table class='table table-bordered table-head-fixed text-nowrap' style='width: 100%;'><tr>
										<td><b>Menu Rekomendasi</b></td>
										<td><b>Karbohidrat</b></td>
										<td><b>Gula</b></td>
										<td><b>Lemak</b></td>
										<td><b>Protein</b></td>
										<td><b>Kalori</b></td>
									</tr>";
                                            foreach ($dataks as $keys => $values) {
                                                $nilaiDataks[] = [
                                                    'daftar_menu' => $values['daftar_menu'],
                                                    'karbohidrat' => $values['karbohidrat'],
                                                    'gula' => $values['gula'],
                                                    'lemak' => $values['lemak'],
                                                    'protein' => $values['protein'],
                                                    'kalori' => $values['kalori'],
                                                ];
                                                echo '<tr>';
                                                echo '<td>' . $values['daftar_menu'] . '</td>';
                                                echo '<td>' . $values['karbohidrat'] . ' gr</td>';
                                                echo '<td>' . $values['gula'] . ' gr</td>';
                                                echo '<td>' . $values['lemak'] . ' gr</td>';
                                                echo '<td>' . $values['protein'] . ' gr</td>';
                                                echo '<td>' . $values['kalori'] . ' kkal</td>';
                                                echo '</tr>';
                                                DB::table('jawaban')->insert([
                                                    'daftar_menu' => $values['daftar_menu'],
                                                    'karbohidrat' => $values['karbohidrat'],
                                                    'gula' => $values['gula'],
                                                    'lemak' => $values['lemak'],
                                                    'protein' => $values['protein'],
                                                    'kalori' => $values['kalori'],
                                                    'id_kategorimenu' => request()->get('id_kategorimenu'),
                                                    'tanggal' => date('Y-m-d'),
                                                    'bmr' => $bmr,
                                                ]);
                                            }
                                            DB::table('transaksi')->insert([
                                            'kategori_menu' => request()->get('id_kategorimenu'),
                                            'bmr' => $bmr,
                                            'range_karbohidrat' => request()->get('karbohidrat'),
                                            'range_gula' => request()->get('gula'),
                                            'range_lemak' => request()->get('lemak'),
                                            'range_protein' => request()->get('protein'),
                                            'range_kalori' => request()->get('kalori'),
                                            'created_at' => date('Y-m-d'),
                                            ]);
                                            echo '</table>';
                                        @endphp


                                        <div class="form-group">
                                            <div class="card-footer">
                                                <br><a href="/" class="btn btn-danger btn-sm float-right"
                                                    style="width: 100%;"> Kembali Ke Menu Awal
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
