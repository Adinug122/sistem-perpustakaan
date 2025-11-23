<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Exception;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengumuman = Pengumuman::all();
        
        return view('admin.pengumuman.index',compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $data = $request->except('gambar');

        if($request->hasFile('gambar')){
            $path = $request->file('gambar')->store('img','public');
            $data['gambar'] = basename($path);
        }
        Pengumuman::create($data);

        return redirect()->route('admin.pengumuman.index')->with('succes','data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
   public function show(string $id)
{
 
    $pengumuman = Pengumuman::findOrFail($id);
        $pengumumanLain = Pengumuman::where('id', '!=', $id)
                        ->latest()
                        ->take(5)
                        ->get();


    return view('pengumuman.show', compact('pengumuman','pengumumanLain'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengumuman = Pengumuman::findOrFail( $id);
        return view('admin.pengumuman.edit',compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'judul' => 'required|string',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $data = $request->except('gambar');

        if($request->hasFile('gambar')){
            $path = $request->file('gambar')->store('img','public');
            $data['gambar'] = basename($path);
        }
        $pengumuman = Pengumuman::findOrFail($id);

        $pengumuman->update($data);

        return redirect()->route('admin.pengumuman.index')->with('succes','data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();

        return redirect()->route('admin.pengumuman.index')->with('succes','data berhasil dihapus');

    }
}
