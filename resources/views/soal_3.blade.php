<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test - Soal 3</title>
</head>
<body>

	<div align="center" style="padding-top: 100px;">
		<form action="{{ route('jawab_3') }}" method="post" style="padding-bottom: 50px;">
			@csrf
			<div style="padding-bottom: 20px;">
				<label>Barang</label>
				<select name="barang">
					<option selected disabled>Pilih Barang</option>
					<option value="99900">Barang A</option>
					<option value="49900">Barang B</option>
				</select>
			</div>
			<!-- <input type="text" name="harga" id="harga" disabled> -->
			<div style="padding-bottom: 20px;">
				<label>Tanggal Pembelian</label>
				<input type="date" name="tanggal">
			</div>
			<div style="padding-bottom: 20px;">
				<label>Jumlah Pembelian</label>
				<input type="number" name="qty">
			</div>
			<button type="submit">Submit</button>
		</form>
		<a href="{{ route('index') }}" style="padding-left: 50px; ">Home</a>
	</div>

</body>
</html>