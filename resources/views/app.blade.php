<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
        <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/moment"></script>
        <script src="https://cdn.jsdelivr.net/npm/moment-jalaali@0.7.4/build/moment-jalaali.js"></script>


        <!-- Styles -->
{{--        <style type="text/css">--}}
{{--            @font-face{--}}
{{--                font-family: IRANSans;--}}
{{--                src: url("{{ asset('fonts/iransans.ttf') }}")  format("truetype");--}}
{{--            }--}}
{{--            .application {--}}
{{--                font-family: "IRANSans", serif;--}}
{{--            }--}}
{{--            .vpd-input-group {--}}
{{--                width:10px!important;--}}
{{--            }--}}
{{--        </style>--}}

    </head>
    <body>
    <div id="app">
        <app></app>
    </div>

    <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
