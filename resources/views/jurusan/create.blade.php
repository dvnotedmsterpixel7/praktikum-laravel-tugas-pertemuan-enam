<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Jurusan</title>
</head>
<Body>
    <h1>Tamabah Data Jurusan</h1>

    <form action="{{ route('jurusan.store)}}" method="POST">
        @csrf
        <div>
            <label>Kode Jurusan</label>
            <input type="text" name="code"
                value="{{ old('code') }}">
            @error('code')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
        <a href="{{ route('jurusan.index') }}">Kembali</a>
</form>
</Body>
</html>