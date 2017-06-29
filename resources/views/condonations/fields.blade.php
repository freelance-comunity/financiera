<!--- Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date', 'Fecha:') !!}
     <input type="date" value="{{ old('date') }}" name="date" class="form-control">
    
</div>

<!--- Amount Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('amount', 'Monto desembolsado:') !!}
    {!! Form::text('amount', $credits->accredited->name, ['class' => 'form-control','readonly']) !!}
</div>

<!--- Term Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('term', 'Plazo:') !!}
    {!! Form::text('term', null, ['class' => 'form-control']) !!}
</div>

<!--- Amortization Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('amortization', 'Número de amortizaciones:') !!}
    {!! Form::text('amortization', 1, ['class' => 'form-control','readonly']) !!}
</div>

<!--- Surcharges Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('surcharges', 'Recargos:') !!}
    {!! Form::text('surcharges', null, ['class' => 'form-control','readonly']) !!}
</div>

<!--- Date To Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date_to', 'Correspondiente al:') !!}
    {!! Form::text('date_to', null, ['class' => 'form-control','readonly']) !!}
</div>



<!--- Justification Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('justification', 'Justificación:') !!}
    {!! Form::text('justification', null, ['class' => 'form-control']) !!}
   


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>
