<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Wali Murid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>{{ isset($wali_murid) ? 'Edit' : 'Tambah' }} Wali Murid</h2>
        <form action="{{ isset($wali_murid) ? route('wali.update', $wali_murid->id) : route('wali.store') }}" method="POST">
            @csrf
            @if (isset($wali_murid))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="nama_wali" class="form-label">Nama Wali</label>
                <input type="text" class="form-control" name="nama_wali" value="{{ old('nama_wali', $wali_murid->nama_wali ?? '') }}" required>
            </div>
            <div class="mb-3">
                <label for="kontak" class="form-label">No Telepon</label>
                <input type="text" class="form-control" name="kontak" value="{{ old('kontak', $wali_murid->kontak ?? '') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('wali.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
