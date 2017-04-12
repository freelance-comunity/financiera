<!--- Credit Actualy Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('credit_actualy', '¿Tiene crédito con alguna empresa actualmente?:') !!}
     {!! Form::select('credit_actualy',['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control'])!!}
</div>

<!--- Name Company Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_company', 'Nombre de la empresa:') !!}
    {!! Form::text('name_company', null, ['class' => 'form-control']) !!}
</div>

<!--- Amount Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('amount', 'Monto recibido:') !!}
    <input type="number" name="amount" min="1" max="10" class="form-control">
</div>

<!--- Term Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('term', 'Plazo:') !!}
    {!! Form::text('term', null, ['class' => 'form-control']) !!}
</div>

<!--- Payment Amount Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('payment_amount', 'Monto de pago por amortización:') !!}
   <input type="number" name="payment_amount" min="1" max="10" class="form-control">
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>
