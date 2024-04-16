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
        <div class="style-app">
            @auth 
                @include('layouts.navigation')
            @else
                <script>window.location.href = "{{ route('login') }}";</script>
            @endauth
            <main class="content-container">
                @yield('content')
            </main>
        </div>
    </body>
</html>
