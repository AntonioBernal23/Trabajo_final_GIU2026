<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banco de Alimentos - Inicio</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-700 min-h-screen flex flex-col font-sans">

  <!-- Header / Navbar -->
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
    <!-- Hero / Call to Action -->
    <section class="text-center max-w-2xl mx-auto mb-16">
      <h1 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Banco de Alimentos</h1>
      <p class="text-gray-500 text-sm md:text-base mb-6 leading-relaxed">
        Rescatamos alimentos y aseguramos que lleguen a las comunidades que más lo necesitan. Trabajamos unidos para combatir el hambre y reducir el desperdicio.
      </p>
      <a href="servicios.html" class="inline-block border border-gray-400 text-slate-700 hover:bg-gray-50 font-medium px-6 py-2 text-sm transition">
        Ver Servicios
      </a>
    </section>

    <!-- Cards de Servicios en Home -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <!-- Servicio A -->
      <div class="border border-gray-200 p-6 text-center">
        <div class="bg-gray-200 w-full h-40 mb-6 flex items-center justify-center text-gray-400 text-xs">
          Imagen del servicio
        </div>
        <h3 class="font-bold text-slate-800 mb-2">Recolección de Alimentos</h3>
        <p class="text-xs text-gray-500 leading-relaxed">
          Gestionamos la logística para recuperar excedentes comestibles de cadenas de producción y supermercados.
        </p>
      </div>

      <!-- Servicio B -->
      <div class="border border-gray-200 p-6 text-center">
        <div class="bg-gray-200 w-full h-40 mb-6 flex items-center justify-center text-gray-400 text-xs">
          Imagen del servicio
        </div>
        <h3 class="font-bold text-slate-800 mb-2">Distribución a Comedores</h3>
        <p class="text-xs text-gray-500 leading-relaxed">
          Surtimos periódicamente a comedores comunitarios e instituciones de asistencia social.
        </p>
      </div>

      <!-- Servicio C -->
      <div class="border border-gray-200 p-6 text-center">
        <div class="bg-gray-200 w-full h-40 mb-6 flex items-center justify-center text-gray-400 text-xs">
          Imagen del servicio
        </div>
        <h3 class="font-bold text-slate-800 mb-2">Gestión de Donaciones</h3>
        <p class="text-xs text-gray-500 leading-relaxed">
          Facilitamos a empresas e individuos la donación segura de insumos y recursos alimentarios.
        </p>
      </div>

    </section>
  </main>

  <!-- Footer Minimalista -->
  <footer class="border-t border-gray-200 text-center py-6 text-xs text-gray-500">
    Aviso de Privacidad &nbsp;|&nbsp; Términos y Condiciones &nbsp;|&nbsp; Redes Sociales
  </footer>

</body>
</html>