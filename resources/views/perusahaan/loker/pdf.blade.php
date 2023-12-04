<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Download PDF Data Loker</title>
</head>
<style type="text/css">
	.table1 {
    font-family: sans-serif;
    color: #232323;
    border-collapse: collapse;
    text-align: center;
}
 
.table1, th, td {
    border: 1px solid black;
    padding: 8px 20px;
}
h2 {
    text-align: center;
}  
</style>

<body>
<h2>DATA LOKER</h2>
    <table class="table1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Lulusan</th>
                <th>Jurusan</th>
                <th>Skill</th>
                <th>Pengalaman Kerja</th>
                <th>Syarat</th>
                <th>Tanggung Jawab</th>
                <th>Deskripsi</th>
                <th>Batas Lamaran</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lokers as $loker)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $loker->nama }}</td>
                <td>{{ $loker->jabatan }}</td>
                <td>{{ $loker->lulusan }}</td>
                <td>{{ $loker->jurusan }}</td>
                <td>{{ $loker->skill }}</td>
                <td>{{ $loker->pengalaman_kerja }}</td>
                <td>{{ $loker->syarat }}</td>
                <td>{{ $loker->tanggung_jawab }}</td>
                <td>{{ $loker->deskripsi }}</td>
                <td>{{ $loker->batas_lamaran }}</td>
                <td>{{ $loker->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>