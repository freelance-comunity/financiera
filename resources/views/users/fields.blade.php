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
    <input type="date" value="{{ old('birthday', date('d-m-y')) }}" name="birthday" class="form-control">
</div>

<!--- Start Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('start_date', 'Fecha de inicio de contrato:') !!}
   <input type="date" value="{{ old('start_date', date('d-m-y')) }}" name="start_date" class="form-control">
</div>

<!--- Email Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Correo electronico:') !!}
    <input type="email" value="{{ old('email') }}" name="email" class="form-control">
</div>

<!--- Branch Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('branch_id', 'Sucursal:') !!}
    {!! Form::select('branch_id', $branches, null, ['class' => 'form-control'])!!}
</div>

 <!--- Nationality Field --->
    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('type', 'Rol del usuario:') !!}
        {!! Form::select('type',['Promotor' => 'Promotor', 'Caja' => 'Caja', 'Propietario' => 'Propietario', 'Coordinador' => 'Coordinador', 'Mesa' => 'Mesa', 'Dirección' => 'Dirección'], null, ['class' => 'form-control'])!!}
    </div>

<!--- Position Field --->
<div class="form-group col-sm-6 col-lg-12">
    {!! Form::label('position', 'Puesto:') !!}
    <select name="position[]" multiple="multiple" class="form-control select2" id="position"></select>
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>
