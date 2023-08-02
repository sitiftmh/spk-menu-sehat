<!DOCTYPE html>
<html>

<head>
	<title>Laporan Rekapan Rekomendasi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
	<style type="text/css">
		table tr td,
		table tr th {
			font-size: 9pt;
		}
	</style>
	<center>
		<h4>LAPORAN REKAPITULASI HARIAN</h4>
		<h4>HASIL SPK REKOMENDASI MENU SEHAT</h4>
		<h4>KANTIN UNIVERSITAS MUHAMMADIYAH BANJARMASIN</h4><br>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Kategori</th>
				<th>Nama Menu</th>
				<th>Karbohidrat</th>
				<th>Gula</th>
				<th>Lemak</th>
				<th>Protein</th>
				<th>Kalori</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($data as $k => $v)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$v['tanggal']}}</td>
				<td>{{$v['id_kategorimenu']}}</td>
				<td>{{$v['daftar_menu']}}</td>
				<td>{{$v['karbohidrat']}}</td>
				<td>{{$v['gula']}}</td>
				<td>{{$v['lemak']}}</td>
				<td>{{$v['protein']}}</td>
				<td>{{$v['kalori']}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>