<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Message Board</title>
	{{ HTML::style('css/bootstrap.css')}}
</head>
<body>
	<div class="welcome">
		
		<h2>Here's the old message: {{ $oldContent -> content}}</h2>
		<form action="{{$home_url}}/updated/{{ $oldContent -> mbid}}" method="post">
			<h1>Enter your new message!</h1><br><input type="text" name="newmessage">
			<input type="submit" value="Check!">
		</form>
	</div>

</body>
</html>