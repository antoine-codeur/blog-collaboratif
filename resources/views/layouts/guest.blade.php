<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Style -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        @vite(['resources/js/app.js'])
    </head>
    <body class="">
        <div class="main">
            <a href="/">
                <x-application-logo class="indexIcon" />
            </a>
            <iframe class="background" src='https://my.spline.design/3dtextbluecopy-4f8e54b8f2325f7f264b898935ec4067/' frameborder='0' width='100%' height='100%'></iframe>
            <div class="wrapper">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
