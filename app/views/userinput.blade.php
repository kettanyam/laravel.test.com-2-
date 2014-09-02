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
		<form action="http://laravel.test.com/createcontent" method="post">
		<h1>Insert your name:</h1><input type="text" name="username"><br>
		<h1>Insert your message:</h1><input type="text" name="usermessage">
		<br>
		<input type="submit" value="Check!">
		</form>
	</div>
</body>
</html>
