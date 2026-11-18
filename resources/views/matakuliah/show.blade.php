<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <h1>Detail Data Mata Kuliah</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Kode Mata Kuliah</th>
            <td>{{ $matakuliah->kode_matakuliah }}</td>
        </tr>
        <tr>
            <th>Nama Mata Kuliah</th>
            <td>{{ $matakuliah->nama_matakuliah }}</td>
        </tr>
        <tr>
            <th>Jumlah SKS</th>
            <td>{{ $matakuliah->sks }}</td>
        </tr>
        <tr>
            <th>Tanggal Dibuat (created_at)</th>
            <td>{{ $matakuliah->created_at }}</td>
        </tr>
        <tr>
            <th>Tanggal Diperbarui (updated_at)</th>
            <td>{{ $matakuliah->updated_at }}</td>
        </tr>
    </table>

    <br>
    <a href="{{ route('matakuliah.index') }}">Kembali ke Daftar</a>
</body>
</html>