<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <Link href="{{ asset('css/app.css')}}" rel="stylesheet" />
    </head>
    <body>
        <div class="app"> </div>
        <div class="content">
            <div id="dutylist" class="title m-b-md">
            </div>
        </div>
        <div id="index"> </div>
    </body>
    <script type="text/javascript" src="js/app.js"></script>
</html>
