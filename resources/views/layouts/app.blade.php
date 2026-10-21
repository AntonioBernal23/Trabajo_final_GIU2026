<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Banco de Alimentos Comunitario')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    @stack('styles')
</head>
<body class="min-h-screen flex flex-col m-0 p-0 font-sans antialiased text-slate-800 bg-[linear-gradient(135deg,#f3e9ff,#fff0f7_35%,#eafcff_70%,#dffff9)]">

    @include('components.navbar')

    <main class="flex-1 flex flex-col">
        @yield('content')
    </main>

    @include('components.footer')

    @stack('scripts')
</body>
</html>