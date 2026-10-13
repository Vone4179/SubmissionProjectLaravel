<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = [
            ['id' => 1, 'nama' => 'Keyboard', 'harga' => 150000, 'stok' => 12],
            ['id' => 2, 'nama' => 'Mouse', 'harga' => 85000, 'stok' => 0],
        ];
        return view('produk.index', compact('produk'));
    }

    public function show($id)
    {
        abort_unless($id <= 2, 404);
        return view('produk.show', ['id' => $id]);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|max:100', 
            'harga' => 'required|integer'
        ]);

        return redirect()->route('produk.index')->with('status', 'Tersimpan');
    }
}
