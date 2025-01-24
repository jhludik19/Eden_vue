@extends('admin.layouts.permisos')
@section('styles')
    <style>
        .input-orden {
            width: 50px;
            margin: 5px;
        }

    </style>
    <link href="{{ asset('admin/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-8 col-sm-12">
                <h2><a href="javascript:void(0);" id="botonmenu" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                            id="otroboton" class="fa fa-arrow-left"></i></a> Dashboard</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">INICIO</li>
                    <li class="breadcrumb-item active">RESERVAS ENTRANTES</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="header row">
                <div class="col-lg-6 col-sm-8">
                    <h2 style="padding-top:5px;">Reservas Entrantes</h2>
                </div>
            </div>

            <div class="body" style="margin-top: -15px">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" cellspacing="0" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Identificacion</th>
                                <th>N° Móvil</th>
                                <th>Servicio</th>
                                <th>Check in - out</th>
                                <th>N°Adultos</th>
                                <th>N°Niños</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($entrantes as $i => $entrante)
                                <tr class="gradeA">
                                    <td style="text-align: center">{{ $i + 1 }}</td>
                                    <td style="padding: 0px 20px !important">{{ $entrante->nombres }}</td>
                                    <td style="padding: 0px 20px !important">{{ $entrante->correo }}</td>
                                    <td style="padding: 0px 20px !important">{{ $entrante->servicios }}</td>
                                    <td style="padding: 0px 20px !important">{{ $entrante->fecha_entrada }}</td>
                                    <td style="text-align: center">{{ $entrante->cantidad_adultos }}</td>
                                    <td style="text-align: center">{{ $entrante->cantidad_ninos }}</td>
                                    <td> <span class="badge badge-warning">{{ $entrante->estado }}</span></td>
                                    <td class="actions" style="padding: 20px !important;">
                                        <a href="{{ route('reservacion.enviada', $entrante->id) }}"
                                            class="btn btn-success" title="Aceptar Reservación">
                                            <i class="fa fa-check"></i>
                                        </a>&nbsp;
                                        <a href="{{ route('reservacion.rechazada', $entrante->id) }}"
                                            class="btn btn-danger" title="Rechazar Reservación">
                                            <i class="fa fa-times"></i>
                                        </a>&nbsp;
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
