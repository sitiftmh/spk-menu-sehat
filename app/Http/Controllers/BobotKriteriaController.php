<?php

namespace App\Http\Controllers;

use App\Models\BobotKriteria;
use Illuminate\Http\Request;

class BobotKriteriaController extends Controller
{
    public function index()
    {
        $bobotkriteria = BobotKriteria::all();
        return view('bobotkriteria.index', compact(['bobotkriteria']));
    }

    public function create()
    {
        return view('bobotkriteria.create');
    }

    public function store(Request $request)
    {
        //dd($request->except([]'_token','submit']));
        BobotKriteria::create($request->except('_token', 'submit'));
        return redirect('/bobotkriteria');
    }

    public function edit($id)
    {
        $bobotkriteria = BobotKriteria::find($id);
        return view('bobotkriteria.edit', compact(['bobotkriteria']));
    }

    public function update($id, Request $request)
    {
        $bobotkriteria = BobotKriteria::find($id);
        $bobotkriteria->update($request->except(['_token', 'submit']));
        return redirect('/bobotkriteria');
    }

    public function destroy($id)
    {
        $bobotkriteria = BobotKriteria::find($id);
        $bobotkriteria->delete();
        return redirect(('/bobotkriteria'));
    }
}
