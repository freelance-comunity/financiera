    <!--- Phone Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('phone', 'Número de teléfono fijo:') !!}
        {!! Form::text('phone', $accredited->phone, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
    </div>

    <!--- Phone Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('cel', 'Número de teléfono celular:') !!}
        {!! Form::text('cel', $accredited->cel, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
    </div>

    <!--- Date Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('date', 'Fecha:') !!}
        <input type="date" value="{{ old('date') }}" name="date" class="form-control">
         <input type="hidden" name="accredited_id" value="{{ $accredited->id}}">
    </div>

    <!--- Aval Field --->
    <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('colony', 'Colonia/Población:') !!}
           
            @foreach ($address as $address)
             {!! Form::text('colony', $address->colony, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
             @endforeach
           
    </div>
    @php
        $addresses = $accredited->addresses;
    @endphp
        <!--- Aval Field --->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('municipality', 'Municipio:') !!}
           
                 @foreach ($addresses as $addresses)
                    <input type="text" name="municipality" value="{{$addresses->municipality}} ", class="form-control" readonly>
                 @endforeach
           
        </div>

    @php
        $addresses = $accredited->addresses;
    @endphp
        <!--- Aval Field --->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('state', 'Estado:') !!}
           
                 @foreach ($addresses as $addresses)
                    <input type="text" name="state" value="{{$addresses->federative}} ", class="form-control" readonly>
                 @endforeach
           
        </div>


    <!--- Name Spouse Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('name_spouse', 'Nombre del Conyugue:') !!}
        {!! Form::text('name_spouse', null, ['class' => 'form-control']) !!}
    </div>
    @php
        $avals = $accredited->avals;
    @endphp
         <!--- Aval Field --->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('aval', 'Nombre del aval:') !!}
           
                 @foreach ($avals as $aval)
                    <input type="text" name="aval" value="{{$aval->name}} {{$aval->last_name}}", class="form-control" readonly>
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
        $micros = $accredited->micros;
    @endphp
    <!--- Economic Activity Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('economic_activity', 'Actividad económica:') !!}
        @foreach ($micros as $micros)
       <input type="text" name="economic_activity" value="{{$micros->name}}", class="form-control" readonly>
       @endforeach
    </div>

    <!--- Amount Requested Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('amount_requested', 'Monto solicitado:') !!}
        {!! Form::text('amount_requested', null, ['class' => 'form-control', 'maxlength' => 5]) !!}
    </div>
    
    <!--- Warranty Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('warranty', 'Garantía líquida:') !!}
        {!! Form::text('warranty', null, ['class' => 'form-control']) !!}
    </div>

    <!--- Warranty Type Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('warranty_type', 'Tipo de garantía:') !!}
        {!! Form::select('warranty_type',['Aval'=>'Aval','Prendaria'=>'Prendaria','Hipotecaria'=>'Hipotecaria'], null, ['class' => 'form-control']) !!}
    </div>

    <!--- Warranty Value Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('warranty_value', 'Valor de la garantía:') !!}
        {!! Form::text('warranty_value', null, ['class' => 'form-control']) !!}
    </div>
    


    <!--- Sequence Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('sequence', 'Frecuencia en:') !!}       
   <select  name="sequence" id="e9" style="width:350px" class="populate">
        <optgroup label="Diario">
        <option value="1">30 días</option>
        <option value="1.5">45 días</option>
        <option value="2">60 días</option>
        <option value="3">90 días</option>
        <option value="4">120 días</option>
        <option value="6">180 días</option>
      </optgroup>
      <optgroup label="Diario Cuota">
        <option value="1"> 20 cuotas</option>
        <option value="1.5"> 30 cuotas</option>
        <option value="2.25"> 45 cuotas</option>
        <option value="3"> 60 cuotas</option>
         <option value="4.5"> 90 cuotas</option>
      </optgroup>
    </select>
    </div>
<script>
$(function(){
           $("#e9").select2({
            placeholder: "Seleccione"
           });
      });
 
     $("#e9").on("change", function(e) { 
        var selections = (JSON.stringify({val:e.val}));
        $("#valor").val(selections);
 })
</script>
    


    <!--- Term Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('term', 'Plazo en días:') !!}
        {!! Form::text('term', null, ['class' => 'form-control', 'maxlength' => 3, ]) !!}
    </div>

    <!--- Frequency Payment Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('frequency_payment', 'Frecuencia de pago:') !!}       
        {!! Form::text('frequency_payment', $product->modality, ['class' => 'form-control', 'readonly']) !!}       
    </div>

    <!--- Interest Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('interest', 'Interés:') !!}
        {!! Form::text('interest', $product->cup_interest, ['class' => 'form-control', 'readonly']) !!}
    </div>
    @php
        $user = $accredited->user;
    @endphp

    <!--- Adviser Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('adviser', 'Asesor de Credito:') !!}
        <input type="text" name="adviser" value="{{$accredited->user->name}} {{$accredited->user->last_name}}", class="form-control" readonly>
    </div>

    <!--- Observations Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('observations', 'Observaciones:') !!}
        {!! Form::text('observations', null, ['class' => 'form-control']) !!}
    </div>

    <!--- Requested Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('requested', 'Atención en:') !!}
        {!! Form::select('requested',['Campo'=>'Campo', 'Oficina'=>'Oficina'], null, ['class' => 'form-control']) !!}
    </div>

    <!--- Qualification Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('qualification', 'Calificación:') !!}
        {!! Form::select('qualification',['1' =>'1', '2'=>'2','3'=>'3','4'=>'4','5'=>'5', '6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], null, ['class' => 'form-control']) !!}
    </div>

    <!--- Qualification Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::select('status',['Revisión' =>'Revisión', 'Aprobado'=>'Aprobado','Ministrado'=>'Ministrado'], null, ['class' => 'form-control']) !!}
        <input type="hidden" name="type_product" value="{{$product->id}}">
    </div>


    <!--- Submit Field --->
    <div class="form-group col-sm-12">
        {!! Form::submit('guardar', ['class' => ' uppercase btn btn-primary']) !!}
    </div>
