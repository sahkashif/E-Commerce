<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta name="author" content="Kashif">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blues Den</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href={{asset('img/favicon.ico')}}>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- CSS 
    ========================= -->
    <!-- Plugins CSS -->
    <link rel="stylesheet" href={{asset('css/plugins.css')}}>  
    <!-- Main Style CSS -->
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    @include('inc.offcanvas')
    @include('inc.header.header')
   
        @yield('content')
        
    @include('inc.footer.footer')
</body>
</html>