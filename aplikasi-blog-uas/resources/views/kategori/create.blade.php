@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h6 fw-bold mb-0">Tambah Kategori</h1>
    <a href="{{ route('kategori.index') }}" class="btn btn-sm btn-light">Kembali</a>
</div>
<div class="card border-0 shadow-sm"><div class="card-body p-4">
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        @include('kategori.form')
        <div class="d-flex justify-content-end gap-2">
            <a href="{{ route('kategori.index') }}" class="btn btn-sm btn-light">Batal</a>
            <button class="btn btn-sm btn-success">Simpan Data</button>
        </div>
    </form>
</div></div>
@endsection
