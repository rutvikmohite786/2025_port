<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rutvik Rawal - Portfolio</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/styles.css') }}">

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('user/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('user/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('user/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('user/site.webmanifest') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body id="top">

    @yield('content')

    <!-- Java Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('user/js/plugins.js') }}"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>

    @yield('footer')

</body>
</html>