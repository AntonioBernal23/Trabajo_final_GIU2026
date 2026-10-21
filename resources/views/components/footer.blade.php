<!-- PIE DE PÁGINA -->
<footer class="mt-auto pt-12 pb-6 bg-[rgba(30,41,59,0.98)] text-white">
    <div class="max-w-7xl mx-auto px-4 text-center md:text-left">
        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-[1.5fr_1fr_1fr_1.2fr] gap-8 text-center md:text-left">

            <!-- Columna 1: Identidad -->
            <div class="mt-3">
                <h6 class="uppercase mb-3 font-bold text-blue-500">🍏 Banco de Alimentos</h6>
                <p class="text-sm text-white/50">
                    Uniendo esfuerzos con la comunidad, empresas y voluntarios para reducir el desperdicio de comida y combatir el hambre.
                </p>
            </div>

            <!-- Columna 2: Enlaces Rápidos -->
            <div class="mt-3">
                <h6 class="uppercase mb-3 font-bold text-white">Navegación</h6>
                <p class="mb-2"><a href="{{ route('home') }}" class="text-white/50 no-underline text-sm hover:text-white">Inicio</a></p>
                <p class="mb-2"><a href="{{ route('nosotros') }}" class="text-white/50 no-underline text-sm hover:text-white">Quiénes Somos</a></p>
                <p class="mb-2"><a href="{{ route('solicitar.ayuda') }}" class="text-white/50 no-underline text-sm hover:text-white">Necesito Ayuda</a></p>
                <p class="mb-2"><a href="{{ route('donar') }}" class="text-white/50 no-underline text-sm hover:text-white">Cómo Donar</a></p>
            </div>

            <!-- Columna 3: Datos de Contacto -->
            <div class="mt-3">
                <h6 class="uppercase mb-3 font-bold text-white">Contacto</h6>
                <p class="text-sm text-white/50 mb-2">📍 Av. Principal #123, Centro</p>
                <p class="text-sm text-white/50 mb-2">✉️ contacto@bancodealimentos.org</p>
                <p class="text-sm text-white/50 mb-2">📞 (33) 3810-6595</p>
            </div>

            <!-- Columna 4: Horarios de Atención -->
            <div class="mt-3">
                <h6 class="uppercase mb-3 font-bold text-white">Horarios de Atención</h6>
                <p class="text-sm text-white/50 mb-1"><strong>Acopio de Alimentos:</strong></p>
                <p class="text-sm text-white/50 mb-2">Lun a Vie: 8:00 AM - 4:00 PM</p>
                <p class="text-sm text-white/50 mb-1"><strong>Entrega a Comedores:</strong></p>
                <p class="text-sm text-white/50">Lun a Sáb: 9:00 AM - 2:00 PM</p>
            </div>

        </div>

        <hr class="my-6 border-0 border-t border-white/20">

        <!-- Copyright -->
        <p class="text-sm text-white/50 text-center m-0">
            © {{ date('Y') }} Banco de Alimentos Comunitario. Todos los derechos reservados.
        </p>
    </div>
</footer>