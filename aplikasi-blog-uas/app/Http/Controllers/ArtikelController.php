<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::with('penulis', 'kategori')->orderBy('id', 'desc')->get();
        return view('artikel.index', compact('artikel'));
    }

    public function create()
    {
        $kategori = KategoriArtikel::orderBy('nama_kategori', 'asc')->get();
        return view('artikel.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'id_kategori' => 'required|exists:kategori_artikel,id',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = uniqid().'.'.$request->file('gambar')->getClientOriginalExtension();
        $request->file('gambar')->storeAs('gambar', $gambar, 'public');

        Artikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'id_penulis' => Auth::id(),
            'id_kategori' => $request->id_kategori,
            'gambar' => $gambar,
            'hari_tanggal' => now()->timezone('Asia/Jakarta')->locale('id')->isoFormat('dddd, D MMMM Y | HH:mm'),
        ]);

        return redirect()->route('artikel.index')->with('sukses', 'Artikel berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $artikel = Artikel::findOrFail($id);
        $kategori = KategoriArtikel::orderBy('nama_kategori', 'asc')->get();

        return view('artikel.edit', compact('artikel', 'kategori'));
    }

    public function update(Request $request, string $id)
    {
        $artikel = Artikel::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'id_kategori' => 'required|exists:kategori_artikel,id',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
            'id_kategori' => $request->id_kategori,
        ];

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete('gambar/'.$artikel->gambar);
            $gambar = uniqid().'.'.$request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->storeAs('gambar', $gambar, 'public');
            $data['gambar'] = $gambar;
        }

        $artikel->update($data);

        return redirect()->route('artikel.index')->with('sukses', 'Artikel berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $artikel = Artikel::findOrFail($id);
        Storage::disk('public')->delete('gambar/'.$artikel->gambar);
        $artikel->delete();

        return redirect()->route('artikel.index')->with('sukses', 'Artikel berhasil dihapus.');
    }
}
