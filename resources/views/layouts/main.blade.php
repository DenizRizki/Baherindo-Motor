<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle', 'Baherindo Motor')</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.navbar')
    <div>
        @yield('content')
    </div>
    @include('layouts.footer')
</body>
</html>