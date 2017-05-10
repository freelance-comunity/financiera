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
<h3 align="center">INFORMACIÓN BÁSICA DEL CLIENTE</h3><br>
@php
$user = $accredited->user;
$branch = $accredited->branch;
@endphp
<p><strong>Asesor de Crédito:</strong> {{$user->name}} {{ $user->last_name}}  &nbsp; &nbsp; &nbsp;<strong>Sucursal:</strong> {{$branch->nomenclature}}</p> <br>
<strong>1. DATOS DEL SOLICITANTE</strong>
<p><strong>Apellidos: </strong>{{$accredited->last_name}} &nbsp;&nbsp;&nbsp;&nbsp;<strong>Nombre(s):</strong>{{$accredited->name}}</p>


</body>
</html>	