<!--- Name Institution Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_institution', 'Nombre de la institución:') !!}
    {!! Form::text('name_institution', null, ['class' => 'form-control']) !!}
</div>

<!--- Amount Resource Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('amount_resource', 'Monto del recurso:') !!}
     <div class="input-group"> 
        <span class="input-group-addon">$</span>
        <input type="number" name="amount_resource" value="1000" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" />
    </div>
</div>

<!--- Reference Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('reference', 'Referencia:') !!}
    {!! Form::text('reference', null, ['class' => 'form-control']) !!}
</div>

<!--- Destination Account Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('destination_account', 'Cuenta destino:') !!}
    <select name="destination_account" class="form-control" id="">
        @foreach ($accounts as $element)
            <option value="{{$element->account_number}}">{{$element->name_bank}}----{{$element->account_number}}</option>
        @endforeach
    </select>
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>
