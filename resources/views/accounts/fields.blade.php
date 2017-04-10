<!--- Name Bank Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_bank', 'Nombren del Banco:') !!}
    {!! Form::text('name_bank', null, ['class' => 'form-control']) !!}
</div>

<!--- Account Number Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('account_number', 'Número de Cuenta:') !!}
    {!! Form::text('account_number', null, ['class' => 'form-control']) !!}
</div>

<!--- Account Type Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('account_type', 'Tipo de Cuenta:') !!}
    {!! Form::select('account_type',['Concentradora' => 'Concentradora', 'Dispersadora' => 'Dispersadora'], null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>
