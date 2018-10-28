<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">

    <!-- Scripts -->
    <script src="/js/jquery-3.3.1.js"></script>
    <script src="/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="/fonts/stylesheet.css" rel="stylesheet">
    <link href="/fontawesome-free-5.4.2-web/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

@yield('content')

</body>
</html>
