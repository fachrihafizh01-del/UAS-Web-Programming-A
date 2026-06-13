@extends('layouts.app')

@section('title', 'Edit Artikel')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3"><h1 class="h6 fw-bold mb-0">Edit Artikel</h1><a href="{{ route('artikel.index') }}" class="btn btn-sm btn-light">Kembali</a></div>
<div class="card border-0 shadow-sm"><div class="card-body p-4">
    <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        @include('artikel.form')
        <div class="d-flex justify-content-end gap-2"><a href="{{ route('artikel.index') }}" class="btn btn-sm btn-light">Batal</a><button class="btn btn-sm btn-success">Simpan Perubahan</button></div>
    </form>
</div></div>
@endsection
