<!--- Avenue Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('avenue', 'Avenida:') !!}
    {!! Form::text('avenue', null, ['class' => 'form-control']) !!}
    <input type="hidden" name="accredited_id" value="{{ $accrediteds->id}}">
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
    <select class="form-control" name="municipality">
<option value="">Selecciona un municipio</option>
<option value="Acacoyagua">Acacoyagua</option>
<option value="Acala">Acala</option>
<option value="Acapetahua">Acapetahua</option>
<option value="Altamirano">Altamirano</option>
<option value="Amatan">Amatan</option>
<option value="Amatenango de la Frontera">Amatenango de la Frontera</option>
<option value="Amatenango del Valle">Amatenango del Valle</option>
<option value="Angel Albino Corzo">Angel Albino Corzo</option>
<option value="Arriaga">Arriaga</option>
<option value="Bejucal de Ocampo">Bejucal de Ocampo</option>
<option value="Bella Vista">Bella Vista</option>
<option value="Berriozabal">Berriozabal</option>
<option value="Bochil">Bochil</option>
<option value="El Bosque">El Bosque</option>
<option value="Cacahoatan">Cacahoatan</option>
<option value="Catazaja">Catazaja</option>
<option value="Cintalapa">Cintalapa</option>
<option value="Coapilla">Coapilla</option>
<option value="Comitan de Dominguez">Comitan de Dominguez</option>
<option value="La Concordia">La Concordia</option>
<option value="Copainala">Copainala</option>
<option value="Chalchihuitan">Chalchihuitan</option>
<option value="Chamula">Chamula</option>
<option value="Chanal">Chanal</option>
<option value="Chapultenango">Chapultenango</option>
<option value="Chenalho">Chenalho</option>
<option value="Chiapa de Corzo">Chiapa de Corzo</option>
<option value="Chiapilla">Chiapilla</option>
<option value="Chicoasen">Chicoasen</option>
<option value="Chicomuselo">Chicomuselo</option>
<option value="Chilon">Chilon</option>
<option value="Escuintla">Escuintla</option>
<option value="Francisco Leon">Francisco Leon</option>
<option value="Frontera Comalapa">Frontera Comalapa</option>
<option value="Frontera Hidalgo">Frontera Hidalgo</option>
<option value="La Grandeza">La Grandeza</option>
<option value="Huehuetan">Huehuetan</option>
<option value="Huixtan">Huixtan</option>
<option value="Huitiupan">Huitiupan</option>
<option value="Huixtla">Huixtla</option>
<option value="La Independencia">La Independencia</option>
<option value="Ixhuatan">Ixhuatan</option>
<option value="Ixtacomitan">Ixtacomitan</option>
<option value="Ixtapa">Ixtapa</option>
<option value="Ixtapangajoya">Ixtapangajoya</option>
<option value="Jiquipilas">Jiquipilas</option>
<option value="Jitotol">Jitotol</option>
<option value="Juarez">Juarez</option>
<option value="Larrainzar">Larrainzar</option>
<option value="La Libertad">La Libertad</option>
<option value="Mapastepec">Mapastepec</option>
<option value="Las Margaritas">Las Margaritas</option>
<option value="Mazapa de Madero">Mazapa de Madero</option>
<option value="Mazatan">Mazatan</option>
<option value="Metapa">Metapa</option>
<option value="Mitontic">Mitontic</option>
<option value="Motozintla">Motozintla</option>
<option value="Nicolas Ruiz">Nicolas Ruiz</option>
<option value="Ocosingo">Ocosingo</option>
<option value="Ocotepec">Ocotepec</option>
<option value="Ocozocoautla de Espinosa">Ocozocoautla de Espinosa</option>
<option value="Ostuacan">Ostuacan</option>
<option value="Osumacinta">Osumacinta</option>
<option value="Oxchuc">Oxchuc</option>
<option value="Palenque">Palenque</option>
<option value="Pantelho">Pantelho</option>
<option value="Pantepec">Pantepec</option>
<option value="Pichucalco">Pichucalco</option>
<option value="Pijijiapan">Pijijiapan</option>
<option value="El Porvenir">El Porvenir</option>
<option value="Villa Comaltitlan">Villa Comaltitlan</option>
<option value="Pueblo Nuevo Solistahuacan">Pueblo Nuevo Solistahuacan</option>
<option value="Rayon">Rayon</option>
<option value="Reforma">Reforma</option>
<option value="Revolución Mexicana">Revolución Mexicana</option>
<option value="Las Rosas">Las Rosas</option>
<option value="Sabanilla">Sabanilla</option>
<option value="Salto de Agua">Salto de Agua</option>
<option value="San Cristobal de las Casas">San Cristobal de las Casas</option>
<option value="San Fernando">San Fernando</option>
<option value="Siltepec">Siltepec</option>
<option value="Simojovel">Simojovel</option>
<option value="Sitala">Sitala</option>
<option value="Socoltenango">Socoltenango</option>
<option value="Solosuchiapa">Solosuchiapa</option>
<option value="Soyalo">Soyalo</option>
<option value="Suchiapa">Suchiapa</option>
<option value="Suchiate">Suchiate</option>
<option value="Sunuapa">Sunuapa</option>
<option value="Tapachula">Tapachula</option>
<option value="Tapalapa">Tapalapa</option>
<option value="Tapilula">Tapilula</option>
<option value="Tecpatan">Tecpatan</option>
<option value="Tenejapa">Tenejapa</option>
<option value="Teopisca">Teopisca</option>
<option value="Tila">Tila</option>
<option value="Tonala">Tonala</option>
<option value="Totolapa">Totolapa</option>
<option value="La Trinitaria">La Trinitaria</option>
<option value="Tumbala">Tumbala</option>
<option value="Tuxtla Gutierrez">Tuxtla Gutierrez</option>
<option value="Tuxtla Chico">Tuxtla Chico</option>
<option value="Tuzantan">Tuzantan</option>
<option value="Tzimol">Tzimol</option>
<option value="Union Juarez">Union Juarez</option>
<option value="Venustiano Carranza">Venustiano Carranza</option>
<option value="Villa Corzo">Villa Corzo</option>
<option value="Villaflores">Villaflores</option>
<option value="Yajalon">Yajalon</option>
<option value="San Lucas">San Lucas</option>
<option value="Zinacantan">Zinacantan</option>
<option value="San Juan Cancuc">San Juan Cancuc</option>
<option value="Aldama">Aldama</option>
<option value="Benemerito de las Americas">Benemerito de las Americas</option>
<option value="Maravilla Tenejapa">Maravilla Tenejapa</option>
<option value="Marques de Comillas">Marques de Comillas</option>
<option value="Montecristo de Guerrero">Montecristo de Guerrero</option>
<option value="San Andres Duraznal">San Andres Duraznal</option>
<option value="Santiago el Pinar">Santiago el Pinar</option>
</select>
</div>

