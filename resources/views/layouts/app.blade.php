<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @livewireStyles
    <link href="{{asset('assets/css/tailwind.min.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="{{asset('assets/css/feather.css')}}" rel="stylesheet" type="text/css">

    @stack('styles')
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


    <script src="{{asset('assets/js/alpine.min.js')}}"></script>
    <script src="{{asset('assets/js/alpine-ie11.min.js')}}"></script>
    <title>Examer</title>
</head>
<body>

    @yield('content')
    @livewireScripts

    @stack('scripts')

</body>
</html>
