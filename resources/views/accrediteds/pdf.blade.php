<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Expediente de {{$accredited->name}} {{ $accredited->last_name}}</title>
	<link rel="stylesheet" href="{{asset('css/pdf/style.css')}}" media="all" />
	<link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
	<header class="clearfix">
		<div id="logo">
			<img src="{{asset('img/pdf/logo.png')}}">
		</div>
		<div id="company">
			<h2 class="name">SOLUCIÓN Y CRECIMIENTO EMPRESARIAL, S.A. DE C.V.</h2>
			<div>Av. Central y 5a. Poniente #119, Villaflores, Chiapas C.P. 30470</div>
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
<p style="padding: 15px;"><strong>Asesor de Crédito:</strong> {{$user->name}} {{ $user->last_name}}  &nbsp; &nbsp; &nbsp;<strong>Sucursal:</strong> {{$branch->nomenclature}}</p> <br>
<div class="part3">
	
	<img class="profile-user-img img-responsive img-circle" src="{{ asset('img/uploads') }}/{{$accredited->photo}}" alt="User profile picture"><br><br><br><br><br><br><br>

	<strong>1. DATOS DEL ACREDITADO</strong><br><br>
	<p><strong>Nombre completo: </strong> {{$accredited->name}} {{$accredited->last_name}}</p>
	<p><strong>Dirección del Domicilio: </strong>{{$accredited->address}}</p>
	<p><strong>Nacionalidad: </strong>{{$accredited->nationality}}</p>
	<p><strong>Fecha de nacimiento:</strong>{{$accredited->birthdate}}</p>
	<p><strong>Folio INE:</strong> {{$accredited->ife}} </p>
	<strong>CURP: </strong>{{$accredited->curp}} <br>
	<p><strong>Teléfono de casa: </strong>{{$accredited->phone}}  </p>
	<strong>Teléfono celular: </strong>{{$accredited->cel}} <br>
	<p><strong>Sexo: </strong>{{$accredited->sex}} </p>
	<strong>Estado civil: </strong>{{$accredited->civil_status}}
	<br>
	<br>
	
	<strong>3. ESTUDIO SOCIOECONOMICO</strong><br><br>
	@foreach($study as $element)
	<strong>Dependientes economicos: </strong>{{ $element->dependent}} <br>
	<strong>Régimen de casamiento:</strong> {{ $element->regimen}} <br>
	<strong>Tipo de vivienda:</strong> {{ $element->type_housing}} <br>	
	<strong>La vivienda es:</strong> {{ $element->type_home}} <br>	
	<strong>Tiempo de vivir en el mismo domicilio:</strong> {{ $element->time_address}} <br>
	<strong>Nivel socioeconomico:</strong> {{$element->economic}} <br>	
	<strong>Tipo de material de la vivienda:</strong> {{$element->type_material}} <br>	
	<strong>Escolaridad:</strong> {{$element->scholarship}} <br>	
	<strong>Grado:</strong> {{$element->school_grade}} <br>	
	<strong>Rubro de la empresa:</strong> {{$element->sector}} <br>
	<strong>Naturaleza jurídca de la empresa:</strong> {{$element->sector}}
	@endforeach
	<br>
	<br>
	
	<strong>5. DATOS DE LA MICROEMPRESA</strong><br><br>
	@foreach ($micros as $micros)
	<strong>Nombre: </strong>{{ $micros->name}} <br>
	<strong>Dirección:</strong> {{ $micros->address}} <br>	
	<strong>Colonia:</strong> {{ $micros->colony}} <br>	
	<strong>Municipio:</strong> {{ $micros->municipality}} <br>
	<strong>Giro o actividad principal:</strong> {{$micros->activity}} <br>	
	<strong>Antiguedad de la empresa:</strong> {{$micros->antiquity}} <br>	
	<strong>Antiguedad en la localidad:</strong> {{$micros->antiquity_locality}} <br>	
	<strong>Tipo de negocio:</strong> {{$micros->business_type}} <br>	
	<strong>Horario de Atencion en su negocio:</strong> {{$micros->times}} <br>
	<strong>Local comercial:</strong> {{$micros->local}}
	@endforeach
	<br>
</div>
<div class="part4">
	<br>
	<strong>2. DATOS DOMICILIARIOS</strong><br><br>
	@foreach ($addresses as $addresses)
	<strong>Avenida: </strong>{{ $addresses->avenue}} <br>
	<strong>Entre que calles:</strong> {{ $addresses->streets}} <br>
	<strong>Número interior y exterior:</strong> {{ $addresses->number}} <br>	
	<strong>Colonia:</strong> {{ $addresses->colony}} <br>	
	<strong>Referencia:</strong> {{ $addresses->reference}} <br>
	<strong>Código postal:</strong> {{$addresses->postal_code}} <br>	
	<strong>Municipio:</strong> {{$addresses->municipality}} <br>	
	<strong>Ciudad:</strong> {{$addresses->city}} <br>	
	<strong>Entidad federativa:</strong> {{$addresses->federative}} <br>				
	@endforeach 
	<br>
	<strong>4. DATOS DEL AVAL</strong><br><br>
	@foreach($aval as $aval)
	<strong>Nombre: </strong>{{ $aval->name}} <br>
	<strong>Apellido:</strong> {{ $aval->last_name}} <br>
	<strong>Dirección:</strong> {{ $aval->address}} <br>	
	<strong>Colonia:</strong> {{ $aval->colony}} <br>	
	<strong>Municipio:</strong> {{ $aval->municipality}} <br>
	<strong>Nacionalidad:</strong> {{$aval->nacionality}} <br>	
	<strong>Lugar de nacimiento:</strong> {{$aval->place}} <br>	
	<strong>Fecha de nacimiento:</strong> {{$aval->birthday}} <br>	
	<strong>Folio IFE:</strong> {{$aval->ife}} <br>	
	<strong>CURP:</strong> {{$aval->curp}} <br>
	<strong>Teléfono de casa:</strong> {{$aval->phone}} <br>
	<strong>Teléfono celular:</strong> {{$aval->cel}} <br>
	<strong>Sexo:</strong> {{$aval->sex}} <br>
	<strong>Ocupación:</strong> {{$aval->ocupation}} <br>
	<strong>Dirrección de trabajo:</strong> {{$aval->address_work}}
	@endforeach
	<br>
	<br>
	<strong>6. ANTECEDENTES CREDITICIOS</strong><br><br>
	@foreach ($histories as $history)
	<strong>Credito Actual: </strong>{{ $history->credit_actualy}} <br>
	<strong>Nombre de la empresa:</strong> {{ $history->name_company}} <br>	
	<strong>Monto recibido:</strong> {{ $history->amount}} <br>	
	<strong>Plazo:</strong> {{ $history->term}} <br>
	<strong>Monto de pago por amortización:</strong> {{$history->payment_amount}}
	@endforeach
	<br>
	<br>
	<strong>7. REFERENCIAS</strong><br><br>
	@foreach($references as $references)
	<strong>Nombre: </strong>{{ $references->name}} <br>
	<strong>Apellido:</strong> {{ $references->last_name}} <br>	
	<strong>Dirección:</strong> {{ $references->address}} <br>	
	<strong>Teléfono:</strong> {{ $references->phone}} <br>
	<strong>Perentezco:</strong> {{$references->relationship}}
	@endforeach
</div>

</body>
</html>	