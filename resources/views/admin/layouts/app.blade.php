<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    @vite(['resources/plugins/fontawesome-free/css/all.min.css'])
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    @vite(['resources/dist/css/adminlte.min.css'])
    <!-- overlayScrollbars -->
    @vite(['resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'])
    <!-- Daterange picker -->
    @vite(['resources/plugins/daterangepicker/daterangepicker.css'])
</head>
<body class="hold-transition sidebar-mini layout-fixed">

@include('admin.includes.sidebar')

@yield('content')

<!-- jQuery -->
@vite(['resources/plugins/jquery/jquery.min.js'])
<!-- jQuery UI 1.11.4 -->
@vite(['resources/plugins/jquery-ui/jquery-ui.min.js'])
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
@vite(['resources/plugins/bootstrap/js/bootstrap.bundle.min.js'])
<!-- daterangepicker -->
@vite(['resources/plugins/moment/moment.min.js'])
@vite(['resources/plugins/daterangepicker/daterangepicker.js'])
<!-- overlayScrollbars -->
@vite(['resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'])
<!-- AdminLTE App -->
@vite(['resources/dist/js/adminlte.js'])
<!-- AdminLTE for demo purposes -->
@vite(['resources/dist/js/demo.js'])
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
@vite(['resources/dist/js/pages/dashboard.js'])
</body>
</html>
