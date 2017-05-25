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
    {!! Form::label('minimum_amount', 'Monto Mínimo:') !!}
    {!! Form::text('minimum_amount', null, ['class' => 'form-control']) !!}
</div>

<!--- Maximum Amount Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('maximum_amount', 'Monto Máximo:') !!}
    {!! Form::text('maximum_amount', null, ['class' => 'form-control']) !!}
</div>

<!--- Minimum Term Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('minimum_term', 'Plazo Mínimo:') !!}
    {!! Form::text('minimum_term', null, ['class' => 'form-control']) !!}
</div>

<!--- Maximum Term Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('maximum_term', 'Plazo Máximo:') !!}
    {!! Form::text('maximum_term', null, ['class' => 'form-control']) !!}
</div>

<!--- Cup Interest Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cup_interest', 'Tasa de Interés:') !!}
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

<!--- Days Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('days', 'Días:') !!}
    {!! Form::select('days', ['20' => '20', '30' => '30'], null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>
