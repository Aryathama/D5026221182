<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TVController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$televisi = DB::table('televisi')->get();
    	return view('TV/indextv',['televisi' => $televisi]);
    }

    public function tambah()
    {
	    // memanggil view tambah
	    return view('TV/tambahtv');
    }

    public function store(Request $request)
    {

        $stock = $request->stock;
        $tersedia = ($stock > 0) ? 'Y' : 'N';
	    // insert data ke table pegawai
	    DB::table('televisi')->insert([
	    	'merktelevisi' => $request->merk,
	    	'stocktelevisi' => $stock,
            'tersedia' => $tersedia
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/televisi');
        // tidak return view index, karena redirect melempar ke suatu url route pegawai, maka akan query all record
    }

    public function edit($kode)
    {
	    // mengambil data pegawai berdasarkan id yang dipilih
	    $televisi = DB::table('televisi')->where('kodetelevisi',$kode)->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('TV/edittv',['televisi' => $televisi]);
    }

    public function update(Request $request)
    {
        $stock = $request->stock;
        $tersedia = ($stock > 0) ? 'Y' : 'N';
	    // update data pegawai
	    DB::table('televisi')->where('kodetelevisi',$request->kode)->update([
    		'merktelevisi' => $request->merk,
	    	'stocktelevisi' => $stock,
            'tersedia' => $tersedia
    	]);
	    // alihkan halaman ke halaman pegawai
    	return redirect('/televisi');
    }

    public function hapus($kode)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('televisi')->where('kodetelevisi',$kode)->delete();

	    // alihkan halaman ke halaman pegawai
	    return redirect('/televisi');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$televisi = DB::table('televisi')
		            ->where('merktelevisi','like',"%".$cari."%")
		            ->paginate();

    		// mengirim data pegawai ke view index
		return view('TV/indextv',['televisi' => $televisi]);

	}

    public function view($kode) {
        // mengambil data pegawai berdasarkan id yang dipilih
	    $televisi = DB::table('televisi')->where('kodetelevisi',$kode)->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('TV/viewtv',['televisi' => $televisi]);
    }
}
