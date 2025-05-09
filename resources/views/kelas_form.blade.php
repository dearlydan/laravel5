<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Wali Murid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>{{ isset($kelas) ? 'Edit' : 'Tambah' }} Kelas</h2>
    <form action="{{ isset($kelas) ? route('kelas.update', $kelas->id) : route('kelas.store') }}" method="POST">
        @csrf
        @if (isset($kelas))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="nama_kelas" class="form-label">Nama Kelas</label>
            <input type="text" class="form-control" name="nama_kelas" value="{{ old('nama_kelas', $kelas->nama_kelas ?? '') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
