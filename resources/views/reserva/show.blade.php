@extends('layouts.app')

@section('template_title')
    {{ $reserva->name ?? "{{ __('Show') Reserva" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reserva</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $reserva->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta Id:</strong>
                            {{ $reserva->ruta_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $reserva->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $reserva->fecha_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Costo Total:</strong>
                            {{ $reserva->costo_total }}
                        </div>
                        <div class="form-group">
                            <strong>Estadoreserva:</strong>
                            {{ $reserva->estadoreserva }}
                        </div>
                        <div class="form-group">
                            <strong>Numeropasajeros:</strong>
                            {{ $reserva->numeropasajeros }}
                        </div>
                        <div class="form-group">
                            <strong>Costoxpersona:</strong>
                            {{ $reserva->costoxpersona }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
