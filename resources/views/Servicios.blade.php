<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banco de Alimentos - Servicios</title>
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
    <h1 class="text-2xl font-bold text-center text-slate-800 mb-12">Nuestros Servicios</h1>

    <!-- Grid de Servicios con botón "Ver Detalle" -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <!-- Card 1 -->
      <div class="border border-gray-200 p-6 text-center flex flex-col justify-between">
        <div>
          <div class="bg-gray-200 w-full h-40 mb-6 flex items-center justify-center text-gray-400 text-xs">
            Imagen del servicio
          </div>
          <h3 class="font-bold text-slate-800 mb-2">Recolección de Alimentos</h3>
          <p class="text-xs text-gray-500 leading-relaxed mb-6">
            Gestionamos la logística para recuperar excedentes comestibles de cadenas de producción y supermercados.
          </p>
        </div>
        <div>
          <a href="/detalle/servicio/1" class="inline-block border border-gray-400 text-slate-700 hover:bg-gray-50 text-xs px-4 py-1.5 transition">
            Ver Detalle
          </a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="border border-gray-200 p-6 text-center flex flex-col justify-between">
        <div>
          <div class="bg-gray-200 w-full h-40 mb-6 flex items-center justify-center text-gray-400 text-xs">
            Imagen del servicio
          </div>
          <h3 class="font-bold text-slate-800 mb-2">Distribución a Comedores</h3>
          <p class="text-xs text-gray-500 leading-relaxed mb-6">
            Surtimos periódicamente a comedores comunitarios e instituciones de asistencia social.
          </p>
        </div>
        <div>
          <a href="/detalle/servicio/2" class="inline-block border border-gray-400 text-slate-700 hover:bg-gray-50 text-xs px-4 py-1.5 transition">
            Ver Detalle
          </a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="border border-gray-200 p-6 text-center flex flex-col justify-between">
        <div>
          <div class="bg-gray-200 w-full h-40 mb-6 flex items-center justify-center text-gray-400 text-xs">
            Imagen del servicio
          </div>
          <h3 class="font-bold text-slate-800 mb-2">Gestión de Donaciones</h3>
          <p class="text-xs text-gray-500 leading-relaxed mb-6">
            Facilitamos a empresas e individuos la donación segura de insumos y recursos alimentarios.
          </p>
        </div>
        <div>
          <a href="/detalle/servicio/3" class="inline-block border border-gray-400 text-slate-700 hover:bg-gray-50 text-xs px-4 py-1.5 transition">
            Ver Detalle
          </a>
        </div>
      </div>

    </div>
  </main>

  <footer class="border-t border-gray-200 text-center py-6 text-xs text-gray-500">
    Aviso de Privacidad &nbsp;|&nbsp; Términos y Condiciones &nbsp;|&nbsp; Redes Sociales
  </footer>

</body>
</html>