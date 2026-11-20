<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mata Kuliah</title>
</head>
<body>
    <h2>Daftar Mata Kuliah</h2>
    <a href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nomor</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>

        @foreach ($matakuliah as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->kode_matakuliah }}</td>
                <td>{{ $item->nama_matakuliah }}</td>
                <td>{{ $item->sks }}</td>
                <td>
                    Detail
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>