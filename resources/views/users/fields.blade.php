<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Last Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('last_name', 'Apellidos:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Dirección:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Teléfono:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!--- Birthday Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('birthday', 'Fecha de Nacimiento:') !!}
    <input type="date" name="birthday" class="form-control">
</div>

<!--- Position Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('position', 'Puesto:') !!}
    {!! Form::select('position', $roles, null, ['class' => 'form-control']) !!}
</div>

<!--- Start Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('start_date', 'Fecha de inicio de contrato:') !!}
   <input type="date" name="start_date" class="form-control">
</div>

<!--- Email Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Correo electronico:') !!}
    <input type="email" name="email" class="form-control">
</div>

<!--- Password Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('password', 'Contraseña de acceso:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!--- Password Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('password_confirmation', 'Confirmar contraseña:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>
