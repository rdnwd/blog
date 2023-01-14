<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    @vite(['resources/css/bootstrap.min.css'])
    <!-- animate CSS -->
    @vite(['resources/css/animate.css'])
    <!-- owl carousel CSS -->
    @vite(['resources/css/owl.carousel.min.css'])
    <!-- themify CSS -->
    @vite(['resources/css/themify-icons.css'])
    <!-- flaticon CSS -->
    @vite(['resources/css/liner_icon.css'])
    @vite(['resources/css/search.css'])
    <!-- style CSS -->
    @vite(['resources/css/style.css'])
</head>

<body>
@include('includes.app.header')

@yield('content')

@include('includes.app.footer')

<!-- jquery -->
@vite(['resources/js/jquery-1.12.1.min.js'])
<!-- popper js -->
@vite(['resources/js/popper.min.js'])
<!-- bootstrap js -->
@vite(['resources/js/bootstrap.min.js'])
<!-- custom js -->
@vite(['resources/js/custom.js'])
</body>

</html>
