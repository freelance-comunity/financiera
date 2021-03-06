<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Solicitud de Condonación</title>
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
			font-size: 15px;
		}
		table {
			border-collapse: collapse;
			width: 65%;
			position: relative;
			left: 130px;

		}

		table, th, td {
			border: 1px solid black;
		}


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
	label.sub  {
		text-decoration: underline;
	}


</style>
</head>
<body>
	<header class="clearfix">
		<div id="logo">
			<img src="{{asset('img/pdf/logo_sc.png')}}">
		</div>
		<div id="company">
			<h2 class="name"></h2>
			<h2 class="name">SOLUCIÓN Y CRECIMIENTO EMPRESARIAL, S.A. DE C.V.</h2>
			<div>Av. Central  Poniente #119, Villaflores, Chiapas C.P. 30470</div>
			<div>(965) 652-0397</div>
			<div>contacto@sc-empresarial.com.mx</div>
		</div>
	</div>
</header>
<p style="text-align: center; text-decoration: underline"><strong>SOLICITUD DE CONDONACIÓN</strong></p>
<p style=""><strong style="text-align: left; text-decoration: underline">DATOS DEL CREDITO</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<strong style="text-align: center;">FECHA:</strong> 16-06-207</p>
	<div style="border: 1px solid black; padding: 5px 5px 5px 80px;; ">
		<p><strong>Sucursal:</strong> {{$credit->accredited->branch->nomenclature}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Promotor: </strong>{{$credit->adviser}}</p>
		<p><strong>Cliente: </strong> {{$credit->accredited->name}} {{$credit->accredited->last_name}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Monto desembolsado:</strong> ${{number_format($credit->authorized_amount)}}</p>
		<p><strong>Plazo:</strong> {{$credit->term}} días &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Número de amortizaciones:</strong> {{$credit->term}}</p>
	</div>
	<br>
	<table>
  <tr style="text-align: center;">
    <th>Detalle</th>
    <th>{{$condonation->ammount}}</th>
  </tr>
  <tr>
    <td>Recargos</td>
    <td>Un chingo de dinero</td>
  </tr>
  <tr>
    <td><strong>TOTAL</strong></td>
    <td>Si arriba es un chingo aca es un putero</td>
  </tr>
</table>
<br>
<p>Correspondiente a los vencimientos del <label style="text-decoration: underline;"> 25 de Junio de 2017</label> al  <label style="text-decoration: underline;">28 de Octubre de 2017</label>
</p>
<p><strong>JUSTIFICACIÓN DEL PROMOTOR DE CREDITO:
</strong></p>
<p style="text-decoration: underline;">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum natus quia officiis maiores fugit asperiores quo doloremque eligendi sint at quibusdam nostrum, accusantium iusto sed facere rerum ea. Sed, explicabo?
</p>
<br>
<br>

<p style="text-align: center; text-decoration: underline;">{{$credit->adviser}}</p>
<p style="text-align: center">Nombre y firma del Promotor</p>
<br>
<p style="text-align: center;"><strong>AUTORIZACIÓN</strong></p>
<br>
<p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dirección de Crédito&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesa de Control</p>
</body>
</html>