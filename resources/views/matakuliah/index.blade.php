<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Kuliah</title>
</head>
<body class="container mt-5">
    <h2>Daftar Mata Kuliah</h2>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">Tambah Mata Kuliah</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matakuliah as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->kode_matakuliah }}</td>
                <td>{{ $item->nama_matakuliah }}</td>
                <td>{{ $item->sks }}</td>
                <td>
                    <a href="{{ route('matakuliah.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>