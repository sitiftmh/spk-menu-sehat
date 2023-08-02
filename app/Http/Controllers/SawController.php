<?php

namespace App\Http\Controllers;

use App\Models\KategoriMenu;
use App\Models\Rank;
use App\Models\Kriteria;
use App\Models\Menu;
use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PDF;

class SawController extends Controller
{
    public function index(){
        $menu = Menu::all();
        $menu = Menu::with('kategorimenu')->paginate();
        $kriteria = Kriteria::all();
        $kriteria = Kriteria::with('bobotkriteria')->paginate();
        $transaksi = Transaksi::all();
        // $rank = Rank::all();
        // $rank = Rank::with('menu')->paginate();
        $rank = DB::table('rank')
        ->join('menu', 'menu.id', '=', 'rank.id_menu')
        ->orderBy('rank', 'desc')
        ->get();
        // return view('menu.index', compact(['menu']));
        return view('saw')->with('menu', $menu)->with('kriteria', $kriteria)->with('rank', $rank)->with('transaksi', $transaksi);

    }

    public function rekapan() {
        return view('rekapan');
    }

    public function print(Request $request) {
        $arr = [];

        $data = DB::table("jawaban")
        ->selectRaw("*")
        ->where("tanggal", "=", $request->tanggal)
        ->get();

        foreach ($data as $keys => $values) {
            $values = (array) $values;
            // $values['id_nilaikriteria'] = json_decode($values['id_nilaikriteria']);
            // $values['dataks'] = json_decode($values['dataks']);

            $arr[] = $values;
        }

        $pdf = FacadePdf::loadview('rekapan_pdf', ['data' => $arr]);
    	return $pdf->download('laporan-rekapan-rekomendasi.pdf');
    }
}
