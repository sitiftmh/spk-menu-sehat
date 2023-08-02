<?php

namespace App\Http\Controllers;

use App\Models\KategoriMenu;
use Illuminate\Http\Request;

class KategoriMenuController extends Controller
{
    public function index()
    {
        $kategorimenu = KategoriMenu::all();
        return view('kategorimenu.index', compact(['kategorimenu']));
    }

    public function create()
    {
        return view('kategorimenu.create');
    }

    public function store(Request $request)
    {
        //dd($request->except([]'_token','submit']));
        KategoriMenu::create($request->except('_token', 'submit'));
        return redirect('/kategorimenu');
    }

    public function edit($id)
    {
        $kategorimenu = KategoriMenu::find($id);
        return view('kategorimenu.edit', compact(['kategorimenu']));
    }

    public function update($id, Request $request)
    {
        $kategorimenu = KategoriMenu::find($id);
        $kategorimenu->update($request->except(['_token', 'submit']));
        return redirect('/kategorimenu');
    }

    public function destroy($id)
    {
        $kategorimenu = KategoriMenu::find($id);
        $kategorimenu->delete();
        return redirect(('/kategorimenu'));
    }
}
