<!--- Avenue Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('avenue', 'Calle/Avenida:') !!}
    {!! Form::text('avenue', null, ['class' => 'form-control']) !!}
</div>

<!--- Streets Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('streets', 'Entre que calles:') !!}
    {!! Form::text('streets', null, ['class' => 'form-control']) !!}
</div>

<!--- Number Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('number', 'Número interior y exterior:') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>

<!--- Colony Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('colony', 'Colonia:') !!}
    {!! Form::text('colony', null, ['class' => 'form-control']) !!}
</div>

<!--- Reference Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('reference', 'Referencia:') !!}
    {!! Form::text('reference', null, ['class' => 'form-control']) !!}
</div>

<!--- Postal Code Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('postal_code', 'Código postal:') !!}
    {!! Form::text('postal_code', null, ['class' => 'form-control']) !!}
</div>

<!--- Municipality Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('municipality', 'Municipio:') !!}
   {!! Form::select('municipality',['Acacoyagua' => 'Acacoyagua', 'Acala' => 'Acala', 'Acapetahua' => 'Acapetahua', 'Altamirano' => 'Altamirano', 'Amatan' => 'Amatan', 'Amatenango de la Frontera' => 'Amatenango de la Frontera', 'Amatenango del Valle' => 'Amatenango del Valle', 'Angel Albino Corzo' => 'Angel Albino Corzo', 'Arriaga' => 'Arriaga', 'Bejucal de Ocampo' => 'Bejucal de Ocampo', 'Bella Vista' => 'Bella Vista', 'Berriozabal' => 'Berriozabal', 'Bochil' => 'Bochil', 'El Bosque' => 'El Bosque', 'Cacahoatan' => 'Cacahoatan', 'Catazaja' => 'Catazaja', 'Cintalapa' => 'Cintalapa', 'Coapilla' => 'Coapilla', 'Comitan de Dominguez' => 'Comitan de Dominguez', 'La Concordia' => 'La Concordia', 'Copainala' => 'Copainala', 'Chalchihuitan' => 'Chalchihuitan', 'Chamula' => 'Chamula', 'Chanal' => 'Chanal', 'Chapultenango' => 'Chapultenango', 'Chenalho' => 'Chenalho', 'Chiapa de Corzo' => 'Chiapa de Corzo', 'Chiapilla' => 'Chiapilla', 'Chicoasen' => 'Chicoasen', 'Chicomuselo' => 'Chicomuselo', 'Chilon' => 'Chilon', 'Escuintla' => 'Escuintla', 'Francisco Leon' => 'Francisco Leon', 'Frontera Comalapa' => 'Frontera Comalapa', 'Frontera Hidalgo' => 'Frontera Hidalgo', 'La Grandeza' => 'La Grandeza', 'Huehuetan' => 'Huehuetan', 'Huixtan' => 'Huixtan', 'Huitiupan' => 'Huitiupan', 'Huixtla' => 'Huixtla', 'La Independencia' => 'La Independencia', 'Ixhuatan' => 'Ixhuatan', 'Ixtacomitan' => 'Ixtacomitan', 'Ixtapa' => 'Ixtapa', 'Ixtapangajoya' => 'Ixtapangajoya', 'Jiquipilas' => 'Jiquipilas', 'Jitotol' => 'Jitotol', 'Juarez' => 'Juarez', 'Larrainzar' => 'Larrainzar', 'La Libertad' => 'La Libertad', 'Mapastepec' => 'Mapastepec', 'Las Margaritas' => 'Las Margaritas', 'Mazapa de Madero' => 'Mazapa de Madero', 'Mazatan' => 'Mazatan', 'Metapa' => 'Metapa', 'Mitontic' => 'Mitontic', 'Motozintla' => 'Motozintla', 'Nicolas Ruiz' => 'Nicolas Ruiz', 'Ocosingo' => 'Ocosingo', 'Ocotepec' => 'Ocotepec', 'Ocozocoautla de Espinosa' => 'Ocozocoautla de Espinosa', 'Ostuacan' => 'Ostuacan', 'Osumacinta' => 'Osumacinta', 'Oxchuc' => 'Oxchuc', 'Palenque' => 'Palenque', 'Pantelho' => 'Pantelho', 'Pantepec' => 'Pantepec', 'Pichucalco' => 'Pichucalco', 'Pijijiapan' => 'Pijijiapan', 'El Porvenir' => 'El Porvenir', 'Villa Comaltitlan' => 'Villa Comaltitlan', 'Villa Flores' => 'Villa Flores', 'Pueblo Nuevo Solistahuacan' => 'Pueblo Nuevo Solistahuacan', 'Rayon' => 'Rayon', 'Reforma' => 'Reforma', 'Revolución Mexicana' => 'Revolución Mexicana', 'Las Rosas' => 'Las Rosas', 'Sabanilla' => 'Sabanilla', 'Salto de Agua' => 'Salto de Agua', 'San Cristobal de las Casas' => 'San Cristobal de las Casas', 'San Fernando' => 'San Fernando', 'Siltepec' => 'Siltepec', 'Simojovel' => 'Simojovel', 'Sitala' => 'Sitala', 'Socoltenango' => 'Socoltenango', 'Solosuchiapa' => 'Solosuchiapa', 'Soyalo' => 'Soyalo', 'Suchiapa' => 'Suchiapa', 'Suchiate' => 'Suchiate', 'Sunuapa' => 'Sunuapa', 'Tapachula' => 'Tapachula', 'Tapalapa' => 'Tapalapa', 'Tapilula' => 'Tapilula', 'Tecpatan' => 'Tecpatan', 'Tenejapa' => 'Tenejapa', 'Teopisca' => 'Teopisca', 'Tila' => 'Tila', 'Tonala' => 'Tonala', 'Totolapa', 'La Trinitaria' => 'La Trinitaria', 'Tumbala' => 'Tumbala', 'Tuxtla Gutierrez' => 'Tuxtla Gutierrez', 'Tuxtla Chico' => 'Tuxtla Chico', 'Tuzantan' => 'Tuzantan', 'Tzimol' => 'Tzimol', 'Union Juarez' => 'Union Juarez', 'Venustiano Carranza' => 'Venustiano Carranza', 'Villa Corzo' => 'Villa Corzo', 'Yajalon' => 'Yajalon', 'San Lucas' => 'San Lucas', 'Zinacantan' => 'Zinacantan', 'San Juan Cancuc' => 'San Juan Cancuc', 'Aldama' => 'Aldama', 'Benemerito de las Americas' => 'Benemerito de las Americas', 'Maravilla Tenejapa' => 'Maravilla Tenejapa', 'Marques de Comillas' => 'Marques de Comillas', 'Montecristo de Guerrero' => 'Montecristo de Guerrero'] ,null, ['class' => 'form-control'])!!}
