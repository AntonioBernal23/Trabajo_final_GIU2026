<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Alimentos Comunitario</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            margin: 0;
            padding: 0;
            /* Fondo degradado suave pastel */
            background: linear-gradient(135deg, #f3e9ff, #fff0f7 35%, #eafcff 70%, #dffff9);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Estilos del Header */
        .navbar-custom {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            padding: 12px 40px;
            border-bottom: 1.5px solid #a5b4fc;
        }

        .nav-link-custom {
            color: #2563eb !important;
            font-weight: 700;
            font-size: 15px;
            text-decoration: none;
            transition: opacity 0.2s;
        }

        .nav-link-custom:hover {
            opacity: 0.7;
        }

        .btn-menu-hamburguesa {
            background: none;
            border: none;
            color: #2563eb;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            padding: 0 10px;
            line-height: 1;
        }

        .dropdown-menu-custom {
            border-radius: 15px;
            border: none;
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
            background-color: #ffffff;
            padding: 10px 0;
        }

        .dropdown-menu-custom .dropdown-item {
            font-weight: 700;
            color: #1e293b;
            padding: 10px 20px;
            font-size: 14px;
        }

        .dropdown-menu-custom .dropdown-item:hover {
            background-color: #f1f5f9;
            color: #2563eb;
        }

        /* Estilos del Footer */
        footer {
            background: rgba(30, 41, 59, 0.98);
            color: #ffffff;
            margin-top: auto; /* Mantiene el footer siempre hasta abajo */
        }
    </style>
</head>
<body>

    <!-- TOP / HEADER -->
    <header class="navbar-custom">
        <div class="d-flex justify-content-between align-items-center w-100">
            
            <!-- LOGO INSTITUCIONAL -->
            <a class="navbar-brand d-flex align-items-center text-decoration-none" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.jpg') }}" alt="Banco de Alimentos Comunitario" height="48" class="d-inline-block align-text-top">
            </a>

            <!-- NAVEGACIÓN PRINCIPAL -->
            <div class="d-flex align-items-center gap-3 gap-md-4">
                <a class="nav-link-custom" href="{{ route('home') }}">Inicio</a>
                <a class="nav-link-custom" href="{{ route('nosotros') }}">Nosotros</a>
                <a class="nav-link-custom" href="{{ route('solicitar.ayuda') }}">Necesito Ayuda</a>
                <a class="nav-link-custom" href="{{ route('donar') }}">Cómo Donar</a>
                <a class="nav-link-custom" href="{{ route('centros') }}">Centros de Ayuda</a>

                <!-- MENÚ DESPLEGABLE (El botón ≡ se oculta en PC con d-md-none) -->
                <div class="dropdown">
                    <button class="btn-menu-hamburguesa d-md-none" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        ≡
                    </button>
                    <!-- En PC se muestra como desplegable secundario al dar click si lo deseas -->
                    <button class="btn-menu-hamburguesa d-none d-md-block" type="button" id="dropdownMenuButtonDesktop" data-bs-toggle="dropdown" aria-expanded="false" title="Más opciones">
                        ⋮
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ route('voluntariado') }}">🙋‍♂️ Voluntariado</a></li>
                        <li><a class="dropdown-item" href="{{ route('impacto') }}">📊 Nuestro Impacto</a></li>
                        <li><a class="dropdown-item" href="{{ route('calidad') }}">🛡️ Calidad y Seguridad</a></li>
                        <li><a class="dropdown-item" href="{{ route('aliados') }}">🏢 Empresas Aliadas</a></li>
                        <li><a class="dropdown-item" href="{{ route('faq') }}">❓ Preguntas Frecuentes</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <!-- CONTENIDO PRINCIPAL DE CADA PÁGINA -->
    <main class="flex-grow-1 d-flex flex-column">
        @yield('content')
    </main>

    <!-- PIE DE PÁGINA (FOOTER COMPLETO MULTICOLUMNA) -->
    <footer class="pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start g-4">
                
                <!-- Columna 1: Identidad -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-3 fw-bold text-primary">🍏 Banco de Alimentos</h6>
                    <p class="small text-white-50">
                        Uniendo esfuerzos con la comunidad, empresas y voluntarios para reducir el desperdicio de comida y combatir el hambre.
                    </p>
                </div>

                <!-- Columna 2: Enlaces Rápidos -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-3 fw-bold text-white">Navegación</h6>
                    <p class="mb-2"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none small">Inicio</a></p>
                    <p class="mb-2"><a href="{{ route('nosotros') }}" class="text-white-50 text-decoration-none small">Quiénes Somos</a></p>
                    <p class="mb-2"><a href="{{ route('solicitar.ayuda') }}" class="text-white-50 text-decoration-none small">Necesito Ayuda</a></p>
                    <p class="mb-2"><a href="{{ route('donar') }}" class="text-white-50 text-decoration-none small">Cómo Donar</a></p>
                </div>

                <!-- Columna 3: Datos de Contacto -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-3 fw-bold text-white">Contacto</h6>
                    <p class="small text-white-50 mb-2">📍 Av. Principal #123, Centro</p>
                    <p class="small text-white-50 mb-2">✉️ contacto@bancodealimentos.org</p>
                    <p class="small text-white-50 mb-2">📞 (33) 3810-6595</p>
                </div>

                <!-- Columna 4: Horarios de Atención -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-3 fw-bold text-white">Horarios de Atención</h6>
                    <p class="small text-white-50 mb-1"><strong>Acopio de Alimentos:</strong></p>
                    <p class="small text-white-50 mb-2">Lun a Vie: 8:00 AM - 4:00 PM</p>
                    <p class="small text-white-50 mb-1"><strong>Entrega a Comedores:</strong></p>
                    <p class="small text-white-50">Lun a Sáb: 9:00 AM - 2:00 PM</p>
                </div>

            </div>

            <hr class="mb-4 mt-4 text-white-50">

            <!-- Fila Inferior: Copyright -->
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="small text-white-50 mb-0">
                        © {{ date('Y') }} Banco de Alimentos Comunitario. Todos los derechos reservados.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>