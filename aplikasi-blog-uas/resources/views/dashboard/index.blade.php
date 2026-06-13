@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height:calc(100vh - 160px);">
    <div class="card border-0 shadow-sm" style="max-width:520px;width:100%;border-radius:8px;">
        <div class="card-body p-4 text-center">
            <div class="mx-auto mb-3 d-flex align-items-center justify-content-center" style="width:64px;height:64px;border-radius:50%;background:#e8f5e9;color:#2e7d32;font-size:28px;font-weight:700;">B</div>
            <h1 class="h5 fw-bold mb-1">Selamat datang, <span style="color:#2e7d32;">{{ $nama_lengkap }}</span></h1>
            <p class="text-muted small mb-4">Silakan pilih menu di sebelah kiri untuk mengelola konten blog.</p>
            <div class="row g-3 text-start">
                <div class="col-sm-6"><div class="p-3 rounded bg-light"><div class="text-muted text-uppercase small fw-bold">Login sebagai</div><div class="small fw-semibold">{{ $nama_lengkap }}</div></div></div>
                <div class="col-sm-6"><div class="p-3 rounded bg-light"><div class="text-muted text-uppercase small fw-bold">Waktu login</div><div class="small fw-semibold">{{ $waktu_login }}</div></div></div>
            </div>
        </div>
    </div>
</div>
@endsection
