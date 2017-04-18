<!--- Name Institution Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_institution', 'Nombre de la institución:') !!}
    {!! Form::text('name_institution', null, ['class' => 'form-control']) !!}
</div>

<!--- Amount Resource Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('amount_resource', 'Monto del recurso:') !!}
    {!! Form::text('amount_resource', null, ['class' => 'form-control']) !!}
</div>

<!--- Reference Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('reference', 'Referencia:') !!}
    {!! Form::text('reference', null, ['class' => 'form-control']) !!}
</div>
@php
    $count = App\Models\Account::all();
@endphp
<!--- Destination Account Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('destination_account', 'Cuenta destino:') !!}
    <select name="destination_account" class="form-control" id="">
    @if ($count->isEmpty())
         <option value="">Aún no hay cuentas dadas de alta en el sistema</option>
    @else
        @foreach ($accounts as $element)
           <option value="{{$element->account_number}}" {{ ($element->account_number == $anchoring->destination_account) ? 'selected=selected' : '' }}>
            {{$element->account_number}}
        </option>
        @endforeach
    @endif
    </select>
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>
