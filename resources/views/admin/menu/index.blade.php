<nav id="left-sidebar-nav" class="sidebar-nav">
    <ul id="main-menu" class="metismenu">
        @php
            $x = $_SERVER['REQUEST_URI'];
            $a = 'reservacion';
            $b = stripos($x, $a);
            
            if ($b !== false) {
                $activoReservacion = 'active';
                $activoHome = '';
            } else {
                $activoReservacion = '';
                $activoHome = 'active';
            }
            
        @endphp
        <li class="{{ $activoHome }}">
            <a href="#" class="has-arrow"><i class="icon-grid"></i><span>RESERVACIONES</span></a>
            <ul>
                <li>
                    <a href="{{ route('reservacion.entrantes') }}"><span>Entrantes
                            ({{ App\Models\Reservacion::where('estado', 'PENDIENTE')->count() }})</span></a>
                </li>
                <li>
                    <a href="{{ route('reservacion.finalizadas') }}"><span>Finalizadas
                            ({{ App\Models\Reservacion::where('estado', 'FINALIZADA')->count() }})</span></a>
                </li>
                <li>
                    <a href="{{ route('reservacion.rechazadas') }}"><span>Rechazadas
                            ({{ App\Models\Reservacion::where('estado', 'RECHAZADA')->count() }})</span></a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
