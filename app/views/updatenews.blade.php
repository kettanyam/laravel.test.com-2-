<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Message Board</title>
	{{ HTML::style('css/bootstrap.css')}}
</head>
<body>
	<div class="welcome">
				
		<h2>Here's the old message: <br>{{ $newscontent -> newscontent}}</h2>
		<form action="{{$home_url}}/updatednews/{{ $newscontent -> newsid}}" method="post">
			<h1>Enter the new News!</h1><br><input type="text" name="thenews">
			<input type="submit" value="Check!">
		</form>
	</div>

</body>
</html>