<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\KategoriMenu;
use App\Models\Kriteria;
use App\Models\Menu;
use App\Models\NilaiCrips;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index()
    {
        $km = KategoriMenu::all();
        $k = Kriteria::all();
        $nc = NilaiCrips::all();
        if (session()->has('level')) {
            return view('jawaban.index', compact('km', 'k', 'nc'));
        } else {
            return view('jawaban.bmr', compact('km', 'k', 'nc'));
        }
    }

    public function indexUser(Request $request)
    {
        $bmr = $request->bmr;
        $bmi = $request->bmi;
        $bmi_category = $request->bmi_category;
        $km = KategoriMenu::all();
        $k = Kriteria::all();
        $nc = NilaiCrips::all();
        return view('jawaban.index_user', compact('km', 'k', 'nc', 'bmr', 'bmi', 'bmi_category'));
    }

    public function calculateBmr(Request $request): \Illuminate\Http\JsonResponse
    {
        $age = $request->input('age');
        $gender = $request->input('gender');
        $weight = $request->input('weight');
        $height = $request->input('height');
        $bmr = 0;

        $heightInM = $height / 100;

        $bmi = number_format($weight / ($heightInM * $heightInM), 1);

        if ($bmi < 18.5) {
            $bmi_category = "Berat badan kurang (Underweight)";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            $bmi_category = "Berat badan normal (Normal weight)";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            $bmi_category = "Berat badan berlebih (Overweight)";
        } elseif ($bmi >= 30 && $bmi <= 34.9) {
            $bmi_category = "Obesitas Tingkat I (Obese Class I)";
        } elseif ($bmi >= 35 && $bmi <= 39.9) {
            $bmi_category = "Obesitas Tingkat II (Obese Class II)";
        } else {
            $bmi_category = "Obesitas Tingkat III (Obese Class III)";
        }

        if ($age && $gender && $weight && $height) {

            if ($gender === 'male') {
                $bmr = intval(88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age));
            } elseif ($gender === 'female') {
                $bmr = intval(447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age));
            }

            return response()->json([
                'bmr' => $bmr,
                'bmi' => $bmi,
                'bmi_category' => $bmi_category
            ]);
        } else {
            return response()->json(['error' => 'Missing input values'], 400);
        }
    }

    public function proses1(Request $request)
    {
        $bmr = $request->bmr;
        $bmi = $request->bmi;
        $bmi_category = $request->bmi_category;
        $km = KategoriMenu::all();
        $k = Kriteria::all();
        // $nc = NilaiCrips::all();
        $karbohidrat = NilaiCrips::where('id_kriteria', 'LIKE', 'Karbohidrat')->paginate();
        $gula = NilaiCrips::where('id_kriteria', 'LIKE', 'Gula')->paginate();
        $lemak = NilaiCrips::where('id_kriteria', 'LIKE', 'Lemak')->paginate();
        $protein = NilaiCrips::where('id_kriteria', 'LIKE', 'Protein')->paginate();
        $kalori = NilaiCrips::where('id_kriteria', 'LIKE', 'Kalori')->paginate();

        // return view('jawaban.edit', compact(['jawaban', 'karbohidrat']));
        if (session()->has('level')) {
            return view('jawaban.proses1', compact('km', 'k', 'karbohidrat', 'gula', 'lemak', 'protein', 'kalori'));
        } else {
            return view('jawaban.proses1_user', compact('km', 'k', 'karbohidrat', 'gula', 'lemak', 'protein', 'kalori', 'bmr', 'bmi', 'bmi_category'));
        }
    }

    public function proses2(Request $request)
    {
        // $nilai_harga = NilaiCrips::where('id_kriteria','LIKE','Karbohidrat','AND','nilai_crips','LIKE','%' .$request->has('harga').'%')->paginate();
        $nilai_karbohidrat = NilaiCrips::where('id_kriteria', 'LIKE', 'Karbohidrat')
            ->where('nilai_crips', 'LIKE', '%' . $request->karbohidrat . '%')
            ->get();
        $nilai_gula = NilaiCrips::where('id_kriteria', 'LIKE', 'Gula')
            ->where('nilai_crips', 'LIKE', '%' . $request->gula . '%')
            ->get();
        $nilai_lemak = NilaiCrips::where('id_kriteria', 'LIKE', 'Lemak')
            ->where('nilai_crips', 'LIKE', '%' . $request->lemak . '%')
            ->get();
        $nilai_protein = NilaiCrips::where('id_kriteria', 'LIKE', 'Protein')
            ->where('nilai_crips', 'LIKE', '%' . $request->protein . '%')
            ->get();
        $nilai_kalori = NilaiCrips::where('id_kriteria', 'LIKE', 'Kalori')
            ->where('nilai_crips', 'LIKE', '%' . $request->kalori . '%')
            ->get();

        // $nilai_karbohidrat = NilaiCrips::where([['id_kriteria','=','Karbohidrat'],['nilai_crips','=', $request->has('karbohidrat')]])->first();


        $km = KategoriMenu::all();
        $k = Kriteria::all();
        // $nc = NilaiCrips::all();
        $karbohidrat = NilaiCrips::where('id_kriteria', 'LIKE', 'Karbohidrat')->get();
        $gula = NilaiCrips::where('id_kriteria', 'LIKE', 'Gula')->get();
        $lemak = NilaiCrips::where('id_kriteria', 'LIKE', 'Lemak')->get();
        $protein = NilaiCrips::where('id_kriteria', 'LIKE', 'Protein')->get();
        $kalori = NilaiCrips::where('id_kriteria', 'LIKE', 'Kalori')->get();

        $menu = Menu::all();
        $menu = Menu::with('kategorimenu')
            ->where('id_kategorimenu', 'LIKE', '%' . $request->id_kategorimenu . '%')
            ->get();
        $bmr = $request->bmr;
        $bmi = $request->bmi;
        $bmi_category = $request->bmi_category;

        // return view('jawaban.edit', compact(['jawaban', 'karbohidrat']));
        if (session()->has('level')) {
            return view('jawaban.proses2', compact('km', 'k', 'nilai_karbohidrat', 'nilai_gula', 'nilai_lemak', 'nilai_protein', 'nilai_kalori', 'karbohidrat', 'gula', 'lemak', 'protein', 'kalori', 'menu', 'bmr', 'bmi', 'bmi_category'));
        } else {
            return view('jawaban.proses2_user', compact('km', 'k', 'nilai_karbohidrat', 'nilai_gula', 'nilai_lemak', 'nilai_protein', 'nilai_kalori', 'karbohidrat', 'gula', 'lemak', 'protein', 'kalori', 'menu', 'bmr', 'bmi', 'bmi_category'));
        }
    }

    public function create()
    {
        $km = KategoriMenu::all();
        $k = Kriteria::all();
        $nc = NilaiCrips::all();
        return view('jawaban.create', compact('km', 'k', 'nc'));
    }

    public function store(Request $request)
    {
        //dd($request->except([]'_token','submit']));
        Jawaban::create($request->except('_token', 'submit'));
        return redirect('/jawaban');
    }

    public function edit($id)
    {
        $jawaban = Jawaban::find($id);
        $km = KategoriMenu::all();
        $k = Kriteria::all();
        $nc = NilaiCrips::all();

        return view('jawaban.edit', compact(['jawaban', 'km', 'k', 'nc']));
    }

    public function update($id, Request $request)
    {
        $jawaban = Jawaban::find($id);
        $jawaban->update($request->except(['_token', 'submit']));
        return redirect('/jawaban');
    }

    public function destroy($id)
    {
        $jawaban = Jawaban::find($id);
        $jawaban->delete();
        return redirect(('/jawaban'));
    }
}
