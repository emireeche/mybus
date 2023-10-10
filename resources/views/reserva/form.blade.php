<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cliente_id') }}
            {{ Form::text('cliente_id', $reserva->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ruta_id') }}
            {{ Form::text('ruta_id', $reserva->ruta_id, ['class' => 'form-control' . ($errors->has('ruta_id') ? ' is-invalid' : ''), 'placeholder' => 'Ruta Id']) }}
            {!! $errors->first('ruta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio') }}
            {{ Form::text('fecha_inicio', $reserva->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin') }}
            {{ Form::text('fecha_fin', $reserva->fecha_fin, ['class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
            {!! $errors->first('fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costo_total') }}
            {{ Form::text('costo_total', $reserva->costo_total, ['class' => 'form-control' . ($errors->has('costo_total') ? ' is-invalid' : ''), 'placeholder' => 'Costo Total']) }}
            {!! $errors->first('costo_total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadoreserva') }}
            {{ Form::text('estadoreserva', $reserva->estadoreserva, ['class' => 'form-control' . ($errors->has('estadoreserva') ? ' is-invalid' : ''), 'placeholder' => 'Estadoreserva']) }}
            {!! $errors->first('estadoreserva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numeropasajeros') }}
            {{ Form::text('numeropasajeros', $reserva->numeropasajeros, ['class' => 'form-control' . ($errors->has('numeropasajeros') ? ' is-invalid' : ''), 'placeholder' => 'Numeropasajeros']) }}
            {!! $errors->first('numeropasajeros', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costoxpersona') }}
            {{ Form::text('costoxpersona', $reserva->costoxpersona, ['class' => 'form-control' . ($errors->has('costoxpersona') ? ' is-invalid' : ''), 'placeholder' => 'Costoxpersona']) }}
            {!! $errors->first('costoxpersona', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>