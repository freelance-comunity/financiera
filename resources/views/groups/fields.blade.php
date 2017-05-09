<!--- Date Create Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date_create', 'Fecha de Creación:') !!}
    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="date_create" class="form-control pull-right" id="datepicker" value="{{ old('date_create') }}">
                </div>
                <!-- /.input group -->
</div>

<!--- Branch Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('branch', 'Sucursal:') !!}
    {!! Form::select('branch',$branches, null, ['class' => 'form-control']) !!}
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>
