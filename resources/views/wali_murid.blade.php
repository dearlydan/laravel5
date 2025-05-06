<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="d-flex justify-content-between mb-3">Data Wali Murid</h2>
    
    <div class="mb-3">
        <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
        <a href="{{ route('siswa') }}" class="btn btn-primary">wali murid</a>
        <a href="{{ route('kelas') }}" class="btn btn-primary">Kelas</a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>