</div>

<!--- City Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('city', 'Ciudad:') !!}
{!! Form::select('municipality',['Acacoyagua' => 'Acacoyagua', 'Acala' => 'Acala', 'Acapetahua' => 'Acapetahua', 'Altamirano' => 'Altamirano', 'Amatan' => 'Amatan', 'Amatenango de la Frontera' => 'Amatenango de la Frontera', 'Amatenango del Valle' => 'Amatenango del Valle', 'Angel Albino Corzo' => 'Angel Albino Corzo', 'Arriaga' => 'Arriaga', 'Bejucal de Ocampo' => 'Bejucal de Ocampo', 'Bella Vista' => 'Bella Vista', 'Berriozabal' => 'Berriozabal', 'Bochil' => 'Bochil', 'El Bosque' => 'El Bosque', 'Cacahoatan' => 'Cacahoatan', 'Catazaja' => 'Catazaja', 'Cintalapa' => 'Cintalapa', 'Coapilla' => 'Coapilla', 'Comitan de Dominguez' => 'Comitan de Dominguez', 'La Concordia' => 'La Concordia', 'Copainala' => 'Copainala', 'Chalchihuitan' => 'Chalchihuitan', 'Chamula' => 'Chamula', 'Chanal' => 'Chanal', 'Chapultenango' => 'Chapultenango', 'Chenalho' => 'Chenalho', 'Chiapa de Corzo' => 'Chiapa de Corzo', 'Chiapilla' => 'Chiapilla', 'Chicoasen' => 'Chicoasen', 'Chicomuselo' => 'Chicomuselo', 'Chilon' => 'Chilon', 'Escuintla' => 'Escuintla', 'Francisco Leon' => 'Francisco Leon', 'Frontera Comalapa' => 'Frontera Comalapa', 'Frontera Hidalgo' => 'Frontera Hidalgo', 'La Grandeza' => 'La Grandeza', 'Huehuetan' => 'Huehuetan', 'Huixtan' => 'Huixtan', 'Huitiupan' => 'Huitiupan', 'Huixtla' => 'Huixtla', 'La Independencia' => 'La Independencia', 'Ixhuatan' => 'Ixhuatan', 'Ixtacomitan' => 'Ixtacomitan', 'Ixtapa' => 'Ixtapa', 'Ixtapangajoya' => 'Ixtapangajoya', 'Jiquipilas' => 'Jiquipilas', 'Jitotol' => 'Jitotol', 'Juarez' => 'Juarez', 'Larrainzar' => 'Larrainzar', 'La Libertad' => 'La Libertad', 'Mapastepec' => 'Mapastepec', 'Las Margaritas' => 'Las Margaritas', 'Mazapa de Madero' => 'Mazapa de Madero', 'Mazatan' => 'Mazatan', 'Metapa' => 'Metapa', 'Mitontic' => 'Mitontic', 'Motozintla' => 'Motozintla', 'Nicolas Ruiz' => 'Nicolas Ruiz', 'Ocosingo' => 'Ocosingo', 'Ocotepec' => 'Ocotepec', 'Ocozocoautla de Espinosa' => 'Ocozocoautla de Espinosa', 'Ostuacan' => 'Ostuacan', 'Osumacinta' => 'Osumacinta', 'Oxchuc' => 'Oxchuc', 'Palenque' => 'Palenque', 'Pantelho' => 'Pantelho', 'Pantepec' => 'Pantepec', 'Pichucalco' => 'Pichucalco', 'Pijijiapan' => 'Pijijiapan', 'El Porvenir' => 'El Porvenir', 'Villa Comaltitlan' => 'Villa Comaltitlan', 'Villa Flores' => 'Villa Flores', 'Pueblo Nuevo Solistahuacan' => 'Pueblo Nuevo Solistahuacan', 'Rayon' => 'Rayon', 'Reforma' => 'Reforma', 'Revolución Mexicana' => 'Revolución Mexicana', 'Las Rosas' => 'Las Rosas', 'Sabanilla' => 'Sabanilla', 'Salto de Agua' => 'Salto de Agua', 'San Cristobal de las Casas' => 'San Cristobal de las Casas', 'San Fernando' => 'San Fernando', 'Siltepec' => 'Siltepec', 'Simojovel' => 'Simojovel', 'Sitala' => 'Sitala', 'Socoltenango' => 'Socoltenango', 'Solosuchiapa' => 'Solosuchiapa', 'Soyalo' => 'Soyalo', 'Suchiapa' => 'Suchiapa', 'Suchiate' => 'Suchiate', 'Sunuapa' => 'Sunuapa', 'Tapachula' => 'Tapachula', 'Tapalapa' => 'Tapalapa', 'Tapilula' => 'Tapilula', 'Tecpatan' => 'Tecpatan', 'Tenejapa' => 'Tenejapa', 'Teopisca' => 'Teopisca', 'Tila' => 'Tila', 'Tonala' => 'Tonala', 'Totolapa', 'La Trinitaria' => 'La Trinitaria', 'Tumbala' => 'Tumbala', 'Tuxtla Gutierrez' => 'Tuxtla Gutierrez', 'Tuxtla Chico' => 'Tuxtla Chico', 'Tuzantan' => 'Tuzantan', 'Tzimol' => 'Tzimol', 'Union Juarez' => 'Union Juarez', 'Venustiano Carranza' => 'Venustiano Carranza', 'Villa Corzo' => 'Villa Corzo', 'Yajalon' => 'Yajalon', 'San Lucas' => 'San Lucas', 'Zinacantan' => 'Zinacantan', 'San Juan Cancuc' => 'San Juan Cancuc', 'Aldama' => 'Aldama', 'Benemerito de las Americas' => 'Benemerito de las Americas', 'Maravilla Tenejapa' => 'Maravilla Tenejapa', 'Marques de Comillas' => 'Marques de Comillas', 'Montecristo de Guerrero' => 'Montecristo de Guerrero'] ,null, ['class' => 'form-control'])!!}
      
