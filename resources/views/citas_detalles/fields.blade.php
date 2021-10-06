<!-- Id Cita Field -->
<div class="form-group col-sm-3">
    {!! Form::label('id_cita', 'Id Cita:') !!}
    {!! Form::number('id_cita', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-4">
{!! Form::label('alerta', 'alerta:') !!}
<div class="alert alert-warning alert-dismissible" role="alert">
  <strong>Alerta!</strong> :  Alerta de Cita Detalle
</div>