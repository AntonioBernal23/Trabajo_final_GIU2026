<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Alimentos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-700 min-h-screen flex flex-col font-sans">

    <!-- Header / Navbar -->
    <header class="border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="text-xl font-bold text-slate-800 tracking-tight">Banco de Alimentos</div>
            <nav>
                <ul class="flex flex-wrap justify-center space-x-6 text-sm text-gray-600 font-medium">
                    <li><a href="/" class="hover:text-slate-900 transition">Inicio</a></li>
                    <li><a href="/despachos" class="hover:text-slate-900 transition">Despachos</a></li>
                    <li><a href="/donantes" class="hover:text-slate-900 transition">Donantes</a></li>
                    <li><a href="/comedores" class="hover:text-slate-900 transition">Comedores</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Contenido dinámico -->
    <main class="max-w-6xl mx-auto px-6 py-12 flex-grow w-full">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-200 py-6 text-center text-sm text-gray-500">
        <p>&copy; 2026 Banco de Alimentos. Todos los derechos reservados.</p>
    </footer>

</body>
</html>