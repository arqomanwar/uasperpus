<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        table {
                border-collapse: collapse;
                width: 100%;
        }
        td,
        th {
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA MAHASISWA</th>
                <th scope="col">BUKU</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">STATUS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $key => $item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item->mahasiswa->nama_mhs }}</td>
                    <td>{{ $item->buku->judul }}</td>
                    <td>{{ $item->tgl_pinjam }}</td>
                    <td>{{ $item->tgl_kembali }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
