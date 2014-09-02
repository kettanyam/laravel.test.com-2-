<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Message Board</title>
	{{ HTML::style('css/bootstrap.css')}}
</head>
<body>
	<div class="newest">

		<h1>Which you HAVE TO know......</h1>
		@foreach($news as $new)
		<h1>{{ $new->newscontent}}</h1>
		<br>
		@endforeach
		<a href="{{$home_url}}/newsupdate">uUPATEe</a>
	</div>

	<div class="welcome">
		
		<h1>Leave a message now!</h1>
		<a href="{{$home_url}}/create">CREATE</a>
		<br>
		@foreach($content as $message)
		<h2>{{ $message -> username}} says: <br> {{ $message -> content}} <br> Id {{ $message -> mbid}}</h2>
		<a href="{{$home_url}}/update/{{ $message -> mbid}}">UPDATE</a>
		&nbsp&nbsp
		<a href="{{$home_url}}/delete/{{ $message -> mbid}}">DELETE</a>
		@endforeach
	</div>

</body>
</html>