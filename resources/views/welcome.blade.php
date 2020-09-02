<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SALES SYSTEM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/cover.css') }}">
        
        {{--  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.5/examples/cover/cover.css">  --}}

    </head>
    <body class="text-center">
        <div id="app">

        </div>

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
