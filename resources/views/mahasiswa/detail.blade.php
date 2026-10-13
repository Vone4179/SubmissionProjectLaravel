<h1>Detail Mahasiswa</h1>
<p>NIM: {{ $mahasiswa['nim'] }}</p>
<p>Nama: {{ $mahasiswa['nama'] }}</p>
<p>IPK: {{ $mahasiswa['ipk'] }}</p>
<p>Jurusan: {{ $mahasiswa['jurusan'] }}</p>
<a href="{{ route('mahasiswa.daftar') }}">Kembali ke Daftar</a>