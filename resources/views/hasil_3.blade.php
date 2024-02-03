<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hasil 1</title>
</head>
<body>
	<div align="center" style="padding-top: 100px; padding-bottom: 50px;">
		<table style="padding-bottom: 50px;">
			<tr>
				<td>Harga Barang </td>
				<td>: {{ $harga }}</td>
			</tr>
			<tr>
				<td>Jumlah </td>
				<td>: {{ $qty }}</td>
			</tr>
			<tr>
				<td>Total </td>
				<td>: {{ $total }}</td>
			</tr>
			@if($discon)
				<tr>
					<td>Discon </td>
					<td>: {{ $discon }}</td>
				</tr>
			@endif
			<tr>
				<td>Total Pembayaran</td>
				<td>: {{ $data }}</td>
			</tr>
		</table>
		<a href="{{ route('soal_3') }}" style="padding-right: 50px;">Back</a> <a href="{{ route('index') }}" style="padding-left: 50px; ">Home</a>
	</div>
</body>
</html>