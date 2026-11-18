<?php
namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('jurusan.index', compact('jurusans'));
    }

    public function create()
    {
        return view('jurusan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|max:20|unique:jurusans,kode',
            'nama' => 'required|string|max:100',
        ]);

        Jurusan::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        return redirect()->route('jurusan.index')
            ->with('success', 'Data jurusan berhasil ditambahkan.');
    }
    public function show($id)
{
    $jurusan = Jurusan::findOrFail($id);
    return view('jurusan.show', compact('jurusan'));
}
}