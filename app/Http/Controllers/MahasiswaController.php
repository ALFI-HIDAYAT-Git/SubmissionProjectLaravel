<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Latihan 6.a: Method profil()
    public function profil()
    {
        $nama = 'Budi Santoso';
        $nim = '220101001';
        $prodi = 'Teknik Informatika';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    // Data dummy mahasiswa untuk Latihan 6.b & 6.c
    private array $dataMahasiswa = [
        ['nim' => '220101001', 'nama' => 'Budi Santoso', 'ipk' => 3.75],
        ['nim' => '220101002', 'nama' => 'Siti Rahma', 'ipk' => 3.20],
        ['nim' => '220101003', 'nama' => 'Andi Wijaya', 'ipk' => 2.85],
        ['nim' => '220101004', 'nama' => 'Dewi Lestari', 'ipk' => 1.80],
        ['nim' => '220101005', 'nama' => 'Eko Prasetyo', 'ipk' => 3.55],
    ];

    // Latihan 6.b: Method daftar()
    public function daftar()
    {
        $mahasiswa = $this->dataMahasiswa;

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    // Latihan 6.c: Method detail()
    public function detail($nim)
    {
        $mhs = collect($this->dataMahasiswa)->firstWhere('nim', $nim);

        abort_unless($mhs, 404);

        return view('mahasiswa.detail', compact('mhs'));
    }
}