<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container mt-4">
    <h2>Data Wali Murid</h2>
        <a href="{{ route('wali.create') }}" class="btn btn-success mb-3">Tambah Wali Murid</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Wali</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wali as $w)
                <tr>
                    <td>{{ $w->nama_wali }}</td>
                    <td>{{ $w->kontak }}</td>
                    <td>
                        <a href="{{ route('wali.edit', $w->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('wali.destroy', $w->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>
</body>
</html>
    

