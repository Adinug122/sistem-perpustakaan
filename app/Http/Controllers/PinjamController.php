<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Models\User;
use App\Models\Buku;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

              $pinjam = Pinjam::with(['user', 'buku'])
              ->when($search,function ($query, $search) {
                    return $query->whereHas('user', function ($q) use ($search){
                          $q->where('name','like',"%{$search}%");
                    });
              })
              ->get();

        return view('admin.pinjam.index', compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
             $user = User::all();
        $buku = Buku::all();

        return view('admin.pinjam.create',compact('user','buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'buku_id' => 'required|exists:bukus,id',
        'user_id'     => 'required|exists:users,id',
        'tgl_pinjam'  => 'required|date',
        'tgl_kembali' => 'required|date|after_or_equal:tgl_pinjam',
        'status'      => 'required|in:pinjam,kembali'

        ]);
        Pinjam::create($request->all());

        return redirect()->route('admin.pinjam.index')->with('succes','data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pinjam = Pinjam::findOrFail($id);
             $user = User::all();
                $buku = Buku::all();
        return view('admin.pinjam.edit',compact('pinjam','user','buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
        'buku_id'     => 'required|exists:bukus,id',
        'user_id'     => 'required|exists:users,id',
        'tgl_pinjam'  => 'required|date',
        'tgl_kembali' => 'required|date|after_or_equal:tgl_pinjam',
        'status'      => 'required|in:dipinjam,kembali,hilang'

        ]);
        $pinjam =  Pinjam::findOrFail($id);

        $pinjam->update($request->all());

        return redirect()->route('admin.pinjam.index')->with('succes','data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pinjam = Pinjam::findOrFail($id);

        $pinjam->delete();
        
        return redirect()->route('admin.pinjam.index')->with('succes','data berhasil dihapus');
    }
}
