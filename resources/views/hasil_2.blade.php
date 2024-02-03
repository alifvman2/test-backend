<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test - Soal 2</title>
</head>
<body>

	<div align="center" style="padding-top: 100px; padding-bottom: 50px;">
		<table style="padding-bottom: 50px;">
			@foreach($data as $dataa)
				<tr>
					<td align="center">{{ $dataa }}</td>
				</tr>
			@endforeach
		</table>
		<a href="{{ route('index') }}" style="padding-left: 50px; ">Home</a>
	</div>
	

</body>
</html>