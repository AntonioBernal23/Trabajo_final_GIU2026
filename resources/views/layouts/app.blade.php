<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Alimentos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f3e9ff, #fff0f7 35%, #eafcff 70%, #dffff9);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar-custom {
            background: transparent;
            padding: 20px 40px 12px 40px;
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
            font-size: 22px;
            font-weight: bold;
            cursor: pointer;
            padding: 0 10px;
            line-height: 1;
            display: flex;
            align-items: center;
        }

        .dropdown-menu-custom {
            border-radius: 15px;
            border: none;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
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
    </style>
</head>
<body>

    <header class="navbar-custom">
        <div class="d-flex justify-content-between align-items-center w-100">
            
            <a class="nav-link-custom fw-bold" href="{{ route('dashboard') }}" style="font-size: 16px;">
                banco de alimentos
            </a>

            <div class="d-flex align-items-center gap-4">
                <a class="nav-link-custom" href="{{ route('dashboard') }}">inicio</a>
                <a class="nav-link-custom" href="#">inventario</a>
                <a class="nav-link-custom" href="{{ route('donantes') }}">donaciones</a>
                <a class="nav-link-custom" href="{{ route('despachos') }}">despachos</a>
                <a class="nav-link-custom" href="{{ route('comedores') }}">comedores</a>
                <a class="nav-link-custom" href="{{ route('reportes') }}">reportes</a>

                <div class="dropdown">
                    <button class="btn-menu-hamburguesa" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        ≡
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ route('almacen') }}">📦 Distribución Almacén</a></li>
                        <li><a class="dropdown-item" href="{{ route('perfil') }}">⚙️ Configuración y Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="#">🚪 Cerrar Sesión</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <main class="flex-grow-1 d-flex flex-column">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>