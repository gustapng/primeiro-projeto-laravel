<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu título')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @stack('styles')
    <h1>Meu Layout</h1>
    @yield('content')

    @stack('scripts')
</body>
</html>