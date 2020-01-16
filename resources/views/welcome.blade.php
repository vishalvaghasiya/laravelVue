<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="icon" href="<%= BASE_URL %>favicon.ico">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<%= BASE_URL %>css/materialdesignicons.min.css"/>
    <link rel="stylesheet" type="text/css" href="<%= BASE_URL %>css/materialdesignicons.min.css.map"/>
    <link rel="stylesheet" type="text/css" href="<%= BASE_URL %>css/vendor.bundle.base.css"/>
    <link rel="stylesheet" type="text/css" href="<%= BASE_URL %>css/style.css"/>
    <link rel="shortcut icon" href="<%= BASE_URL %>images/favicon.png"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div id="app">
    <div class="container-scroller">
    </div>
</div>


<script src="<%= BASE_URL %>js/vendor.bundle.base.js"></script>
<script type="application/javascript" src="<%= BASE_URL %>js/off-canvas.js"></script>
<script type="application/javascript" src="<%= BASE_URL %>js/hoverable-collapse.js"></script>
<script type="application/javascript" src="<%= BASE_URL %>js/misc.js"></script>
<script type="application/javascript" src="<%= BASE_URL %>js/dashboard.js"></script>
<script type="application/javascript" src="<%= BASE_URL %>js/Chart.min.js"></script>
<script type="application/javascript" src="<%= BASE_URL %>js/todolist.js"></script>
<script type="application/javascript" src="<%= BASE_URL %>js/chart.js"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
