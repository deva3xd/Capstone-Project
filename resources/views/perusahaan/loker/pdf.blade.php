<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Download PDF</title>
</head>

<body>
    <table class="table table-striped table-bordered zero-configuration">
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