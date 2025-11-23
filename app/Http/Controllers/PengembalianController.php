<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use App\Models\Pinjam;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $pengembalian = Pengembalian::with(['pinjam.user', 'pinjam.buku'])
            ->when($search, function ($query) use ($search) {
                $query->whereHas('pinjam.user', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                });
            })
            ->get();

        return view('admin.pengembalian.index', compact('pengembalian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pinjam = Pinjam::with(['user', 'buku'])
                        ->where('status', 'pinjam')
                        ->get();

        return view('admin.pengembalian.create', compact('pinjam'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pinjam_id'   => 'required|exists:pinjams,id',
            'tgl_kembali' => 'required|date',
            'denda'       => 'nullable|numeric|min:0',
        ]);

        Pengembalian::create($request->all());
        
        Pinjam::where('id', $request->pinjam_id)->update([
            'status' => 'kembali'
        ]);

        return redirect()->route('admin.pengembalian.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        $pinjam = Pinjam::with(['user', 'buku'])->get();

        return view('admin.pengembalian.edit', compact('pengembalian', 'pinjam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'pinjam_id'   => 'required|exists:pinjams,id',
            'tgl_kembali' => 'required|date',
            'denda'       => 'nullable|numeric|min:0',
        ]);

        $pengembalian = Pengembalian::findOrFail($id);

        $pengembalian->update($request->all());

        return redirect()->route('admin.pengembalian.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        $pengembalian->delete();

        return redirect()->route('admin.pengembalian.index')->with('success', 'Data berhasil dihapus');
    }
}