<!--- City Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('city', 'Ciudad:') !!}
       <select class="form-control" name="city">
<option value="">Selecciona un municipio</option>
<option value="Acacoyagua">Acacoyagua</option>
<option value="Acala">Acala</option>
<option value="Acapetahua">Acapetahua</option>
<option value="Altamirano">Altamirano</option>
<option value="Amatan">Amatan</option>
<option value="Amatenango de la Frontera">Amatenango de la Frontera</option>
<option value="Amatenango del Valle">Amatenango del Valle</option>
<option value="Angel Albino Corzo">Angel Albino Corzo</option>
<option value="Arriaga">Arriaga</option>
<option value="Bejucal de Ocampo">Bejucal de Ocampo</option>
<option value="Bella Vista">Bella Vista</option>
<option value="Berriozabal">Berriozabal</option>
<option value="Bochil">Bochil</option>
<option value="El Bosque">El Bosque</option>
<option value="Cacahoatan">Cacahoatan</option>
<option value="Catazaja">Catazaja</option>
<option value="Cintalapa">Cintalapa</option>
<option value="Coapilla">Coapilla</option>
<option value="Comitan de Dominguez">Comitan de Dominguez</option>
<option value="La Concordia">La Concordia</option>
<option value="Copainala">Copainala</option>
<option value="Chalchihuitan">Chalchihuitan</option>
<option value="Chamula">Chamula</option>
<option value="Chanal">Chanal</option>
<option value="Chapultenango">Chapultenango</option>
<option value="Chenalho">Chenalho</option>
<option value="Chiapa de Corzo">Chiapa de Corzo</option>
<option value="Chiapilla">Chiapilla</option>
<option value="Chicoasen">Chicoasen</option>
<option value="Chicomuselo">Chicomuselo</option>
<option value="Chilon">Chilon</option>
<option value="Escuintla">Escuintla</option>
<option value="Francisco Leon">Francisco Leon</option>
<option value="Frontera Comalapa">Frontera Comalapa</option>
<option value="Frontera Hidalgo">Frontera Hidalgo</option>
<option value="La Grandeza">La Grandeza</option>
<option value="Huehuetan">Huehuetan</option>
<option value="Huixtan">Huixtan</option>
<option value="Huitiupan">Huitiupan</option>
<option value="Huixtla">Huixtla</option>
<option value="La Independencia">La Independencia</option>
<option value="Ixhuatan">Ixhuatan</option>
<option value="Ixtacomitan">Ixtacomitan</option>
<option value="Ixtapa">Ixtapa</option>
<option value="Ixtapangajoya">Ixtapangajoya</option>
<option value="Jiquipilas">Jiquipilas</option>
<option value="Jitotol">Jitotol</option>
<option value="Juarez">Juarez</option>
<option value="Larrainzar">Larrainzar</option>
<option value="La Libertad">La Libertad</option>
<option value="Mapastepec">Mapastepec</option>
<option value="Las Margaritas">Las Margaritas</option>
<option value="Mazapa de Madero">Mazapa de Madero</option>
<option value="Mazatan">Mazatan</option>
<option value="Metapa">Metapa</option>
<option value="Mitontic">Mitontic</option>
<option value="Motozintla">Motozintla</option>
<option value="Nicolas Ruiz">Nicolas Ruiz</option>
<option value="Ocosingo">Ocosingo</option>
<option value="Ocotepec">Ocotepec</option>
<option value="Ocozocoautla de Espinosa">Ocozocoautla de Espinosa</option>
<option value="Ostuacan">Ostuacan</option>
<option value="Osumacinta">Osumacinta</option>
<option value="Oxchuc">Oxchuc</option>
<option value="Palenque">Palenque</option>
<option value="Pantelho">Pantelho</option>
<option value="Pantepec">Pantepec</option>
<option value="Pichucalco">Pichucalco</option>
<option value="Pijijiapan">Pijijiapan</option>
<option value="El Porvenir">El Porvenir</option>
<option value="Villa Comaltitlan">Villa Comaltitlan</option>
<option value="Pueblo Nuevo Solistahuacan">Pueblo Nuevo Solistahuacan</option>
<option value="Rayon">Rayon</option>
<option value="Reforma">Reforma</option>
<option value="Revolución Mexicana">Revolución Mexicana</option>
<option value="Las Rosas">Las Rosas</option>
<option value="Sabanilla">Sabanilla</option>
<option value="Salto de Agua">Salto de Agua</option>
<option value="San Cristobal de las Casas">San Cristobal de las Casas</option>
<option value="San Fernando">San Fernando</option>
<option value="Siltepec">Siltepec</option>
<option value="Simojovel">Simojovel</option>
<option value="Sitala">Sitala</option>
<option value="Socoltenango">Socoltenango</option>
<option value="Solosuchiapa">Solosuchiapa</option>
<option value="Soyalo">Soyalo</option>
<option value="Suchiapa">Suchiapa</option>
<option value="Suchiate">Suchiate</option>
<option value="Sunuapa">Sunuapa</option>
<option value="Tapachula">Tapachula</option>
<option value="Tapalapa">Tapalapa</option>
<option value="Tapilula">Tapilula</option>
<option value="Tecpatan">Tecpatan</option>
<option value="Tenejapa">Tenejapa</option>
<option value="Teopisca">Teopisca</option>
<option value="Tila">Tila</option>
<option value="Tonala">Tonala</option>
<option value="Totolapa">Totolapa</option>
<option value="La Trinitaria">La Trinitaria</option>
<option value="Tumbala">Tumbala</option>
<option value="Tuxtla Gutierrez">Tuxtla Gutierrez</option>
<option value="Tuxtla Chico">Tuxtla Chico</option>
<option value="Tuzantan">Tuzantan</option>
<option value="Tzimol">Tzimol</option>
<option value="Union Juarez">Union Juarez</option>
<option value="Venustiano Carranza">Venustiano Carranza</option>
<option value="Villa Corzo">Villa Corzo</option>
<option value="Villaflores">Villaflores</option>
<option value="Yajalon">Yajalon</option>
<option value="San Lucas">San Lucas</option>
<option value="Zinacantan">Zinacantan</option>
<option value="San Juan Cancuc">San Juan Cancuc</option>
<option value="Aldama">Aldama</option>
<option value="Benemerito de las Americas">Benemerito de las Americas</option>
<option value="Maravilla Tenejapa">Maravilla Tenejapa</option>
<option value="Marques de Comillas">Marques de Comillas</option>
<option value="Montecristo de Guerrero">Montecristo de Guerrero</option>
<option value="San Andres Duraznal">San Andres Duraznal</option>
<option value="Santiago el Pinar">Santiago el Pinar</option>
</select>
</div>

