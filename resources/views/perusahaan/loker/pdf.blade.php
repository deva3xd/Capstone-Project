<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Download PDF Data Loker</title>
</head>

<style type="text/css">
	table, th, td {
		padding: 8px 20px;
		text-align: center;
		font-family: sans-serif;
		border-collapse: collapse;
		border: 1px solid black;
	}
	h2 {
		text-align: center;
	}
	th {
		background-color: #d4d4d4;
	}
</style>

<body>
    <h2>DATA LOKER</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Lulusan</th>
                <th>Syarat</th>
                <th>Tanggung Jawab</th>
                <th>Deskripsi</th>
                <th>Batas Lamaran</th>
                <th>Alamat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lokers as $loker)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $loker->nama }}</td>
                <td>{{ $loker->jabatan }}</td>
                <td>{{ $loker->lulusan }}</td>
                <td>{{ $loker->syarat }}</td>
                <td>{{ $loker->tanggung_jawab }}</td>
                <td>{{ $loker->deskripsi }}</td>
                <td>{{ $loker->batas_lamaran }}</td>
                <td>{{ $loker->alamat }}</td>
                <td>{{ $loker->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>