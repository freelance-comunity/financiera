<!--- Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date', 'Fecha:') !!}
     <input type="date" value="{{ old('date') }}" name="date" class="form-control">
     <input type="hidden" name="credit_id" value="{{ $credit->id}}">
   
</div>


<!--- Surcharges Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('surcharges', 'Recargos:') !!}
    {!! Form::text('surcharges', null, ['class' => 'form-control']) !!}
</div>

<!--- Expiration From Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('expiration_from', 'Vencimientos del:') !!}
     <input type="date" value="{{ old('expiration_from') }}" name="expiration_from" class="form-control">
</div>

<!--- Expiration To Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('expiration_to', 'Al:') !!}
    <input type="date" value="{{ old('expiration_to') }}" name="expiration_to" class="form-control">
</div>

<!--- Justification Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('justification', 'Justificación:') !!}
    {!! Form::text('justification', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>
