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

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Dirección:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!--- Colony Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('colony', 'Colonia:') !!}
    {!! Form::text('colony', null, ['class' => 'form-control']) !!}
</div>

<!--- Municipality Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('municipality', 'Municipio:') !!}
     {!! Form::select('municipality',['Acacoyagua' => 'Acacoyagua', 'Acala' => 'Acala', 'Acapetahua' => 'Acapetahua', 'Altamirano' => 'Altamirano', 'Amatan' => 'Amatan', 'Amatenango de la Frontera' => 'Amatenango de la Frontera', 'Amatenango del Valle' => 'Amatenango del Valle', 'Angel Albino Corzo' => 'Angel Albino Corzo', 'Arriaga' => 'Arriaga', 'Bejucal de Ocampo' => 'Bejucal de Ocampo', 'Bella Vista' => 'Bella Vista', 'Berriozabal' => 'Berriozabal', 'Bochil' => 'Bochil', 'El Bosque' => 'El Bosque', 'Cacahoatan' => 'Cacahoatan', 'Catazaja' => 'Catazaja', 'Cintalapa' => 'Cintalapa', 'Coapilla' => 'Coapilla', 'Comitan de Dominguez' => 'Comitan de Dominguez', 'La Concordia' => 'La Concordia', 'Copainala' => 'Copainala', 'Chalchihuitan' => 'Chalchihuitan', 'Chamula' => 'Chamula', 'Chanal' => 'Chanal', 'Chapultenango' => 'Chapultenango', 'Chenalho' => 'Chenalho', 'Chiapa de Corzo' => 'Chiapa de Corzo', 'Chiapilla' => 'Chiapilla', 'Chicoasen' => 'Chicoasen', 'Chicomuselo' => 'Chicomuselo', 'Chilon' => 'Chilon', 'Escuintla' => 'Escuintla', 'Francisco Leon' => 'Francisco Leon', 'Frontera Comalapa' => 'Frontera Comalapa', 'Frontera Hidalgo' => 'Frontera Hidalgo', 'La Grandeza' => 'La Grandeza', 'Huehuetan' => 'Huehuetan', 'Huixtan' => 'Huixtan', 'Huitiupan' => 'Huitiupan', 'Huixtla' => 'Huixtla', 'La Independencia' => 'La Independencia', 'Ixhuatan' => 'Ixhuatan', 'Ixtacomitan' => 'Ixtacomitan', 'Ixtapa' => 'Ixtapa', 'Ixtapangajoya' => 'Ixtapangajoya', 'Jiquipilas' => 'Jiquipilas', 'Jitotol' => 'Jitotol', 'Juarez' => 'Juarez', 'Larrainzar' => 'Larrainzar', 'La Libertad' => 'La Libertad', 'Mapastepec' => 'Mapastepec', 'Las Margaritas' => 'Las Margaritas', 'Mazapa de Madero' => 'Mazapa de Madero', 'Mazatan' => 'Mazatan', 'Metapa' => 'Metapa', 'Mitontic' => 'Mitontic', 'Motozintla' => 'Motozintla', 'Nicolas Ruiz' => 'Nicolas Ruiz', 'Ocosingo' => 'Ocosingo', 'Ocotepec' => 'Ocotepec', 'Ocozocoautla de Espinosa' => 'Ocozocoautla de Espinosa', 'Ostuacan' => 'Ostuacan', 'Osumacinta' => 'Osumacinta', 'Oxchuc' => 'Oxchuc', 'Palenque' => 'Palenque', 'Pantelho' => 'Pantelho', 'Pantepec' => 'Pantepec', 'Pichucalco' => 'Pichucalco', 'Pijijiapan' => 'Pijijiapan', 'El Porvenir' => 'El Porvenir', 'Villa Comaltitlan' => 'Villa Comaltitlan', 'Villa Flores' => 'Villa Flores', 'Pueblo Nuevo Solistahuacan' => 'Pueblo Nuevo Solistahuacan', 'Rayon' => 'Rayon', 'Reforma' => 'Reforma', 'Revolución Mexicana' => 'Revolución Mexicana', 'Las Rosas' => 'Las Rosas', 'Sabanilla' => 'Sabanilla', 'Salto de Agua' => 'Salto de Agua', 'San Cristobal de las Casas' => 'San Cristobal de las Casas', 'San Fernando' => 'San Fernando', 'Siltepec' => 'Siltepec', 'Simojovel' => 'Simojovel', 'Sitala' => 'Sitala', 'Socoltenango' => 'Socoltenango', 'Solosuchiapa' => 'Solosuchiapa', 'Soyalo' => 'Soyalo', 'Suchiapa' => 'Suchiapa', 'Suchiate' => 'Suchiate', 'Sunuapa' => 'Sunuapa', 'Tapachula' => 'Tapachula', 'Tapalapa' => 'Tapalapa', 'Tapilula' => 'Tapilula', 'Tecpatan' => 'Tecpatan', 'Tenejapa' => 'Tenejapa', 'Teopisca' => 'Teopisca', 'Tila' => 'Tila', 'Tonala' => 'Tonala', 'Totolapa', 'La Trinitaria' => 'La Trinitaria', 'Tumbala' => 'Tumbala', 'Tuxtla Gutierrez' => 'Tuxtla Gutierrez', 'Tuxtla Chico' => 'Tuxtla Chico', 'Tuzantan' => 'Tuzantan', 'Tzimol' => 'Tzimol', 'Union Juarez' => 'Union Juarez', 'Venustiano Carranza' => 'Venustiano Carranza', 'Villa Corzo' => 'Villa Corzo', 'Yajalon' => 'Yajalon', 'San Lucas' => 'San Lucas', 'Zinacantan' => 'Zinacantan', 'San Juan Cancuc' => 'San Juan Cancuc', 'Aldama' => 'Aldama', 'Benemerito de las Americas' => 'Benemerito de las Americas', 'Maravilla Tenejapa' => 'Maravilla Tenejapa', 'Marques de Comillas' => 'Marques de Comillas', 'Montecristo de Guerrero' => 'Montecristo de Guerrero'] ,null, ['class' => 'form-control'])!!}
</div>

<!--- Nacionality Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nacionality', 'Nacionalidad:') !!}
    {!! Form::select('nacionality',['Mexicana' => 'Mexicana'], null, ['class' => 'form-control'])!!}
</div>

<!--- Place Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('place', 'Lugar de Nacimiento:') !!}
    {!! Form::text('place', null, ['class' => 'form-control']) !!}
</div>

<!--- Birthday Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('birthday', 'Fecha de Nacimiento:') !!}
    <input type="date" name="birthday" class="form-control">
</div>

<!--- Ife Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ife', 'Folio de Ife:') !!}
    {!! Form::text('ife', null, ['class' => 'form-control']) !!}
</div>

<!--- Curp Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('curp', 'Curp:') !!}
    {!! Form::text('curp', null, ['class' => 'form-control']) !!}
    
</div>

<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Teléfono:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!--- Cel Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cel', 'Celular:') !!}
    {!! Form::text('cel', null, ['class' => 'form-control']) !!}
</div>

<!--- Sex Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sex', 'Sexo:') !!}
    {!! Form::select('sex',['Hombre' => 'Hombre', 'Mujer' => 'Mujer'], null, ['class' => 'form-control'])!!}
</div>

<!--- Ocupation Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ocupation', 'Ocupación:') !!}
    {!! Form::text('ocupation', null, ['class' => 'form-control']) !!}
</div>

<!--- Address Work Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address_work', 'Dirección de Trabajo:') !!}
   {!! Form::text('address_work', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>
