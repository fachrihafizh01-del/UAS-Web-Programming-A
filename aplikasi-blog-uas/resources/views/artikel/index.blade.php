@extends('layouts.app')

@section('title', 'Kelola Artikel')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h6 fw-bold mb-0">Data Artikel</h1>
    <a href="{{ route('artikel.create') }}" class="btn btn-sm btn-success">+ Tambah Artikel</a>
</div>
<div class="card border-0 shadow-sm"><div class="card-body p-0">
    <table class="table table-hover mb-0">
        <thead><tr><th class="px-3 py-2">Gambar</th><th>Judul</th><th>Kategori</th><th>Penulis</th><th>Tanggal</th><th>Aksi</th></tr></thead>
        <tbody>
            @forelse($artikel as $item)
                <tr>
                    <td class="px-3"><img src="{{ asset('storage/gambar/' . $item->gambar) }}" alt="Gambar" style="width:70px;height:48px;object-fit:cover;border-radius:6px;border:1px solid #e9ecef;"></td>
                    <td class="fw-semibold">{{ $item->judul }}</td>
                    <td>{{ $item->kategori->nama_kategori ?? '-' }}</td>
                    <td>{{ $item->penulis->nama_depan ?? '-' }} {{ $item->penulis->nama_belakang ?? '' }}</td>
                    <td class="text-muted">{{ $item->hari_tanggal }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('artikel.edit', $item->id) }}" class="btn btn-sm" style="background:#e3f2fd;color:#1565c0;">Edit</a>
                            <form action="{{ route('artikel.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus artikel ini?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm" style="background:#ffebee;color:#c62828;">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center text-muted py-4">Belum ada data artikel.</td></tr>
            @endforelse
        </tbody>
    </table>
</div></div>
@endsection
