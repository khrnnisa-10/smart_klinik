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

<h2>Laporan Jadwal Reservasi</h2>
<p><strong>Tanggal Cetak:</strong> {{ date('d-m-Y') }}</p>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Pasien</th>
            <th>Jenis Konsultasi</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reservasis as $r)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $r->nama_pasien }}</td>
            <td>{{ $r->jenis_konsultasi }}</td>
            <td>{{ $r->tanggal_reservasi }}</td>
            <td>{{ $r->waktu }}</td>
            <td>{{ $r->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
