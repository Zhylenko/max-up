@include('layouts.header')
@include('layouts.navbar')
@include('layouts.scripts')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">

	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @yield('styles')
	<!-- Main Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">
</head>
<body>
	@yield('navbar')

    @yield('header')
	
	<!-- Content -->
	<div class="blur-bg" id="blur">
	@yield('content')
	</div>

	@yield('scripts')
</body>
</html>