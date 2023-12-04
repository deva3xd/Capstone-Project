<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Download PDF Data Wawancara</title>
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
<h2>DATA WAWANCARA</h2>
    <table class="table1">
        <thead>
            <tr>
                <th>No.</th>
                <th>ID Loker</th>
                <th>ID Profile Pelamar</th>
                <th>Jadwal</th>
                <th>Catatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($wawancaras as $wawancara)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $wawancara->id_loker }}</td>
                <td>{{ $wawancara->id_profil_pelamar }}</td>
                <td>{{ $wawancara->jadwal }}</td>
                <td>{{ $wawancara->catatan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>