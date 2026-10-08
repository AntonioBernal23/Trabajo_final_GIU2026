<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banco de Alimentos - Nosotros</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-700 min-h-screen flex flex-col font-sans">

  <header class="border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-center gap-4">
      <div class="text-xl font-bold text-slate-800 tracking-tight">logo</div>
      <nav>
        <ul class="flex flex-wrap justify-center space-x-6 text-sm text-gray-600 font-medium">
          <li><a href="/" class="hover:text-slate-900 transition">Inicio</a></li>
          <li><a href="/nosotros" class="hover:text-slate-900 transition">Nosotros</a></li>
          <li><a href="/servicios" class="hover:text-slate-900 transition">Servicios</a></li>
          <li><a href="#" class="hover:text-slate-900 transition">Blog</a></li>
          <li><a href="#" class="hover:text-slate-900 transition">FAQ</a></li>
          <li><a href="#" class="hover:text-slate-900 transition">Portafolio</a></li>
          <li><a href="#" class="hover:text-slate-900 transition">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="max-w-6xl mx-auto px-6 py-12 flex-grow w-full">
    <!-- Título Sección -->
    <h1 class="text-2xl font-bold text-center text-slate-800 mb-10">Sobre Nuestra Empresa</h1>

    <!-- Misión y Visión (Grid de 2 Columnas) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16 max-w-4xl mx-auto">
      <div class="border border-gray-200 p-8">
        <h2 class="font-bold text-slate-800 mb-3 text-base">Misión</h2>
        <p class="text-xs text-gray-500 leading-relaxed">
          Rescatar alimentos para combatir el hambre y mejorar la nutrición de las poblaciones en vulnerabilidad social mediante alianzas estratégicas sostenibles.
        </p>
      </div>

      <div class="border border-gray-200 p-8">
        <h2 class="font-bold text-slate-800 mb-3 text-base">Visión</h2>
        <p class="text-xs text-gray-500 leading-relaxed">
          Ser una red modelo sostenible e integral en la distribución eficiente y justa de recursos alimentarios a nivel regional.
        </p>
      </div>
    </div>

    <!-- Nuestro Equipo (Avatar Circular) -->
    <section class="text-center">
      <h2 class="text-xl font-bold text-slate-800 mb-10">Nuestro Equipo</h2>
      
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 max-w-4xl mx-auto">
        
        <div class="flex flex-col items-center">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=300&q=80" 
               alt="Antonio Bernal" 
               class="w-32 h-32 rounded-full object-cover mb-4 bg-gray-200">
          <h3 class="font-bold text-slate-800 text-sm">Antonio Bernal[cite: 1]</h3>
          <p class="text-xs text-gray-400 mt-1">Director Operativo</p>
        </div>

        <div class="flex flex-col items-center">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=300&q=80" 
               alt="Alex Frausto" 
               class="w-32 h-32 rounded-full object-cover mb-4 bg-gray-200">
          <h3 class="font-bold text-slate-800 text-sm">Alex Frausto[cite: 1]</h3>
          <p class="text-xs text-gray-400 mt-1">Coordinador de Logística</p>
        </div>

        <div class="flex flex-col items-center">
          <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=300&q=80" 
               alt="Oswaldo Maldonado" 
               class="w-32 h-32 rounded-full object-cover mb-4 bg-gray-200">
          <h3 class="font-bold text-slate-800 text-sm">Oswaldo Maldonado[cite: 1]</h3>
          <p class="text-xs text-gray-400 mt-1">Gestor de Alianzas</p>
        </div>

      </div>
    </section>
  </main>

  <footer class="border-t border-gray-200 text-center py-6 text-xs text-gray-500">
    Aviso de Privacidad &nbsp;|&nbsp; Términos y Condiciones &nbsp;|&nbsp; Redes Sociales
  </footer>

</body>
</html>