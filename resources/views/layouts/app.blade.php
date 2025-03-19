<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Coupon Codes - Retailescaper </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/admin/images/favicon.png">
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">

    <!-- Scripts -->

</head>
<body class="h-100">


            @yield('content')


</body>
</html>
