<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Menampilkan daftar data buku (/buku)
    public function index()
    {
        $bukus = Buku::latest()->get();
        return view('buku.index', compact('bukus'));
    }

    // Menampilkan form tambah buku (/buku/create)
    public function create()
    {
        $kategoris = [
            'Fiksi',
            'Non Fiksi',
            'Pendidikan',
            'Teknologi',
            'Sejarah',
        ];

        return view('buku.create', compact('kategoris'));
    }
    
    // Validasi, simpan ke database, flash message, lalu redirect (POST /buku)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_buku'  => 'required|string|max:50|unique:buku,kode_buku',
            'judul_buku' => 'required|string|max:255',
            'kategori'   => 'required|string|in:Fiksi,Non Fiksi,Pendidikan,Teknologi,Sejarah',
        ], [
            'kode_buku.required'  => 'Kode buku wajib diisi.',
            'kode_buku.unique'    => 'Kode buku sudah digunakan.',
            'judul_buku.required' => 'Judul buku wajib diisi.',
            'kategori.required'   => 'Kategori wajib dipilih.',
        ]);
        Buku::create($validated);
        return redirect('/buku')->with('success', 'Data berhasil ditambahkan');
    }
}