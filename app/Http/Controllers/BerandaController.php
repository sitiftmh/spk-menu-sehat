<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        if(session()->has('level')) {
            return view('beranda.beranda');
        }else {
            return view('beranda.beranda_user');
        }
    }
}
