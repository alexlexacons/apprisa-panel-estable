<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">Apprisa</span>
    </a>
    <ul class="side-menu top">
        <li class="{{ Request::routeIs('status') ? 'active' : '' }}">
            <a href="{{ route('status') }}">
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
