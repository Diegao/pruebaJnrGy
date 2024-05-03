<!-- Usuario Id Field -->
<div class="col-sm-12">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
    <p>{{ $servicio->usuario_id }}</p>
</div>

<!-- Cliente Id Field -->
<div class="col-sm-12">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    <p>{{ $servicio->cliente_id }}</p>
</div>

<!-- Equipo Id Field -->
<div class="col-sm-12">
    {!! Form::label('equipo_id', 'Equipo Id:') !!}
    <p>{{ $servicio->equipo_id }}</p>
</div>

<!-- Estado Servicios Id Field -->
<div class="col-sm-12">
    {!! Form::label('estado_servicios_id', 'Estado Servicios Id:') !!}
    <p>{{ $servicio->estado_servicios_id }}</p>
</div>

<!-- Problema Field -->
<div class="col-sm-12">
    {!! Form::label('problema', 'Problema:') !!}
    <p>{{ $servicio->problema }}</p>
</div>

<!-- Solucion Field -->
<div class="col-sm-12">
    {!! Form::label('solucion', 'Solucion:') !!}
    <p>{{ $servicio->solucion }}</p>
</div>

<!-- Recomendaciones Field -->
<div class="col-sm-12">
    {!! Form::label('recomendaciones', 'Recomendaciones:') !!}
    <p>{{ $servicio->recomendaciones }}</p>
</div>

<!-- Fecha Recibido Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_recibido', 'Fecha Recibido:') !!}
    <p>{{ $servicio->fecha_recibido }}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{{ $servicio->fecha_inicio }}</p>
</div>

<!-- Fecha Fin Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    <p>{{ $servicio->fecha_fin }}</p>
</div>

<!-- Fecha Entrega Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_entrega', 'Fecha Entrega:') !!}
    <p>{{ $servicio->fecha_entrega }}</p>
</div>

