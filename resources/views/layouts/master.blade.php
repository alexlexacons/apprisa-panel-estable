@include('layouts.head')

<body>
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Apprisa</span>
        </a>
        <ul class="side-menu top">
            <li class="{{ Request::routeIs('index') ? 'active' : '' }}">
                <a href="{{ route('index') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Status</span>
                </a>
            </li>
            <li class="{{ Request::routeIs('estadisticas') ? 'active' : '' }}">
                <a href="{{ route('estadisticas') }}">
                    <i class='bx bx-stats' ></i>
                    <span class="text">Estadisticas</span>
                </a>
            </li>
            <li class="{{ Request::routeIs('reporte') ? 'active' : '' }}">
                <a href="{{ route('reporte') }}">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Reporte de ventas</span>
                </a>
            </li>
            <li class="{{ Request::routeIs('zonas') ? 'active' : '' }}">
                <a href="{{ route('zonas') }}">
                    <i class='bx bx-target-lock'></i>
                    <span class="text">Delimitacion de zonas</span>
                </a>
            </li>
            <li class="{{ Request::routeIs('cuentas') ? 'active' : '' }}">
                <a href="{{ route('cuentas') }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">Administrador de cuentas</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="{{ route('admin') }}">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Administrador</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Cerrar sesión</span>
                </a>
            </li>
        </ul>
    </section>
    @isset($page)
        @switch($page)
            @case('pageOne')
                @yield('welcome')
            @break

            @case('pageEstadistics')
                @yield('estadisticas')
            @break

            @case('pageReporte')
                @yield('reporte')
            @break

            @case('pageZonas')
                @yield('zonas')
            @break
            @case('pageCuentas')
                @yield('cuentas')
            @break
            @case('pageAdmin')
                @yield('admin')
            @break
        @endswitch
    @endisset
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- JavaScript de Bootstrap y sus dependencias -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
