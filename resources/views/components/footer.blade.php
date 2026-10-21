
<footer class="border-t border-gray-200 text-center py-6 text-xs text-gray-500">
    <div class="max-w-6xl mx-auto px-6">
        <a href="{{ url('/aviso-privacidad') }}"
           class="hover:text-slate-900">
            Aviso de Privacidad
        </a>

        &nbsp;|&nbsp;

        <a href="{{ url('/terminos') }}"
           class="hover:text-slate-900">
            Términos y Condiciones
        </a>

        &nbsp;|&nbsp;

        <span>Redes Sociales</span>

        <p class="mt-3">
            &copy; {{ date('Y') }} Banco de Alimentos
        </p>
    </div>
</footer>
