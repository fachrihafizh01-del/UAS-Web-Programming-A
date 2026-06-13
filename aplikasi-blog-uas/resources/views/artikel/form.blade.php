<div class="mb-3">
    <label class="form-label fw-semibold">Judul <span class="text-danger">*</span></label>
    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $artikel->judul ?? '') }}">
    @error('judul')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label fw-semibold">Kategori <span class="text-danger">*</span></label>
    <select name="id_kategori" class="form-select @error('id_kategori') is-invalid @enderror">
        <option value="">Pilih Kategori</option>
        @foreach($kategori as $item)
            <option value="{{ $item->id }}" {{ old('id_kategori', $artikel->id_kategori ?? '') == $item->id ? 'selected' : '' }}>{{ $item->nama_kategori }}</option>
        @endforeach
    </select>
    @error('id_kategori')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label fw-semibold">Isi Artikel <span class="text-danger">*</span></label>
    <textarea name="isi" rows="8" class="form-control @error('isi') is-invalid @enderror">{{ old('isi', $artikel->isi ?? '') }}</textarea>
    @error('isi')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-4">
    <label class="form-label fw-semibold">Gambar {{ isset($artikel) ? '' : '*' }}</label>
    @isset($artikel)<div class="mb-2"><img src="{{ asset('storage/gambar/' . $artikel->gambar) }}" alt="Gambar" style="width:120px;height:80px;object-fit:cover;border-radius:6px;"></div>@endisset
    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" accept="image/jpg,image/jpeg,image/png">
    <div class="form-text">Format JPG, JPEG, PNG. Maksimal 2 MB.</div>
    @error('gambar')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
