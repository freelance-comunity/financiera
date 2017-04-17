<!--- Name Company Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_company', 'Nombre de la Empresa:') !!}
    {!! Form::text('name_company', null, ['class' => 'form-control']) !!}
</div>

<!--- Email Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Domicilio:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!--- Cp Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cp', 'Código Postal:') !!}
    {!! Form::text('cp', null, ['class' => 'form-control']) !!}
</div>

<!--- City Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('city', 'Ciudad:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!--- State Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('state', 'Estado:') !!}
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Teléfono:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!--- Logo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('logo', 'Logo:') !!}
    <input type="file" name="logo" class="form-control">
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>
