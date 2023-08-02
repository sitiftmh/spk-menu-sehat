<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\BobotKriteria;
//use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::all();
        $kriteria = Kriteria::with('bobotkriteria')->paginate();
        return view('kriteria.index', compact(['kriteria']));
    }

    public function create()
    {
        $bk = BobotKriteria::all();
        return view('kriteria.create', compact('bk'));
    }

    public function store(Request $request)
    {
        //dd($request->except([]'_token','submit']));
        Kriteria::create($request->except('_token', 'submit'));
        return redirect('/kriteria');
    }

    public function edit($id)
    {
        $kriteria = Kriteria::find($id);
        $bk = BobotKriteria::all();
        return view('kriteria.edit', compact(['kriteria','bk']));
    }

    public function update($id, Request $request)
    {
        $kriteria = Kriteria::find($id);
        $kriteria->update($request->except(['_token', 'submit']));
        return redirect('/kriteria');
    }

    public function destroy($id)
    {
        $kriteria = Kriteria::find($id);
        $kriteria->delete();
        return redirect(('/kriteria'));
    }

    //public function boot()
    //{
    //    $id = IdGenerator::generate(['table' => 'kriteria', 'field'=> 'id', 'length' => 5, 'prefix' => 'C']);
    //    return view('kriteria', compact(['id']));
    //}   
}