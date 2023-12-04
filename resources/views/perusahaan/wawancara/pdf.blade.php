<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Download PDF</title>
</head>
<style type="text/css">
	table tr td,
	table tr th{
		font-size: 9pt;
	}
</style>

<body>
    <table class="table table-striped table-bordered zero-configuration">
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