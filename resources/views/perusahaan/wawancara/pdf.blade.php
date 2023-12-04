<!DOCTYPE html>
<html>
<head>
	<title>Data Wawancara</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 11pt;
            border: 1px solid #999;
            padding: 8px 20px;
		}
        
	</style>
	<center>
		<h5>Data Wawancara</h4>
	</center>
 
	<table class='table table-bordered'>
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