<!DOCTYPE html>
<html lang="id">
<head>
    <title>@yield('title', 'Toko Praktikum')</title>
    @stack('styles')
</head>
<body>
    @include('partials.navbar')
    <main>@yield('content')</main>
    <footer>&copy; {{ date('Y') }}</footer>
    @stack('scripts')
</body>
</html>