</div>

<!--- Federative Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('federative', 'Entidad Federativa:') !!}
    <select class="form-control" name="federative">
<option value="Chiapas">Chiapas</option>
<option value="Aguascalientes">Aguascalientes</option>
<option value="Baja California">Baja California</option>
<option value="Baja California Sur">Baja California Sur</option>
<option value="Campeche">Campeche</option>
<option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
<option value="Colima">Colima</option>
<option value="Chiapas">Chiapas</option>
<option value="Chihuahua">Chihuahua</option>
<option value="Distrito Federal">Distrito Federal</option>
<option value="Durango">Durango</option>
<option value="Guanajuato">Guanajuato</option>
<option value="Guerrero">Guerrero</option>
<option value="Hidalgo">Hidalgo</option>
<option value="Jalisco">Jalisco</option>
<option value="México">México</option>
<option value="Michoacan">Michoacán de Ocampo</option>
<option value="Morelos">Morelos</option>
<option value="Nayarit">Nayarit</option>
<option value="Nuevo León">Nuevo León</option>
<option value="Oaxaca">Oaxaca</option>
<option value="Puebla">Puebla</option>
<option value="Querétaro">Querétaro</option>
<option value="Quintana Roo">Quintana Roo</option>
<option value="San luis Potosí">San Luis Potosí</option>
<option value="Sinaloa">Sinaloa</option>
<option value="Spnora">Sonora</option>
<option value="Tabasco">Tabasco</option>
<option value="Tamaulipas">Tamaulipas</option>
<option value="Tlaxcala">Tlaxcala</option>
<option value="Veracru<">Veracruz de Ignacio de la Llave</option>
<option value="Yucatán">Yucatán</option>
<option value="Zacatecas">Zacatecas</option>
</select>
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>
