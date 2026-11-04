<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::orderBy('nama')->get();
        return view('jurusan.index', compact('jurusans'));
    }
    public function show($id)
    {
    $jurusan = Jurusan::findOrFail($id);
    return view('jurusan.show', compact('jurusan'));
    }
}