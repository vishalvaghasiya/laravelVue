<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="icon" href="{{asset('favicon.ico')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.7.95/css/materialdesignicons.css">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/mdi/css/materialdesignicons.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.bundle.base.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div id="app">
    <div class="container-scroller">
        <example-app></example-app>
        <example-try></example-try>
    </div>
</div>


<script src="{{asset('js/vendor.bundle.base.js')}}"></script>
<script type="application/javascript" src="{{asset('js/off-canvas.js')}}"></script>
<script type="application/javascript" src="{{asset('js/hoverable-collapse.js')}}"></script>
<script type="application/javascript" src="{{asset('js/misc.js')}}"></script>
<script type="application/javascript" src="{{asset('js/dashboard.js')}}"></script>
{{--<script type="application/javascript" src="{{asset('js/chart.js')}}"></script>--}}
<script type="application/javascript" src="{{asset('js/Chart.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/todolist.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
