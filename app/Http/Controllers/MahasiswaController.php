<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil ()
    {
        $nama = 'farid';
        $nim = '242520118';
        $prodi = 'Teknologi informasi';

        return view ('mahasiswa.profil', compact('nama', 'nim', 'prodi'));    }
}
