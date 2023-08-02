<?php

namespace App\Http\Controllers;

use App\Models\KategoriMenu;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $menu = Menu::with('kategorimenu')->paginate(10);
        return view('menu.index', compact(['menu']));
    }

    public function create()
    {
        $m = Menu::all();
        $km = KategoriMenu::all();
        return view('menu.create', compact('km'));
    }

    public function store(Request $request)
    {
        //dd($request->except([]'_token','submit']));
        Menu::create($request->except('_token', 'submit'));
        return redirect('/menu');
    }

    public function edit($id)
    {
        $menu = Menu::find($id);
        $km = KategoriMenu::all();
        return view('menu.edit', compact(['menu', 'km']));
    }

    public function update($id, Request $request)
    {
        $menu = Menu::find($id);
        $menu->update($request->except(['_token', 'submit']));
        return redirect('/menu');
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect(('/menu'));
    }

    public function view()
    {
        $menu = Menu::paginate(10);
        return view('menuuser', compact((['menu'])));
        
    }
}
