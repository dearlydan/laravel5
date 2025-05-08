@section('content')
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
            <label for="no_telepon" class="form-label">No Telepon</label>
            <input type="text" class="form-control" name="no_telepon" value="{{ old('no_telepon', $wali_murid->no_telepon ?? '') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('wali.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
