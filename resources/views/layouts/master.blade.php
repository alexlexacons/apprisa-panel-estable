<body>
    @isset($page)
        @switch($page)
            @case('pageOne')
                @yield('welcome')
            @break

            @case('pageStatus')
                @yield('status')
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
            @case('pageAutorizarCuentas')
                @yield('AutorizarCuentasRestaurante')
            @break
            @case('pageAutorizarCuentasRepartidor')
                @yield('AutorizarCuentasRepartidor')
            @break
            @case('pageActivarCuentas')
                @yield('ActivarCuentas')
            @break
            @case('pageactivacionDesactivacionRestaurante')
                @yield('activacionDesactivacionRestaurante')
            @break
            @case('pageactivacionDesactivacionRepartidor')
                @yield('activacionDesactivacionRepartidor')
            @break
            @case('pageactivacionDesactivacionCliente')
                @yield('activacionDesactivacionCliente')
            @break
            @case('pagelogin')
                @yield('login')
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
