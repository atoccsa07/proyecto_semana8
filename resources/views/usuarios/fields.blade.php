<!-- Ape Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ape_nom', 'Ape Nom:') !!}
    {!! Form::text('ape_nom', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario', 'Usuario:') !!}
    {!! Form::text('usuario', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-3">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-4">
{!! Form::label('alerta', 'alerta:') !!}
<div class="alert alert-warning alert-dismissible" role="alert">
  <strong>Alerta!</strong> :  Alerta de Usuario
</div>