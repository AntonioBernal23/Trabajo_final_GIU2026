
<header class="border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-center gap-4">

        <div class="text-xl font-bold text-slate-800 tracking-tight">
            Banco de Alimentos
        </div>

        <nav>
            <ul class="flex flex-wrap justify-center gap-6 text-sm text-gray-600 font-medium">
                <li><a href="{{ url('/') }}" class="hover:text-slate-900 transition">Inicio</a></li>
                <li><a href="{{ url('/preguntas-frecuentes') }}" class="hover:text-slate-900 transition">Preguntas frecuentes</a></li>
                <li><a href="{{ url('/empresas-aliadas') }}" class="hover:text-slate-900 transition">Empresas aliadas</a></li>
                <li><a href="{{ url('/calidad-y-seguridad') }}" class="hover:text-slate-900 transition">Calidad y seguridad</a></li>            
                <li><a href="{{ url('/nuestro-impacto') }}" class="hover:text-slate-900 transition">Nuestro impacto</a></li>            
            </ul>
        </nav>
    </div>
</header>