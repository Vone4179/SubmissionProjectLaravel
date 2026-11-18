<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    // Soal 3: Menampilkan seluruh data mata kuliah
    public function index()
    {
        $matakuliahs = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    // Soal 2: Menampilkan form tambah data
    public function create()
    {
        return view('matakuliah.create');
    }

    // Soal 2: Validasi dan proses simpan data
    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|string|max:20|unique:matakuliahs,kode_matakuliah',
            'nama_matakuliah' => 'required|string|max:100',
            'sks'             => 'required|integer|min:1|max:6',
        ]);

        Matakuliah::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks'             => $request->sks,
        ]);

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    // Soal 4: Menampilkan detail satu mata kuliah berdasarkan ID
    public function show($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('matakuliah.show', compact('matakuliah'));
    }
}