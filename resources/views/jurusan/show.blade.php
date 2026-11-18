<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Jurusan</title>
</head>
<body>
    <h1>Detail Jurusan</h1>
    <p><strong>Kode:</strong> {{ $jurusan->kode }}</p>
    <p><strong>Nama Jurusan:</strong> {{ $jurusan->nama }}</p>
    <p><strong>Dibuat Pada:</strong> {{ $jurusan->created_at->format('d-m-Y H:i') }}</p>
    <br>
    <a href="{{ url('/jurusan') }}">Kembali ke Daftar Jurusan</a>
</body>
</html>