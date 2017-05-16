<!--- Place Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('place', 'Lugar:') !!}
    {!! Form::text('place', null, ['class' => 'form-control']) !!}
</div>

<!--- Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date', 'Fecha:') !!}
    {!! Form::text('date', null, ['class' => 'form-control']) !!}
</div>

<!--- Name Accredited Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_accredited', 'Nombre del Acreditado:') !!}
    {!! Form::text('name_accredited', null,  ['class' => 'form-control']) !!}
</div>

<!--- Activity Economic Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('activity_economic', 'Activiadad Economica:') !!}
    {!! Form::text('activity_economic', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Teléfono:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Dirección:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12 col-lg-12">
    <p style="text-align: center;"> 
        ANALISIS DE DATOS DE CRÉDITO DIARIO
    </p>
    <p style="text-align: center;"> 
        <strong>DATOS SUJETOS A VERIFICACIÓN</strong>
    </p>
</div>

<!--- Sales Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sales', 'Ventas:') !!}
    {!! Form::text('sales', null, ['class' => 'form-control']) !!}
</div>

<!--- Buy Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('buy', 'Compras:') !!}
    {!! Form::text('buy', null, ['class' => 'form-control']) !!}
</div>

<!--- Gross Profit Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('gross_profit', 'Utilidad Bruta:') !!}
    {!! Form::text('gross_profit', null, ['class' => 'form-control']) !!}
</div>

<!--- Other Income Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('other_income', 'Otros Ingresos:') !!}
    {!! Form::text('other_income', null, ['class' => 'form-control']) !!}
</div>

<!--- Other Expenses Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('other_expenses', 'Otros Gastos:') !!}
    {!! Form::text('other_expenses', null, ['class' => 'form-control']) !!}
</div>

<!--- Familiar Costs Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('familiar_costs', 'Gastos Familiares:') !!}
    {!! Form::text('familiar_costs', null, ['class' => 'form-control']) !!}
</div>

<!--- Montly Net Income Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('montly_net_income', 'Utilidad Neta Mensual:') !!}
    {!! Form::text('montly_net_income', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'uppercase btn btn-primary']) !!}
    {!! Form::submit('Aplicar Formulas', ['class' => 'uppercase btn bg-navy']) !!}
</div>
