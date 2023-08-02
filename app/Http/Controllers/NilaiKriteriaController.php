<?php

namespace App\Http\Controllers;

use App\Models\NilaiKriteria;
use Illuminate\Http\Request;

class NilaiKriteriaController extends Controller
{
    public function index()
    {
        $nilaikriteria = NilaiKriteria::all();
        return view('nilaikriteria.index', compact(['nilaikriteria']));
    }

    public function create()
    {
        return view('nilaikriteria.create');
    }

    public function store(Request $request)
    {
        //dd($request->except([]'_token','submit']));
        NilaiKriteria::create($request->except('_token', 'submit'));
        return redirect('/nilaikriteria');
    }

    public function edit($id)
    {
        $nilaikriteria = NilaiKriteria::find($id);
        return view('nilaikriteria.edit', compact(['nilaikriteria']));
    }

    public function update($id, Request $request)
    {
        $nilaikriteria = NilaiKriteria::find($id);
        $nilaikriteria->update($request->except(['_token', 'submit']));
        return redirect('/nilaikriteria');
    }

    public function destroy($id)
    {
        $nilaikriteria = NilaiKriteria::find($id);
        $nilaikriteria->delete();
        return redirect(('/nilaikriteria'));
    }
}
