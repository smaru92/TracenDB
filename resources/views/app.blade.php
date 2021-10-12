<!doctype html>
<html>
	<head>
		@include('template.header')
	</head>
	<body>
		@include('template.nav')

		@yield('content')


		@include('template.footer')
	</body>
</html>
