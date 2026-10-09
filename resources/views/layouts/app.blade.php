<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Banco de Alimentos')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Poppins', 'ui-sans-serif', 'system-ui', 'sans-serif'] },
                    colors: {
                        brand: '#0b6fd6',
                        pill: '#c9d1da',
                        cyanx: '#3dd6ff',
                        greenx: '#7fdc5a',
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen flex flex-col font-sans antialiased text-slate-900
             bg-gradient-to-br from-[#e6dcff] via-[#fbe6ef] via-40% to-[#cffcf8]">

    @php
        $links = [
            ['inicio',      'dashboard',          'dashboard'],
            ['inventario',  'inventario.index',   'inventario.*'],
            ['donaciones',  'donaciones.create',  'donaciones.*'],
            ['despachos',   'despachos.index',    'despachos.*'],
            ['comedores',   'comedores.index',    'comedores.*'],
            ['reportes',    'reportes.index',     'reportes.*'],
        ];
    @endphp

    <!-- HEADER / NAV -->
    <header class="sticky top-0 z-50 bg-white/30 backdrop-blur-md border-b-2 border-transparent
                   [border-image:linear-gradient(to_right,#c9b8ff,#3b6fd9,#c9b8ff)_1]">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-8 py-4 flex items-center justify-between gap-4">
            <nav class="flex items-center gap-5 sm:gap-10 overflow-x-auto text-sm font-semibold text-brand">
                <a href="{{ route('dashboard') }}" class="whitespace-nowrap font-bold hover:opacity-70 transition">banco de alimentos</a>
                @foreach ($links as [$texto, $ruta, $patron])
                    <a href="{{ route($ruta) }}"
                       class="whitespace-nowrap hover:opacity-70 transition {{ request()->routeIs($patron) ? 'underline underline-offset-8 decoration-2' : '' }}">
                        {{ $texto }}
                    </a>
                @endforeach
            </nav>

            <!-- Menú extra -->
            <div class="relative shrink-0">
                <button type="button" id="btnMenu" aria-label="Menú" aria-expanded="false"
                        class="flex flex-col gap-[3px] w-7 items-end text-brand hover:opacity-70 transition">
                    <span class="h-[3px] w-7 rounded bg-gradient-to-r from-brand to-white"></span>
                    <span class="h-[3px] w-5 rounded bg-gradient-to-r from-brand to-white"></span>
                    <span class="h-[3px] w-7 rounded bg-gradient-to-r from-brand to-white"></span>
                </button>
                <div id="menuExtra" class="hidden absolute right-0 mt-3 w-52 bg-white rounded-2xl shadow-xl py-2 text-sm font-semibold text-brand">
                    <a href="{{ route('donantes.index') }}" class="block px-5 py-2 hover:bg-slate-100">donantes</a>
                    <a href="{{ route('vencimientos.index') }}" class="block px-5 py-2 hover:bg-slate-100">próximos a vencer</a>
                    <a href="{{ route('almacen.index') }}" class="block px-5 py-2 hover:bg-slate-100">almacén central</a>
                    <a href="{{ route('perfil.edit') }}" class="block px-5 py-2 hover:bg-slate-100">mi perfil</a>
                </div>
            </div>
        </div>
    </header>

    <!-- CONTENIDO -->
    <main class="flex-1 w-full px-4 sm:px-8 py-8 sm:py-12 flex flex-col items-center">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-black text-white text-left py-4 px-4 text-sm font-bold">
        [FOOTER] © 2026 Banco de Alimentos - Todos los derechos reservados
    </footer>

    <script>
        (function () {
            const btn = document.getElementById('btnMenu');
            const menu = document.getElementById('menuExtra');
            btn.addEventListener('click', e => {
                e.stopPropagation();
                const abierto = menu.classList.toggle('hidden') === false;
                btn.setAttribute('aria-expanded', abierto);
            });
            document.addEventListener('click', () => menu.classList.add('hidden'));
        })();
    </script>
    @stack('scripts')
</body>
</html>