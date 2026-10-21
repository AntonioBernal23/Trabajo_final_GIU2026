<!-- TOP / HEADER -->
<header class="bg-white/85 backdrop-blur-[10px] px-4 md:px-10 py-3 border-b-[1.5px] border-indigo-300">
    <div class="flex flex-wrap justify-between items-center gap-3 w-full">

        <!-- LOGO INSTITUCIONAL -->
        <a href="{{ route('home') }}" class="flex items-center no-underline">
            <img src="{{ asset('images/logo.jpg') }}" alt="Banco de Alimentos Comunitario" class="h-12 inline-block">
        </a>

        <!-- NAVEGACIÓN PRINCIPAL -->
        <div class="flex flex-wrap items-center gap-3 md:gap-6">
            <a href="{{ route('home') }}" class="text-blue-600 font-bold text-[15px] no-underline transition-opacity hover:opacity-70">Inicio</a>
            <a href="{{ route('nosotros') }}" class="text-blue-600 font-bold text-[15px] no-underline transition-opacity hover:opacity-70">Nosotros</a>
            <a href="{{ route('solicitar.ayuda') }}" class="text-blue-600 font-bold text-[15px] no-underline transition-opacity hover:opacity-70">Necesito Ayuda</a>
            <a href="{{ route('donar') }}" class="text-blue-600 font-bold text-[15px] no-underline transition-opacity hover:opacity-70">Cómo Donar</a>
            <a href="{{ route('centros') }}" class="text-blue-600 font-bold text-[15px] no-underline transition-opacity hover:opacity-70">Centros de Ayuda</a>

            <!-- MENÚ DESPLEGABLE (≡ en móvil, ⋮ en escritorio) -->
            <div class="relative" id="menu-more">
                <button type="button" id="menu-more-btn" aria-expanded="false" aria-haspopup="true" title="Más opciones"
                        class="bg-transparent border-0 text-blue-600 text-2xl font-bold cursor-pointer px-2.5 leading-none">
                    <span class="md:hidden">≡</span>
                    <span class="hidden md:inline">⋮</span>
                </button>

                <ul id="menu-more-list"
                    class="hidden absolute right-0 mt-2 min-w-[220px] z-50 list-none m-0 py-2.5 bg-white rounded-2xl shadow-[0_8px_25px_rgba(0,0,0,0.12)]">
                    <li><a href="{{ route('voluntariado') }}" class="block px-5 py-2.5 text-sm font-bold text-slate-800 no-underline hover:bg-slate-100 hover:text-blue-600">Voluntariado</a></li>
                    <li><a href="{{ route('impacto') }}" class="block px-5 py-2.5 text-sm font-bold text-slate-800 no-underline hover:bg-slate-100 hover:text-blue-600">Nuestro Impacto</a></li>
                    <li><a href="{{ route('calidad') }}" class="block px-5 py-2.5 text-sm font-bold text-slate-800 no-underline hover:bg-slate-100 hover:text-blue-600">Calidad y Seguridad</a></li>
                    <li><a href="{{ route('aliados') }}" class="block px-5 py-2.5 text-sm font-bold text-slate-800 no-underline hover:bg-slate-100 hover:text-blue-600">Empresas Aliadas</a></li>
                    <li><a href="{{ route('faq') }}" class="block px-5 py-2.5 text-sm font-bold text-slate-800 no-underline hover:bg-slate-100 hover:text-blue-600">Preguntas Frecuentes</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Menú desplegable -->
<script>
    (function () {
        const wrapper = document.getElementById('menu-more');
        const btn = document.getElementById('menu-more-btn');
        const list = document.getElementById('menu-more-list');
        if (!wrapper || !btn || !list) return;

        const close = () => {
            list.classList.add('hidden');
            btn.setAttribute('aria-expanded', 'false');
        };

        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            const open = list.classList.toggle('hidden') === false;
            btn.setAttribute('aria-expanded', open ? 'true' : 'false');
        });

        document.addEventListener('click', (e) => {
            if (!wrapper.contains(e.target)) close();
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') close();
        });
    })();
</script>