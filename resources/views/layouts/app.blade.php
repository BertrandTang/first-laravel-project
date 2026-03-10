<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="UTF-8">
                <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
                @vite(['resources/css/app.css', 'resources/js/app.js'])
                <title>@yield('title')</title>
            </head>
            <body>
                    @include('partials.header')
                <main>
                    @yield('content')
                </main>
                    @include('partials.footer')
        </body>
</html>