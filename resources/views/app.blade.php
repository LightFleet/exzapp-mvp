<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animations/css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animations/css/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animations/css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animations/css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animations/css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animations/css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animations/css/custom.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    @yield('stylesheets')

</head>
<body class="stretched">

    <div id="wrapper" class="clearfix">

        @yield('content')

    </div>

<!-- JavaScripts
============================================= -->
<script src="{{asset('css/animations/js/jquery.js')}}"></script>
<script src="{{asset('css/animations/js/plugins.min.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{asset('css/animations/js/functions.js')}}"></script>

@yield('footer-scripts')

</body>
</html>
