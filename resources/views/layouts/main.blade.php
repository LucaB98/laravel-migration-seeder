<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} | @yield('title')</title>

    {{-- CDNS --}}
    @yield('cdns')

    @vite('resources/js/app.js')
</head>
<body>
    {{-- header --}}
    @include('includes.header')
    {{-- main--}}
    <main class="container">
        @yield('main-content')
    </main>

    {{-- foooter --}}


    {{-- script--}}
    @yield('script')
</body>
</html>