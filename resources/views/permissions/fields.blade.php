<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Display Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('display_name', 'Nombre opcional:') !!}
    {!! Form::text('display_name', null, ['class' => 'form-control']) !!}
</div>

<!--- Description Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('description', 'Descripción del permiso:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>
