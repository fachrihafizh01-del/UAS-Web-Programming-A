<?php

namespace App\Http\Controllers;

use App\Models\KategoriArtikel;
use Illuminate\Http\Request;

class KategoriArtikelController extends Controller
{
    public function index()
    {
        $kategori = KategoriArtikel::orderBy('nama_kategori', 'asc')->get();
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_kategori' => 'required|string|max:100|unique:kategori_artikel,nama_kategori',
            'keterangan' => 'nullable|string',
        ]);

        KategoriArtikel::create($data);

        return redirect()->route('kategori.index')->with('sukses', 'Kategori berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $kategori = KategoriArtikel::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, string $id)
    {
        $kategori = KategoriArtikel::findOrFail($id);
        $data = $request->validate([
            'nama_kategori' => 'required|string|max:100|unique:kategori_artikel,nama_kategori,'.$kategori->id,
            'keterangan' => 'nullable|string',
        ]);

        $kategori->update($data);

        return redirect()->route('kategori.index')->with('sukses', 'Kategori berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $kategori = KategoriArtikel::withCount('artikel')->findOrFail($id);

        if ($kategori->artikel_count > 0) {
            return redirect()->route('kategori.index')->with('gagal', 'Kategori masih memiliki artikel.');
        }

        $kategori->delete();

        return redirect()->route('kategori.index')->with('sukses', 'Kategori berhasil dihapus.');
    }
}
