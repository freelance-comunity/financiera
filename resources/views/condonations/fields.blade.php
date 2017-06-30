<!--- Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date', 'Fecha:') !!}
     <input type="date" value="{{ old('date') }}" name="date" class="form-control">    
</div>

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('branch', 'Sucursal:') !!}
    {!! Form::text('branch', $credits->accredited->branch->nomenclature, ['class' => 'form-control','readonly']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('adviser', 'Promotor:') !!}
    {!! Form::text('adviser', $credits->adviser, ['class' => 'form-control','readonly']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('accredited', 'Sucursal:') !!}
    <input type="text" name="accredited" value=" {{ $credits->accredited->name}} {{ $credits->accredited->last_name}}" class="form-control" readonly="readonly">
</div>

<!--- Amount Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('amount', 'Monto desembolsado:') !!}
    {!! Form::text('amount', $credits->authorized_amount, ['class' => 'form-control','readonly']) !!}
</div>

<!--- Term Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('term', 'Plazo:') !!}
    {!! Form::text('term', null, ['class' => 'form-control']) !!}
</div>

<!--- Amortization Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('amortization', 'Número de amortizaciones:') !!}
    {!! Form::text('amortization', null, ['class' => 'form-control']) !!}
</div>

<!--- Surcharges Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('surcharges', 'Recargos:') !!}
    {!! Form::text('surcharges', null, ['class' => 'form-control']) !!}
</div>

<!--- Date To Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date_to', 'Correspondiente al:') !!}
     <input type="date" value="{{ old('date_to') }}" name="date_to" class="form-control">   
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date_at', 'Hasta:') !!}
     <input type="date" value="{{ old('date_at') }}" name="date_at" class="form-control">   
</div>



<!--- Justification Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('justification', 'Justificación:') !!}
    {!! Form::text('justification', null, ['class' => 'form-control']) !!}
    <input type="hidden" name="credits_id" value="{{ $credits->id}}">
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>
