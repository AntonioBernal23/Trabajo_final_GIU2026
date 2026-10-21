<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Banco de Alimentos')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    @stack('styles')
</head>
<body class="min-h-screen flex flex-col bg-white text-slate-800 antialiased">

    @include('components.navbar')

    <div class="flex-1">
        @yield('content')
    </div>

    @include('components.footer')

    @stack('scripts')
</body>
</html>