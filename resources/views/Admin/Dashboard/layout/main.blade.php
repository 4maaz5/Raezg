<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Raezg</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('Admin/images/logos/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('./Admin/css/styles.min.css') }}" />
</head>

<body>
    @include('Admin.Dashboard.layout.sidebar')
    @yield('main')

    <script src="{{ asset('Admin/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('Admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('Admin/js/app.min.js') }}"></script>
    <script src="{{ asset('Admin/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Admin/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('Admin/js/dashboard.js') }}"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

</body>

</html>
