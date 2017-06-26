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
        {!! Form::label('date', 'Fecha de solicitud:') !!}
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
        @if ($accredited->spouse_name)
            {!! Form::text('name_spouse', $accredited->spouse_name, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
            @else
            {!! Form::text('name_spouse', 'Sin conyugue', ['class' => 'form-control', 'readonly' => 'readonly']) !!}
        @endif
        
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
@php
$count = $credits->where('status', 'Ministrado')->count();
@endphp
    <!--- Previous Credit Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('previous_credit', 'Credito anterior:') !!}
        {!! Form::text('previous_credit', $count, ['class' => 'form-control','readonly']) !!}
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
   @if ($product->modality == "Diario")
       <script>
        function diario(sel)
        {
            //alert(sel.value);
            var x = sel.value * 30;
            document.getElementById('output').value=x;
        }
    </script>
       <!--- Sequence Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('sequence', 'Frecuencia en:') !!}       
   <select onchange="diario(this);" name="sequence"  style="width:350px" class="form-control">
       <option value="0" selected="selected">Selecciona frecuencia</option>
        <option value="1">1 mes </option>
        <option value="1.5">1.5 meses</option>
        <option value="2">2 meses</option>
        <option value="3">3 meses</option>
        <option value="4">4 meses</option>
        <option value="6">6 meses</option>
    </select>
    </div>

     <div   class="form-group col-sm-6 col-lg-4">
        {!! Form::label('term', 'Plazo en días:') !!}     
       <input type="text" name="term"   id="output" readonly class="form-control">  
       </div>
    @elseif($product->modality == "Diario cuota")
     <script>
        function cuota(sel)
        {
            //alert(sel.value);
            var x = sel.value * 20;
            document.getElementById('cuotas').value=x;
        }
    </script>
    <!--- Sequence Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('sequence', 'Frecuencia en:') !!}       
   <select onchange="cuota(this);" name="sequence"  style="width:350px" class="form-control">
      <option value="0" selected="selected">Selecciona frecuencia</option>
        <option value="1"> 1 mes</option>
        <option value="1.5">1.5 meses</option>
        <option value="2.25"> 2.25 meses</option>
        <option value="3"> 3 meses</option>
         <option value="4.5"> 4.5 meses</option>
    </select>
    </div>
        <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('term', 'Plazo en cuotas:') !!}     
       <input type="text" name="term"    id="cuotas" readonly class="form-control">  
       </div>          
    @endif

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
   
       
         <input type="hidden" name="days" value="{{$product->days}}">
  
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
        {!! Form::select('status',['Revisión' =>'Revisión'], null, ['class' => 'form-control', 'readonly']) !!}
        <input type="hidden" name="type_product" value="{{$product->id}}">
    </div>


    <!--- Submit Field --->
    <div class="form-group col-sm-12">
        {!! Form::submit('guardar', ['class' => ' uppercase btn btn-primary']) !!}
    </div>
