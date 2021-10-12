<!doctype html>
<html lang="en">
	<head>
		@include('template.header')
	</head>
    <body class="sb-nav-fixed sb-sidenav-toggled">
		@include('template.nav')
    <div id="layoutSidenav">
        @include('template.sidebar')
        <div id="layoutSidenav_content">
            <main>
            @yield('content')
            </main>
            @include('template.footer')
        </div>
    </div>
        @include('template.js')
	</body>
</html>
