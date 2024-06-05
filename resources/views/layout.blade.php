<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> 
    <script src="https://kit.fontawesome.com/416b6db665.js" crossorigin="anonymous"></script>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('style.css')}}">
</head>
<body>
    @include('header')
    
    @yield('content')    
     
</body>  
@include('footer')

</html>