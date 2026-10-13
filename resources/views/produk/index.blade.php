@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
    <h1>Daftar Produk</h1>

    {{-- Komponen Alert --}}
    <x-alert tipe="sukses">Data berhasil disimpan.</x-alert>

    {{-- Komponen Kartu --}}
    <x-kartu>
        <x-slot:judul>Keyboard</x-slot:judul>
        Harga Rp 150.000
    </x-kartu>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produk as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p['nama'] }}</td>
                    
                    {{-- Komponen harga-produk dipasang di sini (di dalam loop $p) --}}
                    <td><x-harga-produk :nilai="$p['harga']" :diskon="true" /></td>
                    
                    <td>
                        @if ($p['stok'] > 10)
                            Aman
                        @elseif ($p['stok'] > 0)
                            Menipis
                        @else
                            Habis
                        @endif
                    </td>
                    <td><a href="{{ route('produk.show', $p['id']) }}">Detail</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

@push('scripts')
    <script>
        console.log('produk dimuat');
    </script>
@endpush