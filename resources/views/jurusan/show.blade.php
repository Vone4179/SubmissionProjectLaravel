<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Jurusan</title>
</head>
<body>
    <h1>Detail Jurusan</h1>
    
    <p><strong>ID:</strong> {{ $jurusan->id }}</p>
    <p><strong>Kode:</strong> {{ $jurusan->kode }}</p>
    <p><strong>Nama Jurusan:</strong> {{ $jurusan->nama }}</p>
    <p><strong>Waktu Pembuatan:</strong> {{ $jurusan->created_at->format('d-m-Y H:i') }}</p>

    <br>
    <a href="{{ url('/jurusan') }}">&laquo; Kembali ke Daftar Jurusan</a>
</body>
</html>