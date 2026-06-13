<div class="row g-3 mb-3">
    <div class="col-md-6">
        <label class="form-label fw-semibold">Nama Depan <span class="text-danger">*</span></label>
        <input type="text" name="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror" value="{{ old('nama_depan', $penulis->nama_depan ?? '') }}">
        @error('nama_depan')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-md-6">
        <label class="form-label fw-semibold">Nama Belakang <span class="text-danger">*</span></label>
        <input type="text" name="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror" value="{{ old('nama_belakang', $penulis->nama_belakang ?? '') }}">
        @error('nama_belakang')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
</div>
<div class="mb-3">
    <label class="form-label fw-semibold">Username <span class="text-danger">*</span></label>
    <input type="text" name="user_name" class="form-control @error('user_name') is-invalid @enderror" value="{{ old('user_name', $penulis->user_name ?? '') }}">
    @error('user_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label fw-semibold">Password {{ isset($penulis) ? '' : '*' }}</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ isset($penulis) ? 'Kosongkan jika tidak diubah' : 'Minimal 8 karakter' }}">
    @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-4">
    <label class="form-label fw-semibold">Foto Profil</label>
    @isset($penulis)<div class="mb-2"><img src="{{ asset('storage/foto/' . $penulis->foto) }}" alt="Foto" style="width:70px;height:70px;object-fit:cover;border-radius:6px;"></div>@endisset
    <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" accept="image/jpg,image/jpeg,image/png">
    <div class="form-text">Format JPG, JPEG, PNG. Maksimal 2 MB.</div>
    @error('foto')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
