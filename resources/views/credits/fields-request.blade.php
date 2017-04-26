<!--- Name phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Número de teléfono fijo:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!--- Name phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cel_phone', 'Número de teléfono celular:') !!}
    {!! Form::text('cel_phone', null, ['class' => 'form-control']) !!}
</div>

<!--- Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date', 'Fecha:') !!}
    <input type="date" name="date" class="form-control">
</div>

<!--- Population Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('population', 'Colonia/Población:') !!}
    {!! Form::text('population', null, ['class' => 'form-control']) !!}
</div>

<!--- Municipality Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('municipality', 'Municipio:') !!}
    {!! Form::text('municipality', null, ['class' => 'form-control']) !!}
</div>

<!--- State Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('state', 'Estado:') !!}
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<!--- Account Type Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('account_type', 'Tipo de Cuenta:') !!}
    {!! Form::select('account_type',['Concentradora' => 'Concentradora', 'Dispersadora' => 'Dispersadora'], null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>
