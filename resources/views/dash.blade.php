<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}"> <!-- Inclui o CSS -->
    <link rel="stylesheet" href="{{ asset('css/root.css') }}"> <!-- Inclui o CSS -->
    </head>
    <body>
        <!-- Inclui a navbar -->
        @include('templates.navbar') <!-- Inclui a navbar -->
        

        <!-- Inclui o footer -->
        @include('templates.footer') <!-- Inclui a navbar -->
    </script>
    </body>
</html>
