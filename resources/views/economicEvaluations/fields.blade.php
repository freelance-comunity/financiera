<!--- Place Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('place', 'Lugar:') !!}
    {!! Form::text('place', null, ['class' => 'form-control']) !!}
</div>

<!--- Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date', 'Fecha:') !!}
    <input type="date" name="date" class="form-control" id="theDate">
</div>

<!--- Name Accredited Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_accredited', 'Nombre del Acreditado:') !!}
  <input type="text" name="name_accredited" value=" {{ $accredited->name}} {{ $accredited->last_name}}" class="form-control" readonly="readonly">
    <input type="hidden" name="accredited_id" value="{{ $accredited->id}}">
</div>

<!--- Activity Economic Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('activity_economic', 'Actividad Economica:') !!}
    {!! Form::text('activity_economic', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Teléfono:') !!}
    {!! Form::text('phone', $accredited->phone, ['class' => 'form-control','readonly' => 'readonly']) !!}
</div>

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Dirección:') !!}
    {!! Form::text('address', $accredited->address, ['class' => 'form-control','readonly' =>'readonly']) !!}
</div>

<div class="form-group col-sm-12 col-lg-12">
    <p style="text-align: center;"> 
        ANALISIS DE DATOS DE CRÉDITO DIARIO
    </p>
    <p style="text-align: center;"> 
        <strong>DATOS SUJETOS A VERIFICACIÓN</strong>
    </p>
</div>
<script>
    function calcular()
    {
        ventas = eval(document.getElementById('ventas').value);
        compras = eval(document.getElementById('compras').value);
        utilidad = ventas - compras;

        document.getElementById('utilidad_bruta').value=utilidad;

        otros_ingresos = eval(document.getElementById('otros_ingresos').value);
        otros_gastos = eval(document.getElementById('otros_gastos').value);
        gastos_familiares = eval(document.getElementById('gastos_familiares').value);

        utilidad_neta = utilidad + otros_ingresos - otros_gastos - gastos_familiares;

        document.getElementById('utilidad_neta_mensual').value=utilidad_neta;
    }
</script>
<!--- Sales Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sales', 'Ventas:') !!}
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">$</span>
    {!! Form::text('sales', null, ['class' => 'form-control', 'id' => 'ventas', 'value' => '0', 'onkeyup' => 'calcular()']) !!}
    </div>
</div>

<!--- Buy Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('buy', 'Compras:') !!}
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">$</span>
    {!! Form::text('buy', null, ['class' => 'form-control', 'id' => 'compras', 'value' => '0', 'onkeyup' => 'calcular()']) !!}
    </div>
</div>

<!--- Gross Profit Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('gross_profit', 'Utilidad Bruta:') !!}
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">$</span>
    {!! Form::text('gross_profit', null, ['class' => 'form-control', 'id' => 'utilidad_bruta', 'readonly' => 'readonly']) !!}
    </div>
</div>

<!--- Other Income Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('other_income', 'Otros Ingresos:') !!}
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">$</span>
    {!! Form::text('other_income', null, ['class' => 'form-control', 'id' => 'otros_ingresos', 'value' => '0', 'onkeyup' => 'calcular()']) !!}
    </div>
</div>

<!--- Other Expenses Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('other_expenses', 'Otros Gastos:') !!}
     <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">$</span>
    {!! Form::text('other_expenses', null, ['class' => 'form-control', 'id' => 'otros_gastos', 'value' => '0', 'onkeyup' => 'calcular()']) !!}
    </div>
</div>

<!--- Familiar Costs Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('familiar_costs', 'Gastos Familiares:') !!}
     <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">$</span>
    {!! Form::text('familiar_costs', null, ['class' => 'form-control', 'id' => 'gastos_familiares', 'value' => '0', 'onkeyup' => 'calcular()']) !!}
    </div>
</div>

<!--- Montly Net Income Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('montly_net_income', 'Utilidad Neta Mensual:') !!}
     <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">$</span>
     {!! Form::text('montly_net_income', null, ['class' => 'form-control', 'id' => 'utilidad_neta_mensual', 'readonly' => 'readonly']) !!}
    </div>   
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>
