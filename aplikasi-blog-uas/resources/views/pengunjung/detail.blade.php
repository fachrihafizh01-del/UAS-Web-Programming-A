@extends('layouts.pengunjung')

@section('title', $artikel->judul)

@section('content')
<div class="row g-4">
    <div class="col-lg-8">
        <article class="content-card p-3 p-md-4">
            <div class="mb-3"><span class="category-pill">{{ $artikel->kategori->nama_kategori ?? 'Tanpa Kategori' }}</span></div>
            <h1 class="h3 fw-bold mb-2">{{ $artikel->judul }}</h1>
            <p class="meta-text mb-3">{{ $artikel->hari_tanggal }} @if($artikel->penulis) oleh {{ $artikel->penulis->nama_depan }} {{ $artikel->penulis->nama_belakang }} @endif</p>
            @if($artikel->gambar)<img src="{{ asset('storage/gambar/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" class="detail-image mb-4">@endif
            <div class="article-body">{{ $artikel->isi }}</div>
            <div class="mt-4 pt-3 border-top"><a href="{{ route('pengunjung.index') }}" class="btn btn-sm btn-outline-secondary">Kembali ke Beranda</a></div>
        </article>
    </div>
    <aside class="col-lg-4">
        <div class="content-card p-3 p-md-4">
            <h2 class="section-title">Artikel Terkait</h2>
            @forelse($artikelTerkait as $item)
                <a href="{{ route('pengunjung.detail', $item->id) }}" class="sidebar-link mb-1">
                    <span class="d-block fw-semibold">{{ \Illuminate\Support\Str::limit($item->judul, 52) }}</span>
                    <span class="meta-text">{{ $item->hari_tanggal }}</span>
                </a>
            @empty
                <p class="text-muted mb-0" style="font-size:13px;">Belum ada artikel terkait.</p>
            @endforelse
        </div>
    </aside>
</div>
@endsection
