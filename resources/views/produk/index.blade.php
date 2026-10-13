@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
    <h1>Daftar Produk</h1>
    <x-alert tipe="sukses">
        Data berhasil disimpan.
    </x-alert>
    <table border="1">
        <tr><th>No</th><th>Nama</th><th>Harga</th><th>Stok</th><th>Aksi</th></tr>
        @forelse ($produk as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p['nama'] }}</td>
                
                {{-- Komponen dibungkus tag <td> agar rapi --}}
                <td>
                    <x-harga-produk :nilai="$p['harga']" :diskon="true" />
                </td>

                <td>
                    @if ($p['stok'] > 10) Aman
                    @elseif ($p['stok'] > 0) Menipis
                    @else Habis
                    @endif
                </td>
                <td><a href="{{ route('produk.show', $p['id']) }}">Detail</a></td>
            </tr>
        @empty
            <tr><td colspan="5">Belum ada produk.</td></tr>
        @endforelse
    </table>
@endsection

@push('scripts')
    <script>console.log('produk dimuat');</script>
@endpush
