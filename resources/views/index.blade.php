<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cruds</title>

        <!-- Styles -->
        <style>
            html, body {
                margin: 0;
                padding: 0;
                background-color: #d1d1d1;
                height: 100%;
                width: 100%;
                margin: 0;
            }

            #mute {
                position: absolute;
            }
            #mute.on {
                opacity: 0.7;
                z-index: 1000;
                background: white;
                height: 100%;
                width: 100%;
                padding: 0;
                margin: 0;
            }
        </style>
        <meta name="csrf-token" content="{{ csrf_token() }}" >
    </head>
    <body>
        <div id="mute"></div>
        <div id="app"></div>
        <script src="/js/app.js"></script>
    </body>
</html>
