@include('layouts.header')
@include('layouts.navbar')
@include('layouts.scripts')

@include('layouts.google-analytics')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">

	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

	<!-- Fonts -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    @yield('styles')
	<!-- Main Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">

    @yield('google-analytics')
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