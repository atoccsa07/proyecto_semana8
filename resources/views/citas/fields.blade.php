<!-- D Paciente Field -->
<div class="form-group col-sm-3">
    {!! Form::label('d_paciente', 'D Paciente:') !!}
    {!! Form::number('d_paciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Cita Field -->
<div class="form-group col-sm-4">
    {!! Form::label('fecha_cita', 'Fecha Cita:') !!}
    {!! Form::text('fecha_cita', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Id Doctor Field -->
<div class="form-group col-sm-3">
    {!! Form::label('id_doctor', 'Id Doctor:') !!}
    {!! Form::number('id_doctor', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-4">
{!! Form::label('alerta', 'alerta:') !!}
<div class="alert alert-warning alert-dismissible" role="alert">
  <strong>Alerta!</strong> :  Alerta de Citas
</div>