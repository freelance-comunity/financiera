<!--- Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date', 'Date:') !!}
   <input type="date" name="date" value="{{$holidays->date}}" class="form-control">
</div>

<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Color Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('color', 'Color de Etiqueta:') !!}
    <input type="color" name="color" value="{{$holidays->color}}" class="form-control">
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
