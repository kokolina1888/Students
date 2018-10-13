<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
	<nav>
		<ul>
			<li>
				<a href="{{ route('home') }}">
					Home
				</a>
			</li>
			<li>
				<a href="{{ route('profile') }}">
					Profile
				</a>
			</li>
			<li>
				<a href="{{ route('homeworks') }}">
					Homeworks
				</a>
			</li>
		</ul>
	</nav>
	@yield('content')
</body>
</html>