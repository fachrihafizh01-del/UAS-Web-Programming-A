@extends('layouts.app')

@section('title', 'Kelola Penulis')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h6 fw-bold mb-0">Data Penulis</h1>
    <a href="{{ route('penulis.create') }}" class="btn btn-sm btn-success">+ Tambah Penulis</a>
</div>
<div class="card border-0 shadow-sm"><div class="card-body p-0">
    <table class="table table-hover mb-0">
        <thead><tr><th class="px-3 py-2">Foto</th><th>Nama</th><th>Username</th><th>Aksi</th></tr></thead>
        <tbody>
            @forelse($penulis as $item)
                <tr>
                    <td class="px-3"><img src="{{ asset('storage/foto/' . $item->foto) }}" alt="Foto" style="width:40px;height:40px;object-fit:cover;border-radius:6px;border:1px solid #e9ecef;"></td>
                    <td>{{ $item->nama_depan }} {{ $item->nama_belakang }}</td>
                    <td class="text-muted">{{ $item->user_name }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('penulis.edit', $item->id) }}" class="btn btn-sm" style="background:#e3f2fd;color:#1565c0;">Edit</a>
                            <form action="{{ route('penulis.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus penulis ini?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm" style="background:#ffebee;color:#c62828;">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center text-muted py-4">Belum ada data penulis.</td></tr>
            @endforelse
        </tbody>
    </table>
</div></div>
@endsection
