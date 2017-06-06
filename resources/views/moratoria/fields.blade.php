<!--- Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date', 'Fecha:') !!}
     <input type="date" value="{{ old('date') }}" name="date" class="form-control">
   
</div>

<!--- Surcharges Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('surcharges', 'Recargos:') !!}
    {!! Form::text('surcharges', null, ['class' => 'form-control']) !!}
</div>

<!--- Expiration From Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('expiration_from', 'Vencimientos del:') !!}
    {!! Form::text('expiration_from', null, ['class' => 'form-control']) !!}
</div>

<!--- Expiration To Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('expiration_to', 'Al:') !!}
    {!! Form::text('expiration_to', null, ['class' => 'form-control']) !!}
</div>

<!--- Justification Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('justification', 'Justificación:') !!}
    {!! Form::text('justification', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
