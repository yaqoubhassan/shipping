<!DOCTYPE html>
<html>

<head>
    <title>Prime Safekeeping & Shipping | @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('links')

</head>

<body class="blue page-loading">

    @yield('body')

    @yield('scripts')

</body>

</html>
