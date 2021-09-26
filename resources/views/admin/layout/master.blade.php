<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('links')
</head>

<body>

    @yield('body')
    @yield('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
