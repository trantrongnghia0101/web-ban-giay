<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="{{ asset('/admin1/css/style.css') }}">
</head>
<body>
<header>
    <h1>@yield('titlepage')</h1>
</header>

@include('admin.header')

@yield('content')





</body>
</html>
