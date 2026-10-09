<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Alimentos</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F4F5F9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar-banco {
            background-color: #E8EBF8;
            border-bottom: 2px solid #D5DCF5;
        }
        .nav-link-banco {
            color: #334155;
            font-weight: 600;
            padding: 8px 16px !important;
            border-radius: 20px;
            transition: all 0.2s;
        }
        .nav-link-banco:hover {
            background-color: #DDE3EA;
            color: #1E293B;
        }
    </style>
</head>
<body>

    <!-- Menú de Navegación del Banco de Alimentos -->
    <nav class="navbar navbar-expand-lg navbar-banco py-2 shadow-sm mb-4">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold text-primary fs-4 me-4" href="{{ route('dashboard') }}">banco de alimentos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto gap-2">
                    <li class="nav-item"><a class="nav-link nav-link-banco" href="{{ route('dashboard') }}">inicio</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-banco" href="{{ route('inventario.index') }}">inventario</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-banco" href="{{ route('donaciones.registro') }}">donaciones</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-banco" href="{{ route('despachos.index') }}">despachos</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-banco" href="{{ route('comedores.index') }}">comedores</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-banco" href="{{ route('reportes.index') }}">reportes</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido dinámico de cada vista -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center py-3 my-4 border-top text-muted">
        <p class="m-0">[FOOTER] © 2026 Banco de Alimentos - Todos los derechos reservados</p>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
