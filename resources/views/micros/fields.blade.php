<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Nombre de  la Empresa:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Dirección de la Empresa:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!--- Colony Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('colony', 'Colonia:') !!}
    {!! Form::text('colony', null, ['class' => 'form-control']) !!}
</div>

<!--- Municipality Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('municipality', 'Municipio:') !!}
    {!! Form::text('municipality', null, ['class' => 'form-control']) !!}
</div>

<!--- Activity Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('activity', 'Giro o actividad principal:') !!}
    {!! Form::text('activity', null, ['class' => 'form-control']) !!}
</div>

<!--- Antiquity Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('antiquity', 'Antiguedad de la Empresa:') !!}
    {!! Form::select('antiquity',['Nueva' => 'Nueva', 'Menos de 1 año' => 'Menos de 1 año', 'De 1  a 3 años' => 'De 1  a 3 años', 'Mayor de 3 años' => 'Mayor de 3 años'], null, ['class' => 'form-control'])!!}
</div>

<!--- Antiquity Locality Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('antiquity_locality', 'Antiguedad en la localidad:') !!}
    {!! Form::text('antiquity_locality', null, ['class' => 'form-control']) !!}
</div>

<!--- Business Type Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('business_type', 'Tipo de negocio:') !!}
    {!! Form::select('business',['Fijo' => 'Fijo', 'Ambulante' => 'Ambulante'], null, ['class' => 'form-control'])!!}
</div>

<!--- Times Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('times', '¿Qué días y en que horario atiende su negocio?:') !!}
    {!! Form::text('times', null, ['class' => 'form-control']) !!}
</div>

<!--- Local Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('local', 'Local comercial:') !!}
    {!! Form::select('local',['Propio' => 'Propio', 'Rentado' => 'Rentado'], null, ['class' => 'form-control'])!!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