<!--- Federative Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('federative', 'Entidad Federativa:') !!}
    <select class="form-control" name="federative">
<option value="Todo México">Todo México</option>
<option value="Aguascalientes">Aguascalientes</option>
<option value="Baja California">Baja California</option>
<option value="Baja California Sur">Baja California Sur</option>
<option value="Campeche">Campeche</option>
<option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
<option value="colima">Colima</option>
<option value="Chiapas">Chiapas</option>
<option value="Chihuahua">Chihuahua</option>
<option value="9">Distrito Federal</option>
<option value="10">Durango</option>
<option value="11">Guanajuato</option>
<option value="12">Guerrero</option>
<option value="13">Hidalgo</option>
<option value="14">Jalisco</option>
<option value="15">México</option>
<option value="16">Michoacán de Ocampo</option>
<option value="17">Morelos</option>
<option value="18">Nayarit</option>
<option value="19">Nuevo León</option>
<option value="20">Oaxaca</option>
<option value="21">Puebla</option>
<option value="22">Querétaro</option>
<option value="23">Quintana Roo</option>
<option value="24">San Luis Potosí</option>
<option value="25">Sinaloa</option>
<option value="26">Sonora</option>
<option value="27">Tabasco</option>
<option value="28">Tamaulipas</option>
<option value="29">Tlaxcala</option>
<option value="30">Veracruz de Ignacio de la Llave</option>
<option value="31">Yucatán</option>
<option value="32">Zacatecas</option>
</select>
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>
