<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test - Soal 1</title>
</head>
<body>

	<div align="center" style="padding-top: 100px;">
		<form action="{{ route('jawab_1') }}" method="post" style="padding-bottom: 50px;">
			@csrf
			<input type="text" name="soal">
			<button type="submit">Submit</button>
		</form>
		<a href="{{ route('index') }}" style="padding-left: 50px; ">Home</a>
	</div>

</body>
</html>