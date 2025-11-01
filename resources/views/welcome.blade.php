<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel {{ round(microtime(true) - LARAVEL_START, 3) }} s</title>

        <style>
            *{
                margin:0;
                padding: 0;
            }

            .main{
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh
            }
        </style>

    </head>

    <body>
        <div class="main">
            <h1>Laravel Gems</h1>
        <div>
    </body>
</html>
