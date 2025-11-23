<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Pengumuman;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;



class LandingController extends Controller
{
    public function index(){
        $buku = Buku::with('kategori')->take(6)->get();
        $pengumuman = Pengumuman::all();

        return view('landing',compact('buku','pengumuman'));
}

    public function semuaBuku(Request $request){
         $query = Buku::with('kategori'); 

    if ($request->filled('kategori')) {
        $query->where('kategori_id', $request->kategori);
    }

    $query->join('kategoris', 'bukus.kategori_id', '=', 'kategoris.id')
          ->select('bukus.*')
          ->orderBy('kategoris.nama', 'asc');

    $buku = $query->get();

    $kategori = Kategori::orderBy('nama', 'asc')->get();

    return view('buku', compact('buku', 'kategori'));
    }

    public function pengumuman(Request $request){
        $pengumuman = Pengumuman::all();

        return view('pengumuman',compact('pengumuman'));
    }
}
