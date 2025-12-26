<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width:100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 6px; }
        th { background: #eaeaea; }
        h2 { text-align: center; }
    </style>
</head>
<body>

<h2>Laporan Konsultasi</h2>
<p><strong>Tanggal Cetak:</strong> {{ date('d-m-Y') }}</p>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nama dokter</th>
            <th>Topik</th>
            <th>Tanggal</th>
            <th>Deskripsi</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($konsultasi as $k)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->nama_dokter }}</td>
            <td>{{ $k->topik }}</td>
            <td>{{ $k->tanggal }}</td>
            <td>{{ $k->deskripsi }}</td>
            <td>{{ $k->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
