<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       
         $search = $request->input('search');
       $buku = Buku::when($search, function ($query) use ($search) {
        $query->where('judul', 'like', '%' . $search . '%');
    })
    ->get();
        return view('admin.buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.buku.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required|string|max:50',
            'penerbit' => 'required|string|max:50',
            'isbn' => 'required|string',
            'tahun' => 'required|date',
            'jumlah' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);
        $data = $request->except('gambar');
        
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('img', 'public');
            $data['gambar'] = basename($path);
        }

        Buku::create($data);

        return redirect()->route('admin.buku.index')->with('succes', 'berhasil ditambahkan');
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
        $buku = Buku::findOrFail($id);
          $kategori = Kategori::all();
        return view('admin.buku.edit',compact('buku','kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
          $request->validate([
            'judul' => 'required',
            'penulis' => 'required|string|max:50',
            'penerbit' => 'required|string|max:50',
            'isbn' => 'required|string',
            'tahun' => 'required|date',
            'jumlah' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

         $data = $request->except('gambar');
        
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('img', 'public');
            $data['gambar'] = basename($path);
        }

        $buku = Buku::findOrFail($id);

        $buku->update($data);


        return redirect()->route('admin.buku.index')->with('succes', 'berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::findOrFail($id);

        $buku->delete();

        return redirect()->route('admin.kategori.index')->with('succes','berhasil dihapus');
    }
}
