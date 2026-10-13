@extends('layouts.app')
@section('title', 'Daftar Mahasiswa')
@section('content')
    <h1>Daftar Mahasiswa</h1>

    {{-- Cek apakah ada mahasiswa dengan IPK di bawah 2.0 --}}
    @php
        $adaIPKRendah = collect($mahasiswa)->contains(function ($m) {
            return $m['ipk'] < 2.0;
        });
    @endphp

    @if ($adaIPKRendah)
        <x-alert tipe="bahaya">
            Peringatan: Terdapat mahasiswa dengan IPK di bawah 2.0 yang memerlukan perhatian khusus!
        </x-alert>
    @endif

    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>IPK</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        @forelse ($mahasiswa as $m)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $m['nim'] }}</td>
                <td>{{ $m['nama'] }}</td>
                <td>{{ $m['ipk'] }}</td>
                <td>
                    @if ($m['ipk'] >= 3.5) Cum Laude
                    @elseif ($m['ipk'] >= 3.0) Baik
                    @else Perlu ditingkatkan
                    @endif
                </td>
                <td>
                    <a href="{{ route('mahasiswa.show', $m['nim']) }}">Detail</a>
                </td>
            </tr>
        @empty
            <tr><td colspan="6">Belum ada data.</td></tr>
        @endforelse
    </table>
@endsection