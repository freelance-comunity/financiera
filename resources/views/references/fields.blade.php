<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', '* Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    <input type="hidden" name="accredited_id" value="{{ $accrediteds->id}}">
</div>

<!--- Last Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('last_name', '* Apellidos:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', '* Dirección:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', '* Teléfono:') !!}
    <input type="tel" name="phone"  class="form-control">
</div>

<!--- Relationship Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('relationship', '* Parentezco:') !!}
    {!! Form::select('relationship',['Padre' => 'Padre', 'Madre' => 'Madre', 'Suegro/a'=> 'Suegro/a', 'Hijo/a' => 'Hijo/a', 'Yerno' => 'Yerno', 'Nuera'=> 'Nuera', 'Abuelo/a' => 'Abuelo/a', 'Nieto/a' => 'Nieto/a', 'Hermano/a'=> 'Hermano/a', 'Cuñado' => 'Cuñado', 'Tio/a' => 'Tio/a', 'Sobrino'=> 'Sobrino', 'Conocido' =>'Conocido'], null, ['class' => 'form-control'])!!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>
