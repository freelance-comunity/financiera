<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Description Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('description', 'Descripción:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!--- Minimum Amount Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('minimum_amount', 'Monto Minimo:') !!}
    {!! Form::text('minimum_amount', null, ['class' => 'form-control']) !!}
</div>

<!--- Maximum Amount Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('maximum_amount', 'Monto Maximo:') !!}
    {!! Form::text('maximum_amount', null, ['class' => 'form-control']) !!}
</div>

<!--- Minimum Term Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('minimum_term', 'Plazo Minimo:') !!}
    {!! Form::text('minimum_term', null, ['class' => 'form-control']) !!}
</div>

<!--- Maximum Term Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('maximum_term', 'Plazo Maximo:') !!}
    {!! Form::text('maximum_term', null, ['class' => 'form-control']) !!}
</div>

<!--- Cup Interest Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cup_interest', 'Taza de Interes:') !!}
    {!! Form::text('cup_interest', null, ['class' => 'form-control']) !!}
</div>

<!--- Surcharge Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('surcharge', 'Recargo:') !!}
    {!! Form::text('surcharge', null, ['class' => 'form-control']) !!}
</div>

<!--- Modality Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('modality', 'Modalidad:') !!}
    {!! Form::select('modality', ['Diario' => 'Diario', 'Diario cuota' => 'Diario cuota', 'Semanal' => 'Semanal', 'Catorcenal' => 'Catorcenal', 'Mensual' => 'Mensual'], null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>
