<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Expediente de crédito</title>
	<style>
		.page-break
		{
			page-break-after: always;
		}
		@page {
			size: A4 portrait; /* can use also 'landscape' for orientation */
		}
		h1{
			text-align: center;
		}
		p{
			text-align: justify;
			text-justify: inter-word;
			font-size: 11px;
		}
		.title
		{
			text-align: justify;
			font-size: 14px;	
		}
		.demo {
			width:100%;
			border:2px solid #000000;
			border-collapse:collapse;
			border-spacing:4px;
			padding:5px;
		}
		.demo th {
			border:2px solid #000000;
			padding:5px;
			background:#F0F0F0;
			text-align: center;
		}
		.demo td {
			border:2px solid #000000;
			text-align:center;
			padding:5px;
		}
		.clearfix:after {
			content: "";
			display: table;
			clear: both;
		}
		header {
			padding: 5px 0;
			margin-bottom: 20px;
			border-bottom: 1px solid #AAAAAA;
		}

		#logo {
			float: left;
			margin-top: 5px;
			margin-left: 1px;
		}

		#logo img {
			height: 100px;
		}

		#company {
			float: center;
			text-align: center;
		}
		h2.name {
			font-size: 1.0em;
			font-weight: normal;
			margin: 0;
		}
		.left
		{
			width: 50%;
		}
		.right
		{
			width: 50%;
		}
		.one
		{
			float: left;
			width: 50%;
		}
		.two
		{
			float: right;
			width: 50%;
		}
	</style>
</head>
<body>
	<header class="clearfix">
		<div id="logo">
			<img src="{{asset('img/pdf/logo_sc.png')}}">
		</div>
		<div id="company">
			<strong><h2 class="name">CALENDARIO DE PAGOS</h2></strong>
			<h2 class="name">SOLUCIÓN Y CRECIMIENTO EMPRESARIAL, S.A. DE C.V.</h2>
			<div>Av. Central  Poniente #119, Villaflores, Chiapas C.P. 30470</div>
			<div>(965) 652-0397</div>
			<div>contacto@sc-empresarial.com.mx</div>
		</div>
	</div>
</header>
<?php 
$holidays = App\Models\Holidays::all();
$dateToday = new \Carbon\Carbon($credit->date_ministration);
for ($i = 0; $i <=$credit->term ; $i++){
$dateToday->addWeek(); 

$fechaPago[$i] = $dateToday->toDateString();


foreach ($holidays as $value){ 
if ($value->date == $fechaPago[$i]){
$dateToday->addDay();
$fechaPago[$i] = $dateToday->toDateString();

}
}

}
?>	
<table class="demo">
	<caption>
		<p>CLIENTE: <strong>{{$credit->accredited->name}} {{$credit->accredited->last_name}}</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  PROMOTOR: <strong>{{$credit->accredited->user->name}} {{$credit->accredited->user->last_name}}</strong></p>
	</caption>
	<caption>
		<p>FECHA DE MINISTRACIÓN: <strong>{{$credit->date_ministration}}</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </strong></p>
	</caption>
	<caption>
		<p>MONTO: <strong>${{$credit->authorized_amount}}</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  FRECUENCIA:<strong>{{$credit->term}} días</strong></p>
	</caption>
	<thead>
		<tr>
			<th>No. DE PAGO</th>
			<th>FECHA</th>
			<th>CAPITAL</th>
			<th>INTERES</th>
			<th>TOTAL PAGO</th>
			<th>FIRMA DE RECIBIDO</th>
		</tr>
	</thead>
	<tbody>

		@for ($j = 1; $j <= $credit->term; $j++)
		<tr> 
			<td>&nbsp;{{$j}}</td>
			<td>&nbsp;{{ $fechaPago[$j-1] }}</td>
			<td>&nbsp;{{ number_format($capital,2)}}</td>
			<td>&nbsp;{{ number_format($rest,2)}}</td>
			<td>&nbsp;{{ number_format(ceil($f),2)}}</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr>


		@endfor
	</tbody>
</table>
<h1 style="text-align: center;">"EVITE RECARGOS PAGUE PUNTUAL"</h1>
<h2 style="text-align: center;">SE LE RECUERDA QUE EL HORARIO DE ATENCIÓN ES DE 9:00 DE LA MAÑANA A 4:30 DE LA TARDE DE LUNES A VIERNES.</h2>
</body>
</html>