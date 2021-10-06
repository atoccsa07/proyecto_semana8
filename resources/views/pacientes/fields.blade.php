<!-- Ape Nom Field -->
<div class="form-group col-sm-5">
    {!! Form::label('ape_nom', 'Ape Nom:') !!}
    {!! Form::text('ape_nom', null, ['class' => 'form-control','maxlength' => 70,'maxlength' => 70]) !!}
</div>

<!-- Dni Field -->
<div class="form-group col-sm-3">
    {!! Form::label('dni', 'Dni:') !!}
    {!! Form::number('dni', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-3">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::number('celular', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-4">
{!! Form::label('alerta', 'alerta:') !!}
<div class="alert alert-warning alert-dismissible" role="alert">
  <strong>Alerta!</strong> :  Alerta de Pacientes
</div>