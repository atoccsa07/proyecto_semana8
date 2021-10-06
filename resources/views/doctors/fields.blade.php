<!-- Ape Nom Field -->
<div class="form-group col-sm-4">
    {!! Form::label('ape_nom', 'Ape Nom:') !!}
    {!! Form::text('ape_nom', null, ['class' => 'form-control','maxlength' => 70,'maxlength' => 70]) !!}
</div>

<!-- Ndi Field -->
<div class="form-group col-sm-4">
    {!! Form::label('ndi', 'Ndi:') !!}
    {!! Form::number('ndi', null, ['class' => 'form-control']) !!}
</div>

<!-- Especialidad Field -->
<div class="form-group col-sm-4">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    {!! Form::text('especialidad', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<div class="form-group col-sm-4">
{!! Form::label('alerta', 'alerta:') !!}
<div class="alert alert-warning alert-dismissible" role="alert">
  <strong>Alerta!</strong> :  Alerta de Dortor
</div>