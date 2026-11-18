<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    // Menampilkan semua data mata kuliah 
    public function index()
    {
        $matakuliah = MataKuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('matakuliah.create');
    }

    // Menyimpan data
    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|unique:matakuliah,kode_matakuliah',
            'nama_matakuliah' => 'required|string|max:100',
            'sks'             => 'required|integer|between:1,6',
        ], [
            'kode_matakuliah.required' => 'Kode mata kuliah wajib diisi.',
            'kode_matakuliah.unique'   => 'Kode mata kuliah sudah ada, gunakan kode lain.',
            'nama_matakuliah.required' => 'Nama mata kuliah wajib diisi.',
            'sks.required'             => 'Jumlah SKS wajib diisi.',
            'sks.between'              => 'Jumlah SKS harus di antara 1 sampai 6.',
        ]);

        MataKuliah::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks'             => $request->sks,
        ]);

        return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil disimpan.');
    }

    // Menampilkan detail mata kuliah dengan ID
    public function show($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        return view('matakuliah.show', compact('matakuliah'));
    }
}