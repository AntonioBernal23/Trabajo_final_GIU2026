<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banco de Alimentos - Distribución a Comedores</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-700 min-h-screen flex flex-col font-sans">

  <!-- Header con rutas absolutas -->
  <header class="border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-center gap-4">
      <div class="text-xl font-bold text-slate-800 tracking-tight">logo</div>
      <nav>
        <ul class="flex flex-wrap justify-center space-x-6 text-sm text-gray-600 font-medium">
          <li><a href="/" class="hover:text-slate-900 transition">Inicio</a></li>
          <li><a href="/nosotros" class="hover:text-slate-900 transition">Nosotros</a></li>
          <li><a href="/servicios" class="hover:text-slate-900 transition">Servicios</a></li>
          <li><a href="/blog" class="hover:text-slate-900 transition">Blog</a></li>
          <li><a href="/faq" class="hover:text-slate-900 transition">FAQ</a></li>
          <li><a href="/portafolio" class="hover:text-slate-900 transition">Portafolio</a></li>
          <li><a href="/contacto" class="hover:text-slate-900 transition">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="max-w-6xl mx-auto px-6 py-8 flex-grow w-full">
    
    <!-- Migas de pan / Breadcrumb -->
    <div class="text-xs text-gray-400 mb-8">
      <a href="/" class="hover:underline">Inicio</a> &nbsp;/&nbsp; 
      <a href="/servicios" class="hover:underline">Servicios</a> &nbsp;/&nbsp; 
      <span class="text-gray-600 font-medium">Distribución a Comedores</span>
    </div>

    <!-- Título Principal -->
    <h1 class="text-2xl font-bold text-center text-slate-800 mb-10">Suministro y Distribución a Comedores</h1>

    <!-- Layout Grid 2:1 -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
      
      <!-- Contenido Principal -->
      <div class="lg:col-span-2 space-y-6">
        <div class="bg-gray-200 w-full h-72 flex items-center justify-center text-gray-400 text-sm">
          Imagen de Distribución a Comedores
        </div>

        <div class="space-y-4 text-xs md:text-sm text-gray-600 leading-relaxed">
          <p>
            Atendemos directamente a comedores comunitarios, asilos y centros de atención infantil organizando paquetes nutricionales armados con granos, lácteos, frutas y verduras frescas procedentes del almacén central.
          </p>
          <p>
            Diseñamos rutas de entrega periódicas adaptadas a las necesidades específicas de la población beneficiaria, asegurando la entrega oportuna de paquetes equilibrados.
          </p>
        </div>

        <div class="border border-gray-200 p-6 mt-6">
          <h3 class="font-bold text-slate-800 text-sm mb-3">Beneficios del Servicio:</h3>
          <ul class="list-disc list-inside text-xs text-gray-600 space-y-2">
            <li>Suministro constante y balanceado para comedores sociales.</li>
            <li>Despachos semanales o quincenales según capacidad operativa.</li>
            <li>Control de trazabilidad de lotes entregados a cada institución.</li>
          </ul>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="space-y-8">
        <div class="border border-gray-200 p-6">
          <h3 class="font-bold text-slate-800 text-sm mb-4">Otros Servicios</h3>
          <ul class="text-xs text-gray-500 space-y-2">
            <li><a href="/detalle/servicio/1" class="hover:text-slate-900">1. Recolección de Alimentos</a></li>
            <li><a href="/detalle/servicio/2" class="font-bold text-slate-900">2. Distribución a Comedores</a></li>
            <li><a href="/detalle/servicio/3" class="hover:text-slate-900">3. Gestión de Donaciones</a></li>
          </ul>
        </div>

        <div class="border border-gray-200 p-6">
          <h3 class="font-bold text-slate-800 text-sm mb-4">Solicitar Cotización</h3>
          <form class="space-y-4">
            <div>
              <input type="email" placeholder="Campo: Tu Correo" class="w-full bg-gray-100 border border-gray-200 p-2.5 text-xs focus:outline-none text-gray-700">
            </div>
            <button type="submit" class="w-full border border-gray-400 text-slate-700 hover:bg-gray-50 text-xs py-2 transition font-medium">
              Cotizar
            </button>
          </form>
        </div>
      </div>

    </div>
  </main>

  <footer class="border-t border-gray-200 text-center py-6 text-xs text-gray-500">
    Aviso de Privacidad &nbsp;|&nbsp; Términos y Condiciones &nbsp;|&nbsp; Redes Sociales
  </footer>

</body>
</html>