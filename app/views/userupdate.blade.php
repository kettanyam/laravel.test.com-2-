<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Input Message</title>
	{{ HTML::style('css/bootstrap.css')}}
</head>
<body>
	<div class="welcome">
		hello
		<form action="{{$home_url}}/updatecontent" method="post">
		<h1>Change your message:</h1><input type="text" name="usermessage">
		<br>
		<input type="submit" value="Check!">
		</form>
	</div>
</body>
</html>
