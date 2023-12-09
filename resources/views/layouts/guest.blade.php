<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('includes.head')

    <body>

        {{ $slot }}

        @include('includes.footer')

    </body>
</html>
