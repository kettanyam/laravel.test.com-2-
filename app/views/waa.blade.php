<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>waaaka</title>
</head>
<body>
	<h1> This is waa, {{$id}}</h1>
	<form method="get" action={{$id2}}>
		input id here:<input type="text"><br>
		<input type="submit">
	</form>
	@foreach($data as $da)
	<p> hello, {{ $da -> userName}} </p>
	@endforeach
</body>
</html>