<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Nombre(s):') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Last Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('last_name', 'Apellidos:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!--- Birthdate Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('birthdate', 'Fecha de Nacimiento:') !!}
    <input type="date" name="birthdate"  class="form-control">
</div>

<!--- Cel Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cel', 'Teléfono Celular:') !!}
    {!! Form::text('cel', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Teléfono de Casa:') !!}
   {!! Form::text('phone', null, ['class' => 'form-control']) !!}   
</div>

<!--- Home Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Dirección:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!--- Nationality Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nationality', 'Nacionalidad:') !!}
    {!! Form::select('nationality',['Mexicana' => 'Mexicana'], null, ['class' => 'form-control'])!!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ife', 'Folio IFE:') !!}
    {!! Form::text('ife', null, ['class' => 'form-control']) !!}
</div>

<!--- Curp Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('curp', 'CURP:') !!}
    {!! Form::text('curp', null, ['class' => 'form-control']) !!}
</div>
<!--- Curp Field --->


<!--- Sex Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sex', 'Sexo:') !!} <br>
    {!! Form::select('sex',['Hombre' => 'Hombre', 'Mujer' => 'Mujer'], null, ['class' => 'form-control'])!!}
    
</div>

<!--- Civil Status Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('civil_status', 'Estado Civil:') !!}
    {!! Form::select('civil_status',['Soltero/a' => 'Soltero/a', 'Casado/a' => 'Casado/a',
    'Viudo/a' => 'Viudo/a', 'Divorciado/a' => 'Divorciado/a'], null, ['class' => 'form-control'])!!}
</div>




<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>