public function show($nim)
{
    $dataMahasiswa = [
        ['nim' => '24101001', 'nama' => 'Andi Pratama', 'ipk' => 3.8, 'jurusan' => 'Teknik Informatika'],
        ['nim' => '24101002', 'nama' => 'Siti Aminah', 'ipk' => 3.4, 'jurusan' => 'Sistem Informasi'],
        ['nim' => '24101003', 'nama' => 'Budi Santoso', 'ipk' => 2.9, 'jurusan' => 'Teknik Komputer'],
        ['nim' => '24101004', 'nama' => 'Dewi Lestari', 'ipk' => 3.6, 'jurusan' => 'Manajemen Informatika'],
        ['nim' => '24101005', 'nama' => 'Eko Prasetyo', 'ipk' => 2.5, 'jurusan' => 'Teknik Informatika'],
    ];

    // Cari mahasiswa berdasarkan NIM
    $mahasiswa = collect($dataMahasiswa)->firstWhere('nim', $nim);

    if (!$mahasiswa) {
        abort(404);
    }

    return view('mahasiswa.detail', compact('mahasiswa'));
}