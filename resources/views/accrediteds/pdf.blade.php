<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Expediente de {{ strtoupper($accredited->name) }} {{  strtoupper($accredited->last_name) }}</title>
	<link rel="stylesheet" href="{{asset('css/pdf/style.css')}}" media="all" />
	<link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
	<header class="clearfix">
		<div id="logo">
			<img src="{{asset('img/pdf/logo_sc.png')}}">
		</div>
		<div id="company">
			<h2 class="name">SOLUCIÓN Y CRECIMIENTO EMPRESARIAL, S.A. DE C.V.</h2>
			<div>Av. Central Poniente #119, Villaflores, Chiapas C.P. 30470</div>
			<div>(965) 652-0397</div>
			<div><a href="#">contacto@sc-empresarial.com.mx</a></div>
		</div>
	</div>
</header>
<h3 align="center">EXPEDIENTE DEL ACREDITADO</h3><br>
@php
$user = $accredited->user;
$branch = $accredited->branch;
$addresses = $accredited->addresses;
$study = $accredited->studies;
$aval = $accredited->avals;
$micros = $accredited->micros;
$histories = $accredited->history;
$references = $accredited->references;
@endphp
<p style="padding: 15px;"><strong>Asesor de Crédito:</strong> {{ strtoupper($user->name) }} {{  strtoupper($user->last_name) }}  &nbsp; &nbsp; &nbsp;<strong>Sucursal:</strong> {{ strtoupper($branch->nomenclature) }}</p> <br>
<div class="part3">
	
	<img class="profile-user-img img-responsive img-circle" src="{{ asset('img/uploads') }}/{{$accredited->photo}}" alt="User profile picture"><br><br><br><br><br><br><br>

	<strong>1. DATOS DEL ACREDITADO</strong><br><br>
	<p><strong>Nombre completo: </strong> {{strtoupper($accredited->name) }} {{strtoupper($accredited->last_name) }}</p>
	<p><strong>Dirección del Domicilio: </strong>{{strtoupper($accredited->address) }}</p>
	<p><strong>Nacionalidad: </strong>{{strtoupper($accredited->nationality) }}</p>
	<p><strong>Fecha de nacimiento:</strong>{{strtoupper($accredited->birthdate) }}</p>
	<p><strong>Folio INE:</strong> {{strtoupper($accredited->ife) }} </p>
	<strong>CURP: </strong>{{strtoupper($accredited->curp) }} <br>
	<p><strong>Teléfono de casa: </strong>{{strtoupper($accredited->phone) }}  </p>
	<strong>Teléfono celular: </strong>{{strtoupper($accredited->cel) }} <br>
	<p><strong>Sexo: </strong>{{strtoupper($accredited->sex) }} </p>
	<strong>Estado civil: </strong>{{strtoupper($accredited->civil_status) }}
	<br>
	<br>
	<strong>3. ESTUDIO SOCIOECONOMICO</strong><br><br>
	@foreach($study as $element)
	<strong>Dependientes economicos: </strong>{{  strtoupper($element->dependent) }} <br>
	<strong>Régimen de casamiento:</strong> {{  strtoupper($element->regimen) }} <br>
	<strong>Tipo de vivienda:</strong> {{  strtoupper($element->type_housing) }} <br>	
	<strong>La vivienda es:</strong> {{  strtoupper($element->type_home) }} <br>	
	<strong>Tiempo de vivir en el mismo domicilio:</strong> {{  strtoupper($element->time_address) }} <br>
	<strong>Nivel socioeconomico:</strong> {{ strtoupper($element->economic) }} <br>	
	<strong>Tipo de material de la vivienda:</strong> {{ strtoupper($element->type_material) }} <br>	
	<strong>Escolaridad:</strong> {{ strtoupper($element->scholarship) }} <br>	
	<strong>Grado:</strong> {{ strtoupper($element->school_grade) }} <br>	
	<strong>Rubro de la empresa:</strong> {{ strtoupper($element->sector) }} <br>
	<strong>Naturaleza jurídca de la empresa:</strong> {{ strtoupper($element->sector) }}
	@endforeach
	<br>
	<br>
	
	<strong>5. DATOS DE LA MICROEMPRESA</strong><br><br>
	@foreach ($micros as $micros)
	<strong>Nombre: </strong>{{  strtoupper($micros->name) }} <br>
	<strong>Dirección:</strong> {{  strtoupper($micros->address) }} <br>	
	<strong>Colonia:</strong> {{  strtoupper($micros->colony) }} <br>	
	<strong>Municipio:</strong> {{  strtoupper($micros->municipality) }} <br>
	<strong>Giro o actividad principal:</strong> {{ strtoupper($micros->activity) }} <br>	
	<strong>Antiguedad de la empresa:</strong> {{ strtoupper($micros->antiquity) }} <br>	
	<strong>Antiguedad en la localidad:</strong> {{ strtoupper($micros->antiquity_locality) }} <br>	
	<strong>Tipo de negocio:</strong> {{ strtoupper($micros->business_type) }} <br>	
	<strong>Horario de Atencion en su negocio:</strong> {{ strtoupper($micros->times) }} <br>
	<strong>Local comercial:</strong> {{ strtoupper($micros->local) }}
	@endforeach
	<br>
