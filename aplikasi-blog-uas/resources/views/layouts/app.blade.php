<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Manajemen Blog')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f4f9; font-family: Arial, sans-serif; }
        .header { background-color: #2C3E50; color: #fff; padding: 12px 20px; }
        .header-title { font-size: 15px; font-weight: 600; margin: 0; }
        .header-sub { font-size: 11px; color: #cfd8dc; margin: 0; }
        .sidebar { width: 220px; min-height: calc(100vh - 54px); background: #fff; border-right: 1px solid #f0f0f0; padding: 16px 0; flex-shrink: 0; }
        .avatar-area { padding: 0 14px 16px; border-bottom: 1px solid #f0f0f0; margin-bottom: 12px; }
        .avatar-circle { width: 48px; height: 48px; border-radius: 50%; object-fit: cover; border: 2px solid #e9ecef; margin-bottom: 8px; }
        .avatar-greeting { font-size: 11px; color: #868e96; margin: 0; }
        .avatar-name { font-size: 13px; font-weight: 600; color: #212529; margin: 0; }
        .sidebar-label { font-size: 10px; color: #adb5bd; padding: 0 14px 8px; text-transform: uppercase; font-weight: 700; letter-spacing: .06em; }
        .nav-item { display: flex; padding: 9px 14px; font-size: 13px; color: #555; text-decoration: none; border-left: 2px solid transparent; }
        .nav-item:hover { background: #f4f4f9; color: #333; }
        .nav-item.active { background: #e8f5e9; color: #2e7d32; border-left-color: #4CAF50; font-weight: 700; }
        .main-content { flex: 1; padding: 24px; min-width: 0; }
        .table th { font-size: 11px; color: #666; text-transform: uppercase; letter-spacing: .05em; }
        .table td { font-size: 13px; vertical-align: middle; }
        @media (max-width: 767.98px) { .sidebar { width: 100%; min-height: auto; } .layout { flex-direction: column; } }
    </style>
</head>
<body>
    <div class="header">
        <p class="header-title">Sistem Manajemen Blog (CMS)</p>
        <p class="header-sub">db_blog</p>
    </div>

    <div class="d-flex layout">
        <aside class="sidebar d-flex flex-column">
            <div class="avatar-area">
                <img src="{{ asset('storage/foto/' . Auth::user()->foto) }}" alt="Foto Profil" class="avatar-circle">
                <p class="avatar-greeting">Halo,</p>
                <p class="avatar-name">{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</p>
            </div>
            <div class="sidebar-label">Menu Utama</div>
            <a href="{{ route('dashboard') }}" class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('artikel.index') }}" class="nav-item {{ request()->routeIs('artikel.*') ? 'active' : '' }}">Kelola Artikel</a>
            <a href="{{ route('penulis.index') }}" class="nav-item {{ request()->routeIs('penulis.*') ? 'active' : '' }}">Kelola Penulis</a>
            <a href="{{ route('kategori.index') }}" class="nav-item {{ request()->routeIs('kategori.*') ? 'active' : '' }}">Kelola Kategori</a>
            <a href="{{ route('pengunjung.index') }}" class="nav-item">Halaman Pengunjung</a>
            <div class="px-3 mt-auto pt-3 border-top">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm w-100" style="background:#fff0f0;color:#c0392b;border:1px solid #f5c6c6;">Keluar</button>
                </form>
            </div>
        </aside>

        <main class="main-content">
            @if(session('sukses'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('sukses') }}<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
            @endif
            @if(session('gagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('gagal') }}<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
            @endif
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
