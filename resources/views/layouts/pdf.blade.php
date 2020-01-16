<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Kashif">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blues Den</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href={{asset('img/favicon.png')}}>
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
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/e83b24a96f.js" crossorigin="anonymous"></script>
</head>
<body>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-1">
                <div class="logo">
                    <a href="/"><img src={{ asset('img/favicon.png') }} alt=""></a>
                </div>
            </div>
            <div class="col-8">
                <ul>
                    <li><a href="/" class="text-lg-left display-5">bluesden.co</a></li>
                    <li><a href="mailto:info@bluesden.co" class="text-lg-left display-5">info@bluesden.co</a></li>
                    <li><p class="text-lg-left display-5">29/13, Block-C, Tajmohal Road, Mohammadpur, Dhaka-1207</a></li>
                </ul>
            </div>
        </div>
    </div><br><br><hr>
    
    @yield('pdf-content')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>