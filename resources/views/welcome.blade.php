<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel VUe</title>
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
        {{--<example-try></example-try>
            Error : [Vue warn]: Unknown custom element: <example-try> - did you register the component correctly? For recursive components, make sure to provide the "name" option. (found in <Root>)--}}
    </div>
</div>
<script src="{{asset('js/vendor.bundle.base.js')}}"></script>
<script type="application/javascript" src="{{asset('js/off-canvas.js')}}"></script>
<script type="application/javascript" src="{{asset('js/hoverable-collapse.js')}}"></script>
<script type="application/javascript" src="{{asset('js/misc.js')}}"></script>
<script type="application/javascript" src="{{asset('js/dashboard.js')}}"></script>
<script type="application/javascript" src="{{asset('js/chart.js')}}"></script>
{{-- Error: Uncaught SyntaxError: Unexpected token '<'   || solve beasuce because base url forgot like js/chart.min.js  but here write only chart.min.js--}}
<script type="application/javascript" src="{{asset('js/chart.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/todolist.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
{{--<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>--}}
{{--<script>
    CKEDITOR.replace('editor1');
</script>--}}
</body>
</html>
