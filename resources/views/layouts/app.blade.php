<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- googleフォント -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
	<!-- Bootstrap 5 -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script src="{{ asset('js/app.js') }}"></script>
    <!-- reset_css -->
    <link href="{{ asset('css/layouts/reset.css') }}" rel="stylesheet">
	<!-- css -->
    <link href="{{ asset('css/layouts/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.header')
    @include('layouts.alert')
    @yield('content')
    @include('layouts.footer')
</body>
</html>
