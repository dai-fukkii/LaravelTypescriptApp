<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('scripts')
        @yield('css')
    </head>
    <body>
        @include('layouts.header')
                @yield('content')
    </body>
</html>