</div>
<div class="part4">
	<br>
	<strong>2. DATOS DOMICILIARIOS</strong><br><br>
	@foreach ($addresses as $addresses)
	<strong>Avenida: </strong>{{  strtoupper($addresses->avenue) }} <br>
	<strong>Entre que calles:</strong> {{  strtoupper($addresses->streets) }} <br>
	<strong>Número interior y exterior:</strong> {{  strtoupper($addresses->number) }} <br>	
	<strong>Colonia:</strong> {{  strtoupper($addresses->colony) }} <br>	
	<strong>Referencia:</strong> {{  strtoupper($addresses->reference) }} <br>
	<strong>Código postal:</strong> {{ strtoupper($addresses->postal_code) }} <br>	
	<strong>Municipio:</strong> {{ strtoupper($addresses->municipality) }} <br>	
	<strong>Ciudad:</strong> {{ strtoupper($addresses->city) }} <br>	
	<strong>Entidad federativa:</strong> {{ strtoupper($addresses->federative) }} <br>				
	@endforeach 
	<br>
	<strong>4. DATOS DEL AVAL</strong><br><br>
	@foreach($aval as $aval)
	<strong>Nombre: </strong>{{  strtoupper($aval->name) }} <br>
	<strong>Apellido:</strong> {{  strtoupper($aval->last_name) }} <br>
	<strong>Dirección:</strong> {{  strtoupper($aval->address) }} <br>	
	<strong>Colonia:</strong> {{  strtoupper($aval->colony) }} <br>	
	<strong>Municipio:</strong> {{  strtoupper($aval->municipality) }} <br>
	<strong>Nacionalidad:</strong> {{ strtoupper($aval->nacionality) }} <br>	
	<strong>Lugar de nacimiento:</strong> {{ strtoupper($aval->place) }} <br>	
	<strong>Fecha de nacimiento:</strong> {{ strtoupper($aval->birthday) }} <br>	
	<strong>Folio IFE:</strong> {{ strtoupper($aval->ife) }} <br>	
	<strong>CURP:</strong> {{ strtoupper($aval->curp) }} <br>
	<strong>Teléfono de casa:</strong> {{ strtoupper($aval->phone) }} <br>
	<strong>Teléfono celular:</strong> {{ strtoupper($aval->cel) }} <br>
	<strong>Sexo:</strong> {{ strtoupper($aval->sex) }} <br>
	<strong>Ocupación:</strong> {{ strtoupper($aval->ocupation) }} <br>
	<strong>Dirrección de trabajo:</strong> {{ strtoupper($aval->address_work) }}
	@endforeach
	<br>
	<br>
	<strong>6. ANTECEDENTES CREDITICIOS</strong><br><br>
	@foreach ($histories as $history)
	<strong>Credito Actual: </strong>{{  strtoupper($history->credit_actualy) }} <br>
	<strong>Nombre de la empresa:</strong> {{  strtoupper($history->name_company) }} <br>	
	<strong>Monto recibido:</strong> {{  strtoupper($history->amount) }} <br>	
	<strong>Plazo:</strong> {{  strtoupper($history->term) }} <br>
	<strong>Monto de pago por amortización:</strong> {{ strtoupper($history->payment_amount) }}
	@endforeach
	<br>
	<br>
	<strong>7. REFERENCIAS</strong><br><br>
	@foreach($references as $references)
	<strong>Nombre: </strong>{{  strtoupper($references->name) }} <br>
	<strong>Apellido:</strong> {{  strtoupper($references->last_name) }} <br>	
	<strong>Dirección:</strong> {{  strtoupper($references->address) }} <br>	
	<strong>Teléfono:</strong> {{  strtoupper($references->phone) }} <br>
	<strong>Perentezco:</strong> {{ strtoupper($references->relationship) }}
	@endforeach
</div>

</body>
</html>	