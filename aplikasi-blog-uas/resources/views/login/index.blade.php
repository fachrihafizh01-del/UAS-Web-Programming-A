<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f4f4f9;">
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card border-0 shadow-sm" style="max-width:420px;width:100%;border-radius:8px;">
            <div class="card-body p-4">
                <h1 class="h5 fw-bold mb-1">Login CMS Blog</h1>
                <p class="text-muted small mb-4">Masuk sebagai penulis untuk mengelola konten.</p>
                @if(session('sukses'))<div class="alert alert-success">{{ session('sukses') }}</div>@endif
                @if(session('gagal'))<div class="alert alert-danger">{{ session('gagal') }}</div>@endif
                <form action="{{ route('login.proses') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Username</label>
                        <input type="text" name="user_name" class="form-control @error('user_name') is-invalid @enderror" value="{{ old('user_name') }}" autofocus>
                        @error('user_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <button class="btn btn-success w-100" type="submit">Masuk</button>
                    <a href="{{ route('pengunjung.index') }}" class="btn btn-link w-100 mt-2">Lihat halaman pengunjung</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
