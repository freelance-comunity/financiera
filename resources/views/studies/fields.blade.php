<!--- Dependent Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('dependent', 'Número de hijos o dependientes económicos :') !!}
    {!! Form::text('dependent', null, ['class' => 'form-control']) !!}
    <input type="hidden" name="accrediteds_id" value="{{ $accrediteds->id}}">
</div>

<!--- Regimen Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('regimen', 'Regimen de casamiento:') !!}
    {!! Form::select('regimen',['Bienes Mancomunados' => 'Bienes Mancomunados', 'Bienes Separados' => 'Bienes Separados'], null, ['class' => 'form-control'])!!}
    
</div>

<!--- Type Housing Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('type_housing', 'Tipo de vivienda:') !!}
    {!! Form::select('type_housing',['Departamento' => 'Departamento', 'Casa' => 'Casa'], null, ['class' => 'form-control'])!!}
</div>
<!--- Type Housing Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('type_home', 'La vivienda es:') !!}
     {!! Form::select('type_home',['Propia' => 'Propia', 'Arrendada' => 'Arrendada', 'Familiar' => 'Familiar'], null, ['class' => 'form-control'])!!}
</div>

<!--- Time Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('time_address', 'Tiempo de vivir en el mismo domicilio:') !!}
    {!! Form::text('time_address', null, ['class' => 'form-control']) !!}
</div>

<!--- Economic Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('economic', 'Nivel socioeconómico:') !!}
    {!! Form::select('economic',['Extrema Pobreza' => 'Extrema Pobreza', 'Muy Pobre' => 'Muy Pobre', 'Pobre' => 'Pobre', 'Condición Media' => 'Condición Media', 'Condición Alta' => 'Condición Alta'], null, ['class' => 'form-control'])!!}
</div>

<!--- Type Material Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('type_material', 'Tipo de material de la vivienda:') !!}
    {!! Form::text('type_material', null, ['class' => 'form-control']) !!}
</div>

<!--- Scholarship Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('scholarship', 'Escolaridad:') !!}
    {!! Form::select('scholarship',['Ninguna' => 'Ninguna', 'Primaria' => 'Primaria', 'Secundaria' => 'Secundaria', 'Bachillerato' => 'Bachillerato', 'Universidad' => 'Universidad'], null, ['class' => 'form-control'])!!}
</div>

<!--- School Grade Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('school_grade', 'Grado de escolaridad:') !!}
    {!! Form::text('school_grade', null, ['class' => 'form-control']) !!}
</div>

<!--- Sector Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sector', 'Rubro de la Empresa:') !!}
    {!! Form::select('sector',['Comercio' => 'Comercio', 'Servicio' => 'Servicio', 'Artesano' => 'Artesano', 'Industria' => 'Industria', 'Agropecuario' => 'Agropecuario'], null, ['class' => 'form-control'])!!}
   
</div>

<!--- Company Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('company', 'Naturaleza jurídica de la empresa:') !!}
     {!! Form::select('company',['Formal' => 'Formal', 'Informal' => 'Informal'], null, ['class' => 'form-control'])!!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>