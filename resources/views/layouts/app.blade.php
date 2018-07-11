<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/tabler.css') }}" rel="stylesheet">
</head>
<body>
    <div class="page">
        <div class="page-main">

            @include('layouts.header')

            @include('layouts.navbar')

            <div class="my-3 my-md-5">
                @yield('content')
            </div>

        </div>

        @include('layouts.footer')
    </div>
</body>
</html>
