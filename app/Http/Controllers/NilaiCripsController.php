<?php

namespace App\Http\Controllers;

use App\Models\NilaiCrips;
use App\Models\Kriteria;
use App\Models\NilaiKriteria;
use Illuminate\Http\Request;

class NilaiCripsController extends Controller
{
    public function index()
    {
        // $nilaicrips = NilaiCrips::all();
        // misal filter berdasarkan "rasa"
        // $nilaicrips = NilaiCrips::where('id_kriteria', 'rasa')->get();
        // echo ($nilaicrips);
        // $nilaicrips = NilaiCrips::with('kriteria', 'nilaikriteria')->paginate(10);
        $nilaicrips = NilaiCrips::with('kriteria', 'nilaikriteria')->orderby('id_kriteria')
            ->paginate(10);
        return view('nilaicrips.index', compact(['nilaicrips']));
    }

    public function test()
    {
        // contoh loop
        $kriteriaSet = Kriteria::all();
        foreach ($kriteriaSet as $k1) {
            echo "<h1>", $k1->nama_kriteria, "</h1>";
            $nilaicrips = NilaiCrips::where('id_kriteria', $k1->nama_kriteria)->get();
            foreach ($nilaicrips as $n1) {
                echo ($n1->nilai_crips);
                echo "<br />";
            }
        }
        return view('nilaicrips.test', compact(['kriteriaSet']));
    }

    public function create()
    {
        $k = Kriteria::all();
        $nk = NilaiKriteria::all();
        return view('nilaicrips.create', compact('k', 'nk'));
    }

    public function store(Request $request)
    {
        //dd($request->except([]'_token','submit']));
        NilaiCrips::create($request->except('_token', 'submit'));
        return redirect('/nilaicrips');
    }

    public function edit($id)
    {
        $nilaicrips = NilaiCrips::find($id);
        $k = Kriteria::all();
        $nk = NilaiKriteria::all();
        return view('nilaicrips.edit', compact(['nilaicrips', 'k', 'nk']));
    }

    public function update($id, Request $request)
    {
        $nilaicrips = NilaiCrips::find($id);
        $nilaicrips->update($request->except(['_token', 'submit']));
        return redirect('/nilaicrips');
    }

    public function destroy($id)
    {
        $nilaicrips = NilaiCrips::find($id);
        $nilaicrips->delete();
        return redirect(('/nilaicrips'));
    }

    public function view()
    {
        $nilaicrips = NilaiCrips::all();
        return view('user.menuuser', compact((['nilaicrips'])));
    }
}
