<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
    	$kategori = DB::table('kategori')->get();
    	return view('Kategori/indexkategori',['kategori' => $kategori]);

    }

    public function cari($id)
	{
    		// mengambil data dari table pegawai sesuai pencarian data
		$kategori = DB::table('kategori')
		            ->where('kategori',$id)
		            ->get();

    		// mengirim data pegawai ke view index
		return view('Kategori/carikategori',['kategori' => $kategori]);

	}

}
