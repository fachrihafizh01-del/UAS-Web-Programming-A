@extends('layouts.pengunjung')

@section('title', 'Beranda Blog')

@section('content')
<div class="row g-4">
    <div class="col-lg-8">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h1 class="h5 fw-bold mb-1">Artikel Terbaru</h1>
                <p class="meta-text mb-0">Menampilkan 5 artikel terbaru dari CMS.</p>
            </div>
            @if($kategoriAktif)<a href="{{ route('pengunjung.index') }}" class="btn btn-sm btn-outline-secondary">Semua</a>@endif
        </div>
        @forelse($artikel as $item)
            <article class="content-card p-3 p-md-4 mb-3">
                @if($item->gambar)<img src="{{ asset('storage/gambar/' . $item->gambar) }}" alt="{{ $item->judul }}" class="article-image mb-3">@endif
                <div class="mb-2"><span class="category-pill">{{ $item->kategori->nama_kategori ?? 'Tanpa Kategori' }}</span></div>
                <h2 class="h5 fw-bold mb-2">{{ $item->judul }}</h2>
                <p class="meta-text mb-3">{{ $item->hari_tanggal }} @if($item->penulis) oleh {{ $item->penulis->nama_depan }} {{ $item->penulis->nama_belakang }} @endif</p>
                <p class="mb-3" style="color:#555;font-size:14px;line-height:1.7;">{{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 220) }}</p>
                <a href="{{ route('pengunjung.detail', $item->id) }}" class="btn btn-read btn-sm">Kelanjutannya</a>
            </article>
        @empty
            <div class="content-card p-4 text-center"><p class="mb-0 text-muted">Belum ada artikel yang tersedia.</p></div>
        @endforelse
    </div>
    <aside class="col-lg-4">
        <div class="content-card p-3 p-md-4">
            <h2 class="section-title">Kategori Artikel</h2>
            <a href="{{ route('pengunjung.index') }}" class="sidebar-link {{ !$kategoriAktif ? 'active' : '' }}">Semua Kategori</a>
            @foreach($kategori as $item)
                <a href="{{ route('pengunjung.index', ['kategori' => $item->id]) }}" class="sidebar-link {{ (string) $kategoriAktif === (string) $item->id ? 'active' : '' }}">
                    {{ $item->nama_kategori }} <span class="float-end text-muted">{{ $item->artikel_count }}</span>
                </a>
            @endforeach
        </div>
    </aside>
</div>
@endsection
