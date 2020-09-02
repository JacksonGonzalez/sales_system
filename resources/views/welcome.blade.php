<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SALES SYSTEM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        {{--  <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">  --}}

        {{--  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.5/examples/cover/cover.css">  --}}

    </head>
    <body class="text-center">
        <div id="app">

        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
        <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
        <script src="{{ asset('js/svgxuse.min.js') }}"></script>
        <script src="{{ asset('js/js.js') }}"></script>
        {{--  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>  --}}
    </body>
</html>
