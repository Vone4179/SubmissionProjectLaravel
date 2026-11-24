<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 40px ; padding: 0 16px; }
        .form-group { margin-bottom: 14px; }
        label { display: block; font-weight: bold; margin-bottom: 6px; }
        .error { color: #b91c1c; font-size: 0.875rem; margin-top: 4px; }
        .btn {  cursor: pointer; text-decoration: none; display: inline-block; }
    </style>
</head>
<body>
    <h2>Tambah Data Buku</h2>

    <a href="/buku" class="btn">Kembali ke Daftar Buku</a>
    
    <form action="/buku" method="POST">
        @csrf

        <div class="form-group">
            <label for="kode_buku">Kode Buku</label>
            <input
                type="text"
                id="kode_buku"
                name="kode_buku"
                value="{{ old('kode_buku') }}"
                placeholder="Contoh: BK-001"
                required
            >
            @error('kode_buku')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="judul_buku">Judul Buku</label>
            <input
                type="text"
                id="judul_buku"
                name="judul_buku"
                value="{{ old('judul_buku') }}"
                placeholder="Masukkan judul buku"
                required
            >
            @error('judul_buku')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="kategori">Kategori</label>
            <select id="kategori" name="kategori" required>
                <option value="">Pilih Kategori</option>
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori }}" {{ old('kategori') == $kategori ? 'selected' : '' }}>
                        {{ $kategori }}
                    </option>
                @endforeach
            </select>
            @error('kategori')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn">Simpan Data</button>
    </form>
</body>
</html>