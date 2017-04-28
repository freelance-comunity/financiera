
<!--- Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'No. de teléfono fijo:') !!}
    <input type="text" name="phone" value="{{$accrediteds->phone}}", class="form-control" disabled>
</div>

<!--- Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cel', 'No. de celular:') !!}
    <input type="text" name="cel" value="{{$accrediteds->cel}}", class="form-control" disabled>
</div>

<!--- Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date', 'Fecha:') !!}
    <input type="date" name="date" class="form-control">
     <input type="hidden" name="accredited_id" value="{{ $accrediteds->id}}">
</div>

@php
    $addresses = $accrediteds->addresses;
@endphp
     <!--- Aval Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('address_id', 'colonia:') !!}
       
             @foreach ($addresses as $addresses)
                <input type="text" name="address_id" value="{{$addresses->colony}} ", class="form-control" disabled>
             @endforeach
       
    </div>
@php
    $addresses = $accrediteds->addresses;
@endphp
    <!--- Aval Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('address_id', 'colonia:') !!}
       
             @foreach ($addresses as $addresses)
                <input type="text" name="address_id" value="{{$addresses->municipality}} ", class="form-control" disabled>
             @endforeach
       
    </div>

@php
    $addresses = $accrediteds->addresses;
@endphp
    <!--- Aval Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('address_id', 'colonia:') !!}
       
             @foreach ($addresses as $addresses)
                <input type="text" name="address_id" value="{{$addresses->federative}} ", class="form-control" disabled>
             @endforeach
       
    </div>


<!--- Name Spouse Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_spouse', 'Nombre del Conyugue:') !!}
    {!! Form::text('name_spouse', null, ['class' => 'form-control']) !!}
</div>
@php
    $avals = $accrediteds->avals;
@endphp
     <!--- Aval Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('aval_id', 'Aval:') !!}
       
             @foreach ($avals as $aval)
                <input type="text" name="aval_id" value="{{$aval->name}} {{$aval->last_name}}", class="form-control" disabled>
             @endforeach
       
    </div>

<!--- Previous Credit Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('previous_credit', 'Credito anterior:') !!}
    {!! Form::text('previous_credit', null, ['class' => 'form-control']) !!}
</div>

<!--- Debts Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('debts', 'Deudas con otras financieras  :') !!}
    {!! Form::select('debts', ['Si'=>'Si','No'=>'No'], null, ['class' => 'form-control']) !!}
</div>
@php
    $micros = $accrediteds->micros;
@endphp
<!--- Economic Activity Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('economic_activity', 'Actividad económica:') !!}
    @foreach ($micros as $micros)
   <input type="text" name="economic_activity" value="{{$micros->name}}", class="form-control" disabled>
   @endforeach
</div>

<!--- Amount Requested Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('amount_requested', 'Monto solicitado:') !!}
    {!! Form::text('amount_requested', null, ['class' => 'form-control']) !!}
</div>

<!--- Authorized Amount Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('authorized_amount', 'Monto autorizado:') !!}
    {!! Form::text('authorized_amount', null, ['class' => 'form-control']) !!}
</div>

<!--- Warranty Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('warranty', 'Garantía líquida:') !!}
    {!! Form::text('warranty', null, ['class' => 'form-control']) !!}
</div>

<!--- Warranty Type Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('warranty_type', 'Tipo de garantía:') !!}
    {!! Form::select('warranty_type',['Aval'=>'Aval','Prendaria'=>'Prendaria','Hipotecaria'=>'Hipotecari'], null, ['class' => 'form-control']) !!}
</div>

<!--- Warranty Value Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('warranty_value', 'Valor de la garantía:') !!}
    {!! Form::text('warranty_value', null, ['class' => 'form-control']) !!}
</div>

<!--- Sequence Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sequence', 'Secuencia:') !!}
    {!! Form::text('sequence', null, ['class' => 'form-control']) !!}
</div>

<!--- Term Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('term', 'Plazo:') !!}
    {!! Form::text('term', null, ['class' => 'form-control']) !!}
</div>

<!--- Frequency Payment Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('frequency_payment', 'Frecuencia de pago:') !!}
    {!! Form::text('frequency_payment', null, ['class' => 'form-control']) !!}
</div>

@php
    $product = App\Models\Product::all();
@endphp
<!--- Interest Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('interest', 'Interés:') !!}
    
     @foreach ($product as $element)
           <input type="text" name="interest" value="{{$element->cup_interest}} ", class="form-control" disabled>
        @endforeach  
   
</div>
@php
    $user = $accrediteds->user;
@endphp

<!--- Adviser Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('adviser', 'Asesor de Credito:') !!}
    <input type="text" name="adviser" value="{{$accrediteds->user->name}} {{$accrediteds->user->last_name}}", class="form-control" disabled>
</div>

<!--- Observations Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('observations', 'Observaciones:') !!}
    {!! Form::text('observations', null, ['class' => 'form-control']) !!}
</div>

<!--- Requested Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('requested', 'Solicitud levantada en:') !!}
    {!! Form::select('requested',['Campo'=>'Campo', 'Oficina'=>'Oficina'], null, ['class' => 'form-control']) !!}
</div>

<!--- Qualification Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('qualification', 'Calificación:') !!}
    {!! Form::select('qualification',['1' =>'1', '2'=>'2','3'=>'3','4'=>'4','5'=>'5', '6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class' => 'form-control']) !!}
</div>

<!--- Qualification Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('status', 'status:') !!}
    {!! Form::select('status',['Revisión' =>'Revisión', 'Rechazada'=> 'Rechazada', 'Aprobada' =>'Aprobada'], null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => ' uppercase btn btn-primary']) !!}
</div>
