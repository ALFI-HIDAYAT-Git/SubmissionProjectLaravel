<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mata Kuliah</title>
</head>
<body class="container mt-5">
    <h2>Detail Mata Kuliah</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Kode Mata Kuliah:</strong> {{ $matakuliah->kode_matakuliah }}</p>
            <p><strong>Nama Mata Kuliah:</strong> {{ $matakuliah->nama_matakuliah }}</p>
            <p><strong>Jumlah SKS:</strong> {{ $matakuliah->sks }}</p>
            <p><strong>Tanggal Dibuat (created_at):</strong> {{ $matakuliah->created_at }}</p>
            <p><strong>Tanggal Diperbarui (updated_at):</strong> {{ $matakuliah->updated_at }}</p>
            <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</body>
</html>