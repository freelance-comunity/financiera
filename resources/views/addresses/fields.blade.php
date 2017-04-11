<!--- Avenue Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('avenue', 'Avenida:') !!}
    {!! Form::text('avenue', null, ['class' => 'form-control']) !!}
    <input type="hidden" name="accredited_id" value="{{ $accrediteds->id}}">
</div>

<!--- Streets Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('streets', 'Entre que calles:') !!}
    {!! Form::text('streets', null, ['class' => 'form-control']) !!}
</div>

<!--- Number Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('number', 'Número interior y exterior:') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>

<!--- Colony Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('colony', 'Colonia:') !!}
    {!! Form::text('colony', null, ['class' => 'form-control']) !!}
</div>

<!--- Reference Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('reference', 'Referencia:') !!}
    {!! Form::text('reference', null, ['class' => 'form-control']) !!}
</div>

<!--- Postal Code Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('postal_code', 'Código postal:') !!}
    {!! Form::text('postal_code', null, ['class' => 'form-control']) !!}
</div>

<!--- Municipality Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('municipality', 'Municipio:') !!}
    {!! Form::text('municipality', null, ['class' => 'form-control']) !!}
</div>

<!--- City Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('city', 'Ciudad:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!--- Federative Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('federative', 'Entidad Federativa:') !!}
    {!! Form::text('federative', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>
