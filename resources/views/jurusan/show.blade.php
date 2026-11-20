<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Jurusan</title>
</head>
<body>
    <h1>Detail Jurusan</h1>

    <p>Kode: {{ $jurusan->kode }}</p>
    <p>Nama: {{ $jurusan->nama }}</p>
    <p>Waktu Pembuatan: {{ $jurusan->created_at->format('d-m-Y H:i') }}</p>

    <a href="{{ url('/jurusan') }}">Kembali</a>
</body>
</html>
