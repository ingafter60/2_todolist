<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todolist</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
	
	<div class="container">
		@include('inc.message')
		@yield('content')
	</div>

	<footer id="footer" class="text-center">
		<p>Copyright &copy; ingafter60 2018</p>
	</footer>
</body>
</html>