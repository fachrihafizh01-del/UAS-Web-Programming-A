<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\KategoriArtikel;
use App\Models\Penulis;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $penulis = Penulis::create([
            'nama_depan' => 'Admin',
            'nama_belakang' => 'Blog',
            'user_name' => 'admin',
            'password' => Hash::make('password'),
            'foto' => 'default.svg',
        ]);

        $kategori = collect([
            ['nama_kategori' => 'Teknologi', 'keterangan' => 'Artikel seputar teknologi dan pemrograman.'],
            ['nama_kategori' => 'Pendidikan', 'keterangan' => 'Artikel seputar pembelajaran dan kampus.'],
            ['nama_kategori' => 'Lifestyle', 'keterangan' => 'Artikel ringan untuk pembaca umum.'],
        ])->map(fn ($item) => KategoriArtikel::create($item));

        for ($i = 1; $i <= 7; $i++) {
            Artikel::create([
                'id_penulis' => $penulis->id,
                'id_kategori' => $kategori[($i - 1) % $kategori->count()]->id,
                'judul' => 'Contoh Artikel Blog '.$i,
                'isi' => "Ini adalah isi lengkap contoh artikel blog ke-$i. Artikel ini digunakan sebagai data awal untuk mendemonstrasikan halaman utama, filter kategori, halaman detail, dan artikel terkait pada aplikasi blog.\n\nKonten dapat diubah melalui halaman CMS setelah penulis login.",
                'gambar' => 'contoh-artikel.svg',
                'hari_tanggal' => now()->timezone('Asia/Jakarta')->locale('id')->isoFormat('dddd, D MMMM Y | HH:mm'),
            ]);
        }
    }
}
