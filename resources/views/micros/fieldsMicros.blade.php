<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Nombre de  la Empresa:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
   
</div>

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Dirección de la Empresa:') !!}
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

<!--- Activity Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('activity', 'Giro o actividad principal:') !!}
    {!! Form::select('activity',['Industriales' => 'Industriales', 'Comerciales' => 'Comerciales', 'Servicios' => 'Servicios', 'Privada' => 'Privada'], null, ['class' => 'form-control'])!!}
</div>

<!--- Antiquity Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('antiquity', 'Antiguedad de la Empresa:') !!}
    {!! Form::select('antiquity',['Nueva' => 'Nueva', 'Menos de 1 año' => 'Menos de 1 año', 'De 1  a 3 años' => 'De 1  a 3 años', 'Mayor de 3 años' => 'Mayor de 3 años'], null, ['class' => 'form-control'])!!}
</div>

<!--- Antiquity Locality Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('antiquity_locality', 'Antiguedad en la localidad:') !!}
    {!! Form::select('antiquity_locality',['Nueva' => 'Nueva', 'Menos de 1 año' => 'Menos de 1 año', 'De 1  a 3 años' => 'De 1  a 3 años', 'Mayor de 3 años' => 'Mayor de 3 años'], null, ['class' => 'form-control'])!!}
</div>

<!--- Business Type Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('business_type', 'Tipo de negocio:') !!}
    {!! Form::select('business_type',['Fijo' => 'Fijo', 'Ambulante' => 'Ambulante'], null, ['class' => 'form-control'])!!}
</div>

<!--- Times Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('times', '¿Qué días y en que horario atiende su negocio?:') !!}
    {!! Form::text('times', null, ['class' => 'form-control']) !!}
</div>

<!--- Local Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('local', 'Local comercial:') !!}
    {!! Form::select('local',['Propio' => 'Propio', 'Rentado' => 'Rentado'], null, ['class' => 'form-control'])!!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>
