<!-- D Paciente Field -->
<div class="col-sm-12">
    {!! Form::label('d_paciente', 'D Paciente:') !!}
    <p>{{ $citas->d_paciente }}</p>
</div>

<!-- Fecha Cita Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_cita', 'Fecha Cita:') !!}
    <p>{{ $citas->fecha_cita }}</p>
</div>

<!-- Id Doctor Field -->
<div class="col-sm-12">
    {!! Form::label('id_doctor', 'Id Doctor:') !!}
    <p>{{ $citas->id_doctor }}</p>
</div>

