<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Welcome')</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<link rel='icon' href='/images/favicon.ico'>--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    {{-- For page specific css --}}
    @stack('head_scripts')
</head>

<body>
    @yield('layout')
    <script src="{{ mix('/js/app.js') }}"></script>
    @stack('body_scripts')
</body>
</html>
