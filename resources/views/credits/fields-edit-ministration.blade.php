    <!--- Date Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('date', 'Fecha de solicitud:') !!}
        {!! Form::text('date', null, ['class' => 'form-control', 'readonly' =>'readonly']) !!}      
    </div>

    <!--- Aval Field --->
    <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('colony', 'Colonia/Población:') !!}              
            {!! Form::text('colony', null, ['class' => 'form-control', 'readonly' =>'readonly']) !!}           
    </div>
   
        <!--- Aval Field --->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('municipality', 'Municipio:') !!}           
            {!! Form::text('municipality', null, ['class' => 'form-control','readonly' =>'readonly']) !!}            
          </div>

        <!--- Aval Field --->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('state', 'Estado:') !!}          
            {!! Form::text('state', null, ['class' => 'form-control','readonly' =>'readonly']) !!}              
        </div>


    <!--- Name Spouse Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('name_spouse', 'Nombre del Conyugue:') !!}
        {!! Form::text('name_spouse', null, ['class' => 'form-control', 'readonly' =>'readonly']) !!}
    </div>
  
         <!--- Aval Field --->
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('aval', 'Nombre del aval:') !!}       
            {!! Form::text('aval', null, ['class' => 'form-control','readonly' =>'readonly']) !!}           
         </div>

    <!--- Previous Credit Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('previous_credit', 'Credito anterior:') !!}
        {!! Form::text('previous_credit', null, ['class' => 'form-control', 'readonly' =>'readonly']) !!}
    </div>

    <!--- Debts Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('debts', 'Deudas con otras financieras  :') !!}
        {!! Form::select('debts', ['Si'=>'Si','No'=>'No'], null, ['class' => 'form-control', 'readonly' =>'readonly']) !!}
    </div>
  
    <!--- Economic Activity Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('economic_activity', 'Actividad económica:') !!}
        {!! Form::text('economic_activity', null, ['class' => 'form-control', 'readonly' =>'readonly']) !!}
    </div>

    <!--- Amount Requested Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('amount_requested', 'Monto solicitado:') !!}
        {!! Form::text('amount_requested', null, ['class' => 'form-control','readonly' => 'readonly', 'maxlength' => 5]) !!}
    </div>

    <!--- Authorized Amount Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('authorized_amount', 'Monto autorizado:') !!}
        {!! Form::text('authorized_amount', null, ['class' => 'form-control', 'readonly']) !!}
    </div>
    
    <!--- Warranty Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('warranty', 'Garantía líquida:') !!}
        {!! Form::text('warranty', null, ['class' => 'form-control', 'readonly' =>'readonly']) !!}
    </div>

    <!--- Warranty Type Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('warranty_type', 'Tipo de garantía:') !!}
        {!! Form::text('warranty_type', null, ['class' => 'form-control','readonly']) !!}
    </div>

    <!--- Warranty Value Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('warranty_value', 'Valor de la garantía:') !!}
        {!! Form::text('warranty_value', null, ['class' => 'form-control','readonly']) !!}
    </div>
    <!--- Sequence Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('sequence', 'Frecuencia en:') !!}       
        {!! Form::text('sequence', null, ['class' => 'form-control','readonly'])!!}
    </div>

    <!--- Term Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('term', 'Plazo en días:') !!}
        {!! Form::text('term', null, ['class' => 'form-control', 'readonly']) !!}
    </div>

    <!--- Frequency Payment Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('frequency_payment', 'Frecuencia de pago:') !!}       
        {!! Form::text('frequency_payment', null, ['class' => 'form-control', 'readonly']) !!}       
    </div>

    <!--- Interest Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('interest', 'Interés:') !!}
        {!! Form::text('interest', null,  ['class' => 'form-control', 'readonly']) !!}
    </div>
  

    <!--- Adviser Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('adviser', 'Asesor de Credito:') !!}
         {!! Form::text('adviser', null, ['class' => 'form-control', 'readonly']) !!}
    </div>

    <!--- Observations Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('observations', 'Observaciones:') !!}
        {!! Form::text('observations', null, ['class' => 'form-control','readonly']) !!}
    </div>

    <!--- Requested Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('requested', 'Atención en:') !!}
        {!! Form::text('requested', null, ['class' => 'form-control','readonly']) !!}
    </div>

    <!--- Qualification Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('qualification', 'Calificación:') !!}
        {!! Form::text('qualification', null, ['class' => 'form-control','readonly']) !!}
    </div>

    <!--- Qualification Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('status', 'Estatus:') !!}
        {!! Form::text('status',null, ['class' => 'form-control','readonly']) !!}
        
    </div>
     @if ($credits->status == "Aprobado" or "Ministrado")
 <!--- Date Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('date_ministration', 'Fecha de ministración:') !!}      
             <input type="date" value="{{ old('date_ministration') }}" name="date_ministration" class="form-control">
    </div>
    @endif

    <!--- Submit Field --->
    <div class="form-group col-sm-12">
        {!! Form::submit('guardar', ['class' => ' uppercase btn btn-primary']) !!}
    </div>
