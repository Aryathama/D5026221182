<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$nilaikuliah = DB::table('nilaikuliah')->get();
        // seluruhnya

        // $pegawai = DB::table('pegawai')->paginate(10);
        // tergantung bagian mana yang mau ditampilkan

    	// mengirim data pegawai ke view index
    	return view('index1',['nilaikuliah' => $nilaikuliah]);

    }

    public function tambah()
    {
	    // memanggil view tambah
	    return view('tambah1');
    }

    public function store(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('nilaikuliah')->insert([
	    	'NRP' => $request->NRP,
	    	'NilaiAngka' => $request->NilaiAngka,
	    	'SKS' => $request->SKS
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/nilaikuliah');
        // tidak return view index, karena redirect melempar ke suatu url route pegawai, maka akan query all record
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$nilaikuliah = DB::table('nilaikuliah')
		            ->where('NRP','like',"%".$cari."%")
		            ->paginate();

    		// mengirim data pegawai ke view index
		return view('index1',['nilaikuliah' => $nilaikuliah]);

	}
}
