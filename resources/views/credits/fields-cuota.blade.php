<!--- Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date', 'Fecha:') !!}
    <input type="date" name="date" class="form-control">
     <input type="hidden" name="accredited_id" value="{{ $accrediteds->id}}">
</div>

<!--- Name Spouse Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_spouse', 'Nombre del Conyugue:') !!}
    {!! Form::text('name_spouse', null, ['class' => 'form-control']) !!}
</div>
@php
    $avals = App\Models\Aval::all();
@endphp
     <!--- Aval Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('aval_id', 'Aval:') !!}
        <select name="aval_id" value="" class="form-control" id="">
        
             @foreach($avals as $avals)
             <option value="{{ $avals->id}}">{{$avals->name}}</option>
             @endforeach
         
        </select>
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

<!--- Economic Activity Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('economic_activity', 'Actividad económica:') !!}
    {!! Form::text('economic_activity', null, ['class' => 'form-control']) !!}
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
    {!! Form::text('warranty_type', null, ['class' => 'form-control']) !!}
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
    <select name="interest" class="form-control" id="">
     @foreach ($product as $element)
           <option value="{{$element->cup_interest}}">
            {{$element->cup_interest}}
        </option>
        @endforeach  
    </select>
</div>
@php
    $user = App\User::where('type', 'promotor')->get();
@endphp

<!--- Adviser Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('adviser', 'Asesor de Credito:') !!}
    <select name="adviser" class="form-control">
     @foreach($user as $user)
     <option value="{{$user->id}}">{{$user->name}}</option>
     @endforeach
    </select>   
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
