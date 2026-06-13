<div class="mb-3">
    <label class="form-label fw-semibold">Nama Kategori <span class="text-danger">*</span></label>
    <input type="text" name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror" value="{{ old('nama_kategori', $kategori->nama_kategori ?? '') }}">
    @error('nama_kategori')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-4">
    <label class="form-label fw-semibold">Keterangan</label>
    <textarea name="keterangan" rows="4" class="form-control @error('keterangan') is-invalid @enderror">{{ old('keterangan', $kategori->keterangan ?? '') }}</textarea>
    @error('keterangan')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
