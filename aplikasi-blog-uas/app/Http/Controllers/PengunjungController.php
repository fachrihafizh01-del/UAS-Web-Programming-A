<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    public function index(Request $request)
    {
        $kategoriAktif = $request->query('kategori');
        $query = Artikel::with('penulis', 'kategori')->orderBy('id', 'desc');

        if ($kategoriAktif) {
            $query->where('id_kategori', $kategoriAktif);
        }

        $artikel = $query->limit(5)->get();
        $kategori = KategoriArtikel::withCount('artikel')->orderBy('nama_kategori', 'asc')->get();

        return view('pengunjung.index', compact('artikel', 'kategori', 'kategoriAktif'));
    }

    public function detail(string $id)
    {
        $artikel = Artikel::with('penulis', 'kategori')->findOrFail($id);
        $artikelTerkait = Artikel::with('penulis', 'kategori')
            ->where('id_kategori', $artikel->id_kategori)
            ->where('id', '!=', $artikel->id)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();

        return view('pengunjung.detail', compact('artikel', 'artikelTerkait'));
    }
}
