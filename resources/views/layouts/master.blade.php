<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>App Name - @yield('title')</title>
	<meta name="viewport" content="width=device-width">
</head>
<body>
@section('sidebar')
	This is the master sidebar.
@yield('sidebar')

	<div class="container">
		@yield('content')
	</div>
</body>
</html>