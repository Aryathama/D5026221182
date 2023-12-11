<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori')->get();
        return view('Kategori/indexkategori', ['kategori' => $kategori]);
    }

    // method untuk view data blueray
    public function cari(Request $request)
    {
        $kategori = $request->input('dropdown');
        return view('Kategori/carikategori', ['kategori' => $kategori]);
    }
}
