<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Kuliah</title>
</head>
<body class="container mt-5">
    <h2>Form Tambah Mata Kuliah</h2>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Kode Mata Kuliah</label>
            <input type="text" name="kode_matakuliah" class="form-control" value="{{ old('kode_matakuliah') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Mata Kuliah</label>
            <input type="text" name="nama_matakuliah" class="form-control" value="{{ old('nama_matakuliah') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah SKS (1-6)</label>
            <input type="number" name="sks" class="form-control" min="1" max="6" value="{{ old('sks') }}">